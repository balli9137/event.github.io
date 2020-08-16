<?php
include 'connection.php';

if(isset($_POST['done'])){

$id             = $_GET['id'];
$eventselection = $_POST['eventselection'];
$date           = $_POST['date'];

$sql = " UPDATE register SET id= '$id', event= '$eventselection', date= '$date' WHERE id= '$id' ";

$query = mysqli_query($conn, $sql);

header('location: e_delete_update.php');

}
?>

<!Doctype HTML>
<html>
<head>
    <title>
        Update Event
    </title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="delete_update.css">
</head>
<body>
<form method="POST"><center>
    <div>
        <img src="logo.jpg" alt="cricket img" class="logo" />
        <div class="heading"> <br> <br> <br>
        <h1 style="color: #03084E;">
            Update Event and Date
        </h1>
        </div>
    </div></center><br><br><br>
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
                        <input type="datetime-local" class="box" name= "date" required placeholder="Enter the date"/><br><br><br>

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
