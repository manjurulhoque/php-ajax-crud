<?php include("db.php");?>
<?php
if(isset($_GET['id']))
{
    $id = $_GET['id'];
    $query = "select * from todos where id=".$id;
    $result = mysqli_query($connection, $query);
    $row = mysqli_fetch_array($result);
}
if(isset($_POST['delete']))
{
    $id = $_POST['id'];
    $query = "delete from todos where id=".$id;
    $result = mysqli_query($connection, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Ajax TODO</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>

    <div class="container">
        <div class="row">
            <a href="index.php" class="btn btn-primary">Back Todos</a>
            <div class="well">
                <h3><?php echo "<p>".$row['name']."</p>"; ?></h3>
                <p><?php echo "<p>".$row['description']."</p>"; ?></p>
                <p><?php echo "<input type='button' rel='{$row['id']}' class='btn btn-danger delete' value='Delete'>"; ?></p>
                <p><?php echo "<a href='update.php?id=".$row['id']."' class='btn btn-success'>Update</a>"; ?></p>
            </div>
        </div>
    </div>
    
    <script src="js/jquery-2.2.3.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>