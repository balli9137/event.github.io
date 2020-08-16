<?php
include 'connection.php';

if(isset($_POST['done']))
{
    $eventselection = $_POST['eventselection'];
    $name           = $_POST['name'] ;
    $email          = $_POST['email'];
    $date           = $_POST['date'];
    $contact        = $_POST['phone'];

    $sql = "insert into register(event, name , email, contact, date)
                         values ('$eventselection', '$name', '$email', '$contact', '$date')";

    mysqli_query($conn ,  $sql);
}
?>

<!Doctype HTML>
<html>
    <head>
        <title>
            Registration Form
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="Registration.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <center>
            <form method="POST" formaction="Registration.php">
                <div>
                    <img src="logo.jpg" alt="cricket img" class="logo" />
                        <div class="heading"> <br> <br> <br>
                            <h1 style="color: #03084E;">
                                Events/Participants
                            </h1>
                        </div> <br>
                    <div style="width:25%; color: red;">
                        <marquee>
                            <p>
                                <b>!! Registration Form !!</b>
                            </p>
                        </marquee>
                    </div>
        </center> <br>
                    <div class="register">
                        <a>
                            <b>Choose Event:</b>
                        </a> <br>
                        <select name="eventselection" required class="box"> 
                            <option value="None">
                                -----Select-----
                            </option>
                            <optgroup label="Indian Premiere League">
                                <option value="IPL-Mens">
                                    IPL-Mens
                                </option>
                                <option value="IPL-Womens">
                                    IPL-Womens
                                </option>
                            </optgroup>
                            <optgroup label="Big Bash League">
                                <option value="BBL-Mens">
                                    BBL-Mens
                                </option>
                                <option value="BBL-Womens">
                                    BBL-Womens
                                </option>
                            </optgroup>
                            <optgroup label="Other Leagues">
                                <option value="CPL">
                                    Carribean Premiere League
                                </option>
                                <option value="BPL">
                                    Bangladesh Premiere League
                                </option>
                            </optgroup>
                        </select> <br> <br>
                        <a>
                            <b>Date:</b>
                        </a> <br>
                        <input type="datetime-local" class="box" name= "date" required placeholder="Enter the date"/> <br> <br>
                        <a>
                            <b>Name:</b>
                        </a> <br>
                        <input type="text" class="box" name= "name" required placeholder="Your Full Name"/> <br> <br>
                        <a>
                            <b>Email Id:</b>
                        </a> <br>
                        <input type="email" class="box" name= "email" required placeholder="Your email"/> <br> <br>
                        <a>
                            <b>Contact:</b>
                        </a> <br>
                        <input type="number"  class="box" name= "phone" required placeholder="Your mobile no."/> <br> <br>
                        <button type="submit" class="btn" name="done"> 
                            <a>    
                                <b>
                                    Submit  
                                </b> 
                            </a>
                        </button>
                    </div>
                </div>
            </form>
    </body>
</html>
