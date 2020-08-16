<?php
include 'connection.php'
?>
<!Doctype HTML>
<html>
    <head>
        <title>
            Participants
        </title>
        <link rel="stylesheet" type="text/css" href="EventManagement.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <center>
        <form>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                <div class="heading"> <br> <br> <br>
                    <h1 style="color: #03084E;">
                        Participants
                    </h1>
                </div> <br> <br> <br> <br>
                <div>
                    <button type="submit"  class="btn" formaction="Registration.php" formtarget="_blank">  
                        <a>
                            <h3>Add Participants</h3>      
                        </a>
                    </button> <br> <br> <br>
                    <button type="submit"  class="btn" formaction="p_delete_update.php"> 
                        <a>
                            <h3>Delete/Update</h3>      
                        </a>
                    </button> <br> <br> <br>
                    <button type="submit"  class="btn" formaction="e_details.php"> 
                        <a>
                            <h3>Participant Details</h3>      
                        </a>
                    </button> <br> <br>
                </div>
            </div>
        </form>
    </body>
</html>