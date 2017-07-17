<?php
$connection = mysqli_connect('localhost', 'root', '', 'ajax_todo');

if(!$connection)
{
    die("Not connected". mysqli_error($connection));
}


?>