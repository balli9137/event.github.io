<?php
include 'connection.php';

if(isset($_POST['done'])){

$id             = $_GET['id'];
$name           = $_POST['name'] ;
$email          = $_POST['email'];
$contact        = $_POST['phone'];

$sql = " UPDATE register SET id= '$id', name= '$name', email= '$email', contact='$contact' WHERE id= '$id' ";

mysqli_query($conn ,  $sql);

header('location: p_delete_update.php');


}
?>

<!Doctype HTML>
<html>
<head>
    <title>
        Update Participant
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="delete_update.css">
</head>
<body>
<form method="POST"> <center>
    <div>
        <img src="logo.jpg" alt="cricket img" class="logo" />
        <div class="heading"> <br> <br> <br>
        <h1 style="color: #03084E;">
            Update Participant Name, Email & Contact
        </h1>
        </div>
    </div></center><br><br><br>
    <div class="register">
        <a>
                            <b>Name:</b>
                        </a> <br>
            <input type="text"  class="box" name= "name"   required placeholder="Your Full Name"/> <br><br>
        <a>
                            <b>Email:</b>
                        </a> <br>
            <input type="email"  class="box"  name= "email"  required placeholder="Your email"/>     <br><br>
        <a>
                            <b>Contact:</b>
                        </a> <br>
            <input type="number"  class="box" name= "phone"  required placeholder="Your mobile no."/><br><br>
        <button type="submit" class="btn" name="done">
                            <a>
                                <b>
                                    Submit
                                </b>
                            </a>
                        </button>
                    </div>
</form>
</body>
</html>
