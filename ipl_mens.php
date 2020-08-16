<?php error_reporting (E_ALL ^ E_NOTICE);?>
<?php
//echo '<script> alert("Welcome") </script> ';
?>
<?php
include 'connection.php';

if(isset($_POST['submit'])){

$event = $_POST['event'];
$email = $_POST['email'];
$ques1 = $_POST['ques1'];
$ques2 = $_POST['ques2'];
$ques3 = $_POST['ques3'];
$ques4 = $_POST['ques4'];
$ques5 = $_POST['ques5'];
$ques6 = $_POST['ques6'];
$ques7 = $_POST['ques7'];
$ques8 = $_POST['ques8'];
$ques9 = $_POST['ques9'];
$ques10 = $_POST['ques10'];


$sql = " insert into ipl_mens(event, email, ques1, ques2, ques3, ques4, ques5, ques6, ques7, ques8, ques9, ques10)
                       values('$event', '$email', '$ques1', '$ques2', '$ques3', '$ques4', '$ques5', '$ques6', '$ques7', '$ques8', '$ques9', '$ques10')" ;

mysqli_query($conn, $sql);

header('location: feedback.php');

}

?>

<!Doctype HTML>
<html>
    <head>
        <title>
            Feedback
        </title>
        <link rel="stylesheet" type="text/css" href="Registration.css">
    </head>
    <body>
        <form method="post"><center>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                        <div class="heading"> <br> <br> <br>
                            <h1 style="color: #03084E;">
                                IPL-Mens Feedback
                            </h1>
                        </div>
            </div></center> <br><br><br><br>
            <div class="register">
                <a>
                    <b>Choosen event to give Feedback:</b></a><br>

                <select name="event" required class="box">
                    <optgroup label="Indian Premier League">
                        <option value="IPL-Mens">IPL-Mens</option>
                    </optgroup>
                </select><br><br>
                <a><b>Email:</b></a><br>
                <input type="email" class="box" name="email" required placeholder="Enter youe email"/>
            </div><br>
            <hr><hr><br>
            <div class="q1">
                <a><b>Q.1)How was the batting?</b></a><br>
                <input type="radio" name="ques1" value="1" checked />1 &ensp;   <input type="radio" name="ques1" value="2"/>2 &ensp;
                <input type="radio" name="ques1" value="3"/>3 &ensp;            <input type="radio" name="ques1" value="4"/>4 &ensp;
                <input type="radio" name="ques1" value="5"/>5 &ensp;            <input type="radio" name="ques1" value="6"/>6 &ensp;
                <input type="radio" name="ques1" value="7"/>7 &ensp;            <input type="radio" name="ques1" value="8"/>8 &ensp;
                <input type="radio" name="ques1" value="9"/>9 &ensp;            <input type="radio" name="ques1" value="10"/>10
            </div><br><br>
            <div class="q2">
                <a><b>Q.2)How was the bowling?</b></a><br>
                <input type="radio" name="ques2" value="1" checked />1 &ensp;   <input type="radio" name="ques2" value="2"/>2 &ensp;
                <input type="radio" name="ques2" value="3"/>3 &ensp;           <input type="radio" name="ques2" value="4"/>4 &ensp;
                <input type="radio" name="ques2" value="5"/>5 &ensp;            <input type="radio" name="ques2" value="6"/>6 &ensp;
                <input type="radio" name="ques2" value="7"/>7 &ensp;            <input type="radio" name="ques2" value="8"/>8 &ensp;
                <input type="radio" name="ques2" value="9"/>9 &ensp;           <input type="radio" name="ques2" value="10"/>10
            </div><br><br>
            <div class="q3">
                <a><b>Q.3)How was the fielding?</b></a><br>
                <input type="radio" name="ques3" value="1" checked />1 &ensp;   <input type="radio" name="ques3" value="2"/>2 &ensp;
                <input type="radio" name="ques3" value="3"/>3 &ensp;   <input type="radio" name="ques3" value="4"/>4 &ensp;
                <input type="radio" name="ques3" value="5"/>5 &ensp;   <input type="radio" name="ques3" value="6"/>6 &ensp;
                <input type="radio" name="ques3" value="7"/>7 &ensp;   <input type="radio" name="ques3" value="8"/>8 &ensp;
                <input type="radio" name="ques3" value="9"/>9 &ensp;   <input type="radio" name="ques3" value="10"/>10
            </div><br><br>
            <div class="q4">
                <a><b>Q.4)How was the crowd behaviour?</b></a><br>
                <input type="radio" name="ques4" value="1" checked />1 &ensp;   <input type="radio" name="ques4" value="2"/>2 &ensp;
                <input type="radio" name="ques4" value="3"/>3 &ensp;   <input type="radio" name="ques4" value="4"/>4 &ensp;
                <input type="radio" name="ques4" value="5"/>5 &ensp;   <input type="radio" name="ques4" value="6"/>6 &ensp;
                <input type="radio" name="ques4" value="7"/>7 &ensp;   <input type="radio" name="ques4" value="8"/>8 &ensp;
                <input type="radio" name="ques4" value="9"/>9 &ensp;   <input type="radio" name="ques4" value="10"/>10
            </div><br><br>
            <div class="q5">
                <a><b>Q.5)How much you like IPL-Mens?</b></a><br>
                <input type="radio" name="ques5" value="1" checked />1 &ensp;   <input type="radio" name="ques5" value="2"/>2 &ensp;
                <input type="radio" name="ques5" value="3"/>3 &ensp;   <input type="radio" name="ques5" value="4"/>4 &ensp;
                <input type="radio" name="ques5" value="5"/>5 &ensp;    <input type="radio" name="ques5" value="6"/>6 &ensp;
                <input type="radio" name="ques5" value="7"/>7 &ensp;   <input type="radio" name="ques5" value="8"/>8 &ensp;
                <input type="radio" name="ques5" value="9"/>9 &ensp;   <input type="radio" name="ques5" value="10"/>10
            </div><br><br>
            <div class="q6">
                <a><b>Q.6)Do you want to play?</b></a><br>
                <input type="radio" name="ques6" value="1" checked />1 &ensp;   <input type="radio" name="ques6" value="2"/>2 &ensp;
                <input type="radio" name="ques6" value="3"/>3 &ensp;   <input type="radio" name="ques6" value="4"/>4 &ensp;
                <input type="radio" name="ques6" value="5"/>5 &ensp;   <input type="radio" name="ques6" value="6"/>6 &ensp;
                <input type="radio" name="ques6" value="7"/>7 &ensp;   <input type="radio" name="ques6" value="8"/>8 &ensp;
                <input type="radio" name="ques6" value="9"/>9 &ensp;   <input type="radio" name="ques6" value="10"/>10
            </div><br><br>
            <div class="q7">
                <a><b>Q.7)Rate your Batting</b><br>
                <input type="radio" name="ques7" value="1" checked />1 &ensp;   <input type="radio" name="ques7" value="2"/>2 &ensp;
                <input type="radio" name="ques7" value="3"/>3 &ensp;   <input type="radio" name="ques7" value="4"/>4 &ensp;
                <input type="radio" name="ques7" value="5"/>5 &ensp;   <input type="radio" name="ques7" value="6"/>6 &ensp;
                <input type="radio" name="ques7" value="7"/>7 &ensp;   <input type="radio" name="ques7" value="8"/>8 &ensp;
                <input type="radio" name="ques7" value="9"/>9 &ensp;   <input type="radio" name="ques7" value="10"/>10
            </div><br><br>
            <div class="q8">
                <a><b>Q.8)Rate your fielding</b></a><br>
                <input type="radio" name="ques8" value="1" checked />1 &ensp;   <input type="radio" name="ques8" value="2"/>2 &ensp;
                <input type="radio" name="ques8" value="3"/>3 &ensp;   <input type="radio" name="ques8" value="4"/>4 &ensp;
                <input type="radio" name="ques8" value="5"/>5 &ensp;   <input type="radio" name="ques8" value="6"/>6 &ensp;
                <input type="radio" name="ques8" value="7"/>7 &ensp;   <input type="radio" name="ques8" value="8"/>8 &ensp;
                <input type="radio" name="ques8" value="9"/>9 &ensp;   <input type="radio" name="ques8" value="10"/>10 &ensp;
            </div><br><br>
            <div class="q9">
                <a><b>Q.9)Rate your bowling</b></a><br>
                <input type="radio" name="ques9" value="1" checked />1 &ensp;   <input type="radio" name="ques9" value="2"/>2 &ensp;
                <input type="radio" name="ques9" value="3"/>3 &ensp;   <input type="radio" name="ques9" value="4"/>4 &ensp;
                <input type="radio" name="ques9" value="5"/>5 &ensp;   <input type="radio" name="ques9" value="6"/>6 &ensp;
                <input type="radio" name="ques9" value="7"/>7 &ensp;   <input type="radio" name="ques9" value="8"/>8 &ensp;
                <input type="radio" name="ques9" value="9"/>9 &ensp;   <input type="radio" name="ques9" value="10"/>10
            </div><br><br>
            <div class="q10">
                <a><b>Q.10)Are you a all-rounder?</b></a><br>
                <input type="radio" name="ques10" value="1" checked />1 &ensp;   <input type="radio" name="ques10" value="2"/>2 &ensp;
                <input type="radio" name="ques10" value="3"/>3 &ensp;   <input type="radio" name="ques10" value="4"/>4 &ensp;
                <input type="radio" name="ques10" value="5"/>5 &ensp;   <input type="radio" name="ques10" value="6"/>6 &ensp;
                <input type="radio" name="ques10" value="7"/>7 &ensp;   <input type="radio" name="ques10" value="8"/>8 &ensp;
                <input type="radio" name="ques10" value="9"/>9 &ensp;   <input type="radio" name="ques10" value="10"/>10
            </div><br><br><br><br><br><br><br><br><br><br><br><br>
            <center><div>
            <button type="submit" name="submit" class="btn1"> Submit</button>
            </div><br><br><br><br><br><br>
        </form>
    </body>
</html>