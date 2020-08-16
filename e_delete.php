<?php
include 'connection.php';

$id = $_GET['id'];

$sql = " delete from register where id = '$id' ";

mysqli_query($conn, $sql);

header('location: e_delete_update.php');

?>