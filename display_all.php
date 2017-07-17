<?php include("db.php");?>
<?php
$query = "select * from todos";
$result = mysqli_query($connection, $query);
while($row = mysqli_fetch_array($result))
{
    echo "<tr>";
    echo "<td id='id'>{$row['id']}</td>";
    echo "<td>{$row['name']}</td>";
    echo "<td>{$row['description']}</td>";
    echo "<td><a href='show.php?id={$row['id']}' class='btn btn-success show'>Show</a></td>";
    echo "</tr>";
}
?>