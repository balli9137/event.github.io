<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!Doctype HTML>
<html>
    <head>
        <title>
            All Event Details
        </title>
        <link rel="stylesheet" type="text/css" href="delete_update.css">
    </head>
    <body>
        <form>
            <center>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                <div class="heading"> <br> <br> <br>
                <h1>
                    Event/Participant Details
                </h1>
                </div><br><br><br>
                <div>
                    <table class="del" cellspacing="5" cellpadding="1">
                        <tr class="del1">
                            <th class="rid">Id No. </th>
                            <th class="rid">Event  </th>
                            <th class="rid">Name   </th>
                            <th class="rid">Email  </th>
                            <th class="rid">Contact</th>
                            <th class="rid">Date   </th>
                        </tr>
<?php
        include 'connection.php';

        $sql = "select * from register";

        $query = mysqli_query($conn ,  $sql);

        while($res = mysqli_fetch_array($query)){
?>
                        <tr>
                            <td class="c1"> <?php echo $res['id'];      ?> </td>
                            <td class="c2"> <?php echo $res['event'];   ?> </td>
                            <td class="c3"> <?php echo $res['name'];    ?> </td>
                            <td class="c4"> <?php echo $res['email'];   ?> </td>
                            <td class="c5"> <?php echo $res['contact']; ?> </td>
                            <td class="c6"> <?php echo $res['date'];    ?> </td>
                        </tr>
                        <?php
                        }
                        ?>
                    </table>
                </div>
            </div>
        </form>
    </body>
</html>