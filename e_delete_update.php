<?php error_reporting (E_ALL ^ E_NOTICE); ?>
<?php
    include 'connection.php';

    $eventselection = $_POST['eventselection'];
    $email          = $_POST['email'];
    $date           = $_POST['date'];
    $contact        = $_POST['phone'];
    $name           = $_POST['name'] ;
    $sql = "select * from register";

    mysqli_query($conn ,  $sql);
?>

<!Doctype HTML>
<html>
    <head>
        <title>
            Event Update/Edit
        </title>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="delete_update.css">
    </head>
    <body>
        <form>
            <center>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                <div class="heading"> <br> <br> <br>
                <h1 style="color: #03084E;">
                    (Delete || Update) Events
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
                            <th class="rid">Delete </th>
                            <th class="rid">Update </th>
                        </tr>
<?php
                        include 'connection.php';

                        $sql = "select * from register";

                        $query = mysqli_query($conn ,  $sql);

                         while($res = mysqli_fetch_array($query))
                         {
?>
                        <tr>
                            <td class="c1"> <?php echo $res['id'];      ?> </td>
                            <td class="c2"> <?php echo $res['event'];   ?> </td>
                            <td class="c3"> <?php echo $res['name'];    ?> </td>
                            <td class="c4"> <?php echo $res['email'];   ?> </td>
                            <td class="c5"> <?php echo $res['contact']; ?> </td>
                            <td class="c6"> <?php echo $res['date'];    ?> </td>
                            <td class="c7">
                                <button type="submit" style="background-color: transparent; border: transparent;">
                                    <a style="text-decoration: none; color: black;" href="e_delete.php?id=<?php echo $res['id']; ?>">
                                        Remove
                                    </a>
                                </button> 
                            </td>
                            <td class="c8" formtarget="_blank">
                                <button type="submit" style="background-color: transparent; border: transparent;">
                                    <a style="text-decoration: none; color: black;" href="e_update.php?id=<?php echo $res['id']; ?>">
                                        Update
                                    </a>
                                </button> 
                            </td>
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