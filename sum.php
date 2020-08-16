<?php

include 'connection.php';

$id = $_GET['id'];

$query = " Select sum(ques1) from ipl_mens
          where id = '$id' ";

mysqli_query($conn, $query);

header('location: f_ipl_mens.php');

?>

