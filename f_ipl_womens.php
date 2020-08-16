<?php error_reporting (E_ALL ^ E_NOTICE); ?>

<!Doctype HTML>
<html>
    <head>
        <title>
            Feedbacks
        </title>
        <link rel="stylesheet" type="text/css" href="feedback.css">
    </head>
    <body>
        <form method="post">
            <center>
            <div>
                <img src="logo.jpg" alt="cricket img" class="logo" />
                <div class="heading"> <br> <br> <br>
                <h1>
                    Feedback IPL-Womens
                </h1>
                </div>
            </div><br><br><br>
            <div>
                    <table class="fed" cellspacing="5" cellpadding="1">
                        <tr class="fed1">
                            <th class="rid">Id No. </th>    <th class="rid">Event  </th>
                            <th class="rid">Email  </th>    <th class="rid">Ques1  </th>
                            <th class="rid">Ques2  </th>    <th class="rid">Ques3  </th>
                            <th class="rid">Ques4  </th>    <th class="rid">Ques5  </th>
                            <th class="rid">Ques6  </th>    <th class="rid">Ques7  </th>
                            <th class="rid">Ques8  </th>    <th class="rid">Ques9  </th>
                            <th class="rid">Ques10 </th>
                        </tr>
<?php
        include 'connection.php';

        $sql = "select * from ipl_womens ";

        $query = mysqli_query($conn ,  $sql);

        while($res = mysqli_fetch_array($query)){
?>
                        <tr>
                            <td class="c1"> <?php echo $res['id'];    ?> </td>
                            <td class="c2"> <?php echo $res['event']; ?> </td>
                            <td class="c3"> <?php echo $res['email']; ?> </td>
                            <td class="c4"> <?php echo $res['ques1']; ?> </td>
                            <td class="c5"> <?php echo $res['ques2']; ?> </td>
                            <td class="c6"> <?php echo $res['ques3']; ?> </td>
                            <td class="c7"> <?php echo $res['ques4']; ?> </td>
                            <td class="c8"> <?php echo $res['ques5']; ?> </td>
                            <td class="c9"> <?php echo $res['ques6']; ?> </td>
                            <td class="c10"> <?php echo $res['ques7']; ?> </td>
                            <td class="c11"> <?php echo $res['ques8']; ?> </td>
                            <td class="c12"> <?php echo $res['ques9']; ?> </td>
                            <td class="c13"> <?php echo $res['ques10'];?> </td>
                        </tr>
                        <?php
                        }
                        ?>

<?php
        include 'connection.php';

        $sql = "select round(avg(ques1), 4) as ques1, round(avg(ques2), 4) as ques2, round(avg(ques3), 4) as ques3,
        round(avg(ques4), 4) as ques4, round(avg(ques5), 4) as ques5, round(avg(ques6), 4) as ques6,
        round(avg(ques7), 4) as ques7, round(avg(ques8), 4) as ques8, round(avg(ques9), 4) as ques9,
        round(avg(ques10), 4) as ques10 from ipl_womens ";

        $query = mysqli_query($conn ,  $sql);

        $data = mysqli_fetch_array($query);
?>
                        <tr>
                            <td class="c141"colspan = "3"><b>Average</b></td>
                            <td class="c14"><b> <?php echo $data['ques1']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques2']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques3']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques4']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques5']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques6']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques7']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques8']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques9']; ?> </b></td>
                            <td class="c14"><b> <?php echo $data['ques10']; ?> </b></td>
                        </tr>
<?php
        include 'connection.php';

        $sql = "select round(avg(ques1), 4) as ques1, round(avg(ques2), 4) as ques2, round(avg(ques3), 4) as ques3,
        round(avg(ques4), 4) as ques4, round(avg(ques5), 4) as ques5, round(avg(ques6), 4) as ques6,
        round(avg(ques7), 4) as ques7, round(avg(ques8), 4) as ques8, round(avg(ques9), 4) as ques9,
        round(avg(ques10), 4) as ques10 from ipl_womens ";

        $query = mysqli_query($conn ,  $sql);

        $data = mysqli_fetch_array($query);
?>
                        <tr>
                            <td class="c151" colspan = "3"><b>Overall Event Average</b></td>
                            <td class="c15" colspan = "10"><b> <?php echo ( $data['ques1'] + $data['ques2'] + $data['ques3'] + $data['ques4'] +
                                                 $data['ques5'] + $data['ques6'] + $data['ques7'] + $data['ques8'] +
                                                 $data['ques9'] + $data['ques10'] ) / 10 ; ?> </b></td>

                        </tr>

<?php
        include 'connection.php';

        $sql = " select COUNT(*) as count from ipl_womens ";

        $query = mysqli_query($conn ,  $sql);

        $q = mysqli_fetch_array($query);
?>
                <tr>
                    <td class="c161" colspan = "3"><b> Count </b></td>
                    <td class="c16" colspan = "10"><b> <?php echo $q['count']; ?> </b></td>
                </tr>

                    </table>
                </div><br><br>

            <div>
                <button class="c1" style="width: 100px;" type="submit"> <a style="color: black;" href="iw_sorting.php">
                    Sorted  </a>
                </button>
            </div>
        </form>
    </body>
</html>