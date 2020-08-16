<?php
include 'connection.php';

$id = $_GET['id'];

$sql = " delete from register where id = '$id' ";

mysqli_query($conn, $sql);

header('location: p_delete_update.php');

?>