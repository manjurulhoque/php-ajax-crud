<?php include("db.php");?>
<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "select * from todos where id=".$id;
    $result = mysqli_query($connection, $query);
    if(!$result)
    {
        die(mysqli_error($connection));
    }
    else
    {
        $row = mysqli_fetch_array($result);
    }
}
if(isset($_POST['update']))
{
    $id = mysqli_real_escape_string($connection, $_POST['id']);
    $name = mysqli_real_escape_string($connection, $_POST['name']);
    $description = mysqli_real_escape_string($connection, $_POST['description']);
    $query = "update todos set name='$name', description='$description' where id='$id'";
    $result = mysqli_query($connection, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update TODO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-1">
                <a href="index.php" class="btn btn-primary">Back Todos</a>
                <form method="post" action="">
                    <div class="form-group">
                        <label>Todo Name</label>
                        <input type="text" value="<?php echo $row['name'] ?>" name="name" class="form-control name" required>
                    </div>
                    <div class="form-group">
                        <label>Todo Description</label>
                        <textarea class="form-control description" name="description" rows="4" required><?php echo $row['description'] ?></textarea>
                    </div>
                    <div class="form-group">
                        <input type="button" rel='<?php echo $row['id'] ?>' class="btn btn-warning update" value="Update">
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