<!DOCTYPE html>

<?php

include 'db/config.php';
$username='';
$conn=open_connection();

?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFiles/coecourses.css">
    <title>Document</title>
</head>

<body>
    <img src="https://sens.medipol.edu.tr/wp-content/uploads/2017/05/Senslogo.png" alt="">
    <div id="menu">
        <ul>
            <li><a href="index.php"> About MRM </a>
            <li><a href="#"> People </a>
                <ul>
                    <li><a href="headmaster.php"> Headmaster </a></li>
                    <li><a href="instructors.php"> Lecturers </a></li>
                    <li><a href="secretary.php"> Secretary </a></li>
                </ul>
            <li><a href="#"> Degree Programs </a>
                <ul>
                    <li><a href="undergraduate.php"> Undergraduate Programs </a></li>
                    <li><a href="graduate.php"> Graduate Programs </a></li>


                </ul>

            <li><a href="studentlogin.php"> Student System </a>
            <li><a href="inslogin.php"> Lecturer System </a>
            <li><a href="Allarticle.php"> Articles </a>
            <li><a href="Thanks.php"> Thanks! </a>

        </ul>

        </ul>
        <?php
        $sql1='SELECT * FROM article
        JOIN lec_publish ON article.a_name=lec_publish.a_name ';

        

        $result1 = $conn->query($sql1);

        
        ?>
        <h1 style="color: rgb(26, 40, 77)">Articles of Lecturers</h1>


        <table id="personel">

            <tr>
                <th>Number of Article</th>
                <th>Article Name</th>
                <th>Article Website</th>
            </tr>

            <tr>
                <?php
            
            if ($result1!== false && $result1->num_rows > 0) {
            // output data of each row
            $i=1;
            while($row1 = $result1->fetch_assoc()) {
                echo '
                    
                        <tr>
                        <td>'.$i.'</td>
                        <td>' .$row1["a_name"].'</td>
                        <td>' .$row1["a_website"].'</td>
                    


                        ';

                $i=$i+1;}
            }
        ?>

            </tr>


        </table>
        <?php
        $sql2='SELECT * FROM article
        JOIN st_publish ON article.a_name=st_publish.a_name';

        

        $result2 = $conn->query($sql2);

        
        ?>

        <h1 style="color: rgb(26, 40, 77)">Articles of Students(PhD, MS, BD) </h1>


        <table id="personel">

            <tr>
                <th>Number of Article</th>
                <th>Article Name</th>
                <th>Article Website</th>
            </tr>

            <tr>
                <?php
            
            if ($result2!== false && $result2->num_rows > 0) {
              // output data of each row
              $i=1;
              while($row2 = $result2->fetch_assoc()) {
                echo '
                       
                        <tr>
                        <td>'.$i.'</td>
                        <td>' .$row2["a_name"].'</td>
                        <td>' .$row2["a_website"].'</td>
                       


                        ';

                $i=$i+1;}
              }
          ?>

            </tr>


        </table>
</body>

</html>