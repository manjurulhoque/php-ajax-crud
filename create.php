<?php include("db.php");?>
<?php
if(isset($_POST['name']))
{
    $name = $_POST['name'];
    $description = $_POST['description'];
    $query = "insert into todos(name, description) values('$name', '$description')";
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die(mysqli_error($connection));
    }
    else
    {
        header("Location: index.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create TODO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <a href="index.php" class="btn btn-primary">Back Todos</a>
                <form method="post" action="create.php" id="add_todo">
                    <div class="form-group">
                        <label>Todo Name</label>
                        <input type="text" name="name" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Todo Description</label>
                        <textarea class="form-control" name="description" rows="4" required></textarea>
                    </div>
                    <div class="form-group">
                        <input type="submit" class="btn btn-warning" value="Create">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-2.2.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>