<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!Doctype HTML>
<html>
    <head>
        <title>

        </title>
    </head>
    <body>
        <form>
            <div>
                <h1>
                    CPL
                </h1>
                <div>
                    <table width="80%" height="5%" border="1" cellspacing="3" cellpadding="2" style="text-align: center;">
                        <tr style="background-color: black; color:white; border: 2px black solid; padding: 5px;">
                            <th>Id No. </th>    <th>Event  </th>
                            <th>Email  </th>    <th>Ques1  </th>
                            <th>Ques2  </th>    <th>Ques3  </th>
                            <th>Ques4  </th>    <th>Ques5  </th>
                            <th>Ques6  </th>    <th>Ques7  </th>
                            <th>Ques8  </th>    <th>Ques9  </th>
                            <th>Ques10 </th>
                        </tr>
<?php
        include 'connection.php';

        $sql = "select * from cpl order by email ";

        $query = mysqli_query($conn ,  $sql);

        while($res = mysqli_fetch_array($query)){
?>
                        <tr>
                            <td> <?php echo $res['id'];    ?> </td>
                            <td> <?php echo $res['event']; ?> </td>
                            <td> <?php echo $res['email']; ?> </td>
                            <td> <?php echo $res['ques1']; ?> </td>
                            <td> <?php echo $res['ques2']; ?> </td>
                            <td> <?php echo $res['ques3']; ?> </td>
                            <td> <?php echo $res['ques4']; ?> </td>
                            <td> <?php echo $res['ques5']; ?> </td>
                            <td> <?php echo $res['ques6']; ?> </td>
                            <td> <?php echo $res['ques7']; ?> </td>
                            <td> <?php echo $res['ques8']; ?> </td>
                            <td> <?php echo $res['ques9']; ?> </td>
                            <td> <?php echo $res['ques10'];?> </td>

                        </tr>
                        <?php
                        }
                        ?>
                    </table>
            </div><br><br>
            <label><b>Descending</b></label> <br><br>
            <div>
                    <table width="80%" height="5%" border="1" cellspacing="3" cellpadding="2" style="text-align: center;">
                        <tr style="background-color: black; color:white; border: 2px black solid; padding: 5px;">
                            <th>Id No. </th>    <th>Event  </th>
                            <th>Email  </th>    <th>Ques1  </th>
                            <th>Ques2  </th>    <th>Ques3  </th>
                            <th>Ques4  </th>    <th>Ques5  </th>
                            <th>Ques6  </th>    <th>Ques7  </th>
                            <th>Ques8  </th>    <th>Ques9  </th>
                            <th>Ques10 </th>
                        </tr>
<?php
        include 'connection.php';

        $sql = "select * from cpl order by email DESC";

        $query = mysqli_query($conn ,  $sql);

        while($res = mysqli_fetch_array($query)){
?>
                        <tr>
                            <td> <?php echo $res['id'];    ?> </td>
                            <td> <?php echo $res['event']; ?> </td>
                            <td> <?php echo $res['email']; ?> </td>
                            <td> <?php echo $res['ques1']; ?> </td>
                            <td> <?php echo $res['ques2']; ?> </td>
                            <td> <?php echo $res['ques3']; ?> </td>
                            <td> <?php echo $res['ques4']; ?> </td>
                            <td> <?php echo $res['ques5']; ?> </td>
                            <td> <?php echo $res['ques6']; ?> </td>
                            <td> <?php echo $res['ques7']; ?> </td>
                            <td> <?php echo $res['ques8']; ?> </td>
                            <td> <?php echo $res['ques9']; ?> </td>
                            <td> <?php echo $res['ques10'];?> </td>

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