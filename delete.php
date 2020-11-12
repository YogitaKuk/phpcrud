<?php

include 'connection.php';

$id = $_GET['id'];

$sql = " DELETE FROM `phpcrudtable` WHERE id = $id ";

mysqli_query($con, $sql);

header('location:view.php');

?>
