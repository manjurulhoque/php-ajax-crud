$(function(){

    setInterval(function(){
        load();
    }, 1000);

    function load()
    {
        $.ajax({
            url: 'display_all.php',
            type: 'POST',
            success: function(data){
                $('#show_todos').html(data);
            }
       });
    };

    $('#add_todo').submit(function(event){
        event.preventDefault();

        var form_data = $(this).serialize();

        var urls = $(this).attr('action');

        $.post(urls, form_data, function(){
			alert("Added");
			window.location = "index.php";
		});
    });

    $('.delete').on('click', function(){
        var id = $(this).attr('rel');
        //alert(id);
        $.post("show.php", {id: id, delete: "delete"}, function(data){
            alert("Deleted");
            window.location = "index.php";
        });
    });

    $('.update').on('click', function(){
        var id = $(this).attr('rel');
        var name = $('.name').val();
        var description = $('.description').val();
        //alert(id);
        $.post("update.php", {id: id, name: name, description: description, update: "update"}, function(data){
            alert("Updated");
            window.location = "index.php";
        });
    });
});