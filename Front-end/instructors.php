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
    <link rel="stylesheet" href="cssFiles/instructors.css">
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
      <body>

         <?php 
        $sql1='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE employee.e_id=4 ';

        $result1 = $conn->query($sql1);

        $row1= $result1->fetch_assoc();


        $sql2='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE employee.e_id=11 ';

        $result2 = $conn->query($sql2);

        $row2= $result2->fetch_assoc();


        $sql3='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE employee.e_id=5 ';

        $result3 = $conn->query($sql3);

        $row3= $result3->fetch_assoc();


        $sql4='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE employee.e_id=6 ';

        $result4 = $conn->query($sql4);

        $row4= $result4->fetch_assoc();


        $sql5='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE employee.e_id=7 ';

        $result5 = $conn->query($sql5);

        $row5= $result5->fetch_assoc();


        $sql6='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE employee.e_id=8 ';

        $result6 = $conn->query($sql6);

        $row6= $result6->fetch_assoc();

    



        





?>



       




    
        <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>Lecturer</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2019/02/redaalhaj_thumb-e1549357985829.png" alt="">
                        <h3 class="mt-3">Prof. Dr. <?php echo ''.$row1['first_name'].' '.$row1['middle_name']. ' '.$row1['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Research Area: <?php echo ''.$row1['research_area'];?>
                        </p>
                        <p class="blog text-justify">
                            Email: <?php echo ' '.$row1['mail'];?>
                        </p>
                        <button onclick="window.location='https://sens.medipol.edu.tr/reda-al-hajj/';" class="button" style="vertical-align:middle">

                           <span> Medipol </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>Lecturer</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://media-exp3.licdn.com/dms/image/C4D03AQFXIdlDaxlrHg/profile-displayphoto-shrink_200_200/0/1549518165491?e=1629331200&v=beta&t=EoqAHV4khD9_DGLcQWThn70g2Hpzad9zaz6a8Vy22G4" alt="">
                        <h3 class="mt-3">Associate Prof. <?php echo ''.$row2['first_name'].' '.$row2['middle_name']. ' '.$row2['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Research Area: <?php echo ''.$row2['research_area'];?>
                        </p>
                         <p class="blog text-justify">
                            E-mail: <?php echo ' '.$row2['mail'];?>
                        </p>
                        <button onclick="window.location='https://www.linkedin.com/in/hakan-dogan-a33b8a1/';" class="button" style="vertical-align:middle">

                           <span> Linkedin </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>Lecturer</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2018/10/sakyokus-e1540325932679.jpg" alt="">
                        <h3 class="mt-3">Prof. Dr. <?php echo ''.$row3['first_name'].' '.$row3['middle_name']. ' '.$row3['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Research Area: <?php echo ''.$row3['research_area'];?>
                        </p>
                        </p>
                         <p class="blog text-justify">
                            Email: <?php echo ' '.$row3['mail'];?>
                        </p>
                        <button onclick="window.location='https://www.linkedin.com/in/selimakyokus/';" class="button" style="vertical-align:middle">

                           <span> Linkedin </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>Lecturer</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2017/06/HTOZANSENS-e1498725805324.jpg" alt="">
                        <h3 class="mt-3">Prof. Dr. <?php echo ''.$row4['first_name'].' '.$row4['middle_name']. ' '.$row4['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Research Area: <?php echo ''.$row4['research_area'];?>
                        </p>
                         </p>
                         <p class="blog text-justify">
                            E-mail: <?php echo ' '.$row4['mail'];?>
                        </p>
                        <button onclick="window.location='https://www.linkedin.com/in/hakantozan/';" class="button" style="vertical-align:middle">

                           <span> Linkedin </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>Lecturer</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2017/06/zekai-sen-216x300.jpg" alt="">
                        <h3 class="mt-3">Prof. Dr. <?php echo ''.$row5['first_name'].' '.$row5['middle_name']. ' '.$row5['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Research Area: <?php echo ''.$row5['research_area'];?>
                        </p>
                        </p>
                         <p class="blog text-justify">
                            E-mail: <?php echo ' '.$row5['mail'];?>
                        </p>
                        <button onclick="window.location='https://sens.medipol.edu.tr/zekai-sen/';" class="button" style="vertical-align:middle">

                           <span> Medipol </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>Lecturer</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2014/03/IMG_0054-e1498726122195.jpg" alt="">
                        <h3 class="mt-3">Assistant Prof. <?php echo ''.$row6['first_name'].' '.$row6['middle_name']. ' '.$row6['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Research Area: <?php echo ''.$row6['research_area'];?>
                        </p>
                        </p>
                         <p class="blog text-justify">
                            E-mail: <?php echo ' '.$row6['mail'];?>
                        </p>
                        <button onclick="window.location='https://www.linkedin.com/in/fatih-toy-ba544117/';" class="button" style="vertical-align:middle">

                           <span> Linkedin </span></button>
                        <hr>
                    </div>
                </div>
              
              
      </div>
</body>
</html>