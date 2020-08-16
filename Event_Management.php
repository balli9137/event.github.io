<?php
    include 'connection.php';
?>

<!Doctype HTML>
<html>
    <head>
        <title>
            Event Management Project
        </title>
        <link rel="stylesheet" type="text/css" href="EventManagement.css">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    </head>
    <body>
        <center>
        <form>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                <div class="heading"><br><br><br>
                    <h1 style="color: #03084E;">
                         Event Management
                    </h1>
                </div> <br> <br> <br> <br>
                <div>
                    <button type="submit" class="btn" formaction="Events_all.php">
                        <a>
                            <h3>Events</h3>
                        </a>
                    </button> <br> <br> <br>
                    <button type="submit" class="btn" formaction="Participants_all.php">
                        <a>
                            <h3>Participants</h3>
                        </a>
                    </button> <br> <br> <br>
                    <button type="submit" class="btn" formaction="feedback.php">
                        <a>
                            <h3>Event Feedbacks</h3>
                        </a>
                    </button><br><br>
                </div>
            </div>
        </form>
    </body>
</html>