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
    <link rel="stylesheet" href="cssFiles/eeecourses.css">
    <title>Document</title>
</head>

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
        <body>
        <h1 style="color: rgb(26, 40, 77)">This Semester</h1>

        <table id="personel">
            <?php 
        $sql1='SELECT * FROM course
               WHERE course.major_id=63 ';

        $result1 = $conn->query($sql1);

        $row1= $result1->fetch_assoc();

        $sql2='SELECT * FROM course
        JOIN have_lab ON course.c_code=have_lab.c_code
        WHERE course.major_id=63 ';

        $result2 = $conn->query($sql2);

        $row2= $result2->fetch_assoc();
?>

            <tr>
                <th>Course Code</th>
                <th>Course Name</th>
                <th>Lab</th>
            </tr>

            <?php
            
            if ($result1!== false && $result1->num_rows > 0) {
              // output data of each row
              
              while($row1 = $result1->fetch_assoc()) {
                echo '
                       
                        <tr>
                        <td>' .$row1["c_code"].'</td>
                        <td>' .$row1["c_name"].'</td> ';
                    if(is_null(($row1["c_code"])==($row2["c_code"]))){  
                        echo '
                        <td> 2 </td> '; 
                       
                        

                       

                }
              }
            }  
          ?> <td> </td>
          

            </tr>






            </table>
</body>

</html>