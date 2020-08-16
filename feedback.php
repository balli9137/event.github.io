<?php
include 'connection.php';

?>
<!Doctype HTML>
<html>
    <head>
        <title>
            Event Feedback
        </title>
        <link rel="stylesheet" type="text/css" href="Registration.css">
    </head>
    <body>
        <form><center>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                        <div class="heading"> <br> <br> <br>
                            <h1 style="color: #03084E;">
                                Event Selection
                            </h1>
                </div>
                </div></center><br><br><br><br>
                <div class="register">
                    <a><b>Choose event to give Feedback:</b></a><br>

                <select name="eventselection" required class="box" onChange="window.location.href=this.value">
                    <option>-----Select-----</option>
                    <optgroup label="Indian Premiere League">
                        <option value="ipl_mens.php">IPL-Mens</option>
                        <option value="ipl_womens.php">IPL-Womens</option>
                    </optgroup>
                    <optgroup label="Big Bash League">
                        <option value="bbl_mens.php">BBL-Mens</option>
                        <option value="bbl_womens.php">BBL-Womens</option>
                    </optgroup>
                    <optgroup label="Other Leagues">
                        <option value="cpl.php">Carribean Premiere League</option>
                        <option value="bpl.php">Bangladesh Premiere League</option>
                    </optgroup>
        </select><br><br><br>
                <a><b>Review List of Feedback:</b></a><br>

                <select name="eventselection" required class="box" onChange="window.location.href=this.value">
                    <option>-----Select-----</option>
                    <optgroup label="Indian Premiere League">
                        <option value="f_ipl_mens.php">IPL-Mens</option>
                        <option value="f_ipl_womens.php">IPL-Womens</option>
                    </optgroup>
                    <optgroup label="Big Bash League">
                        <option value="f_bbl_mens.php">BBL-Mens</option>
                        <option value="f_bbl_womens.php">BBL-Womens</option>
                    </optgroup>
                    <optgroup label="Other Leagues">
                        <option value="f_cpl.php">Carribean Premiere League</option>
                        <option value="f_bpl.php">Bangladesh Premiere League</option>
                    </optgroup>
        </select><br><br>

            </div>
        </form>
    </body>
</html>