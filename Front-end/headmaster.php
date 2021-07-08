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
    <link rel="stylesheet" href="cssFiles/headmaster.css">
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
        <?php 
        $sql1='SELECT * FROM employee
        JOIN headmaster ON employee.e_id= headmaster.head_id
        WHERE employee.e_id=1 ';

        $result1 = $conn->query($sql1);

        $row1= $result1->fetch_assoc();


        $sql2='SELECT * FROM employee
        JOIN headmaster ON employee.e_id= headmaster.head_id
        WHERE employee.e_id=2  ';

        $result2 = $conn->query($sql2);

        $row2= $result2->fetch_assoc();

        
        $sql3='SELECT * FROM employee
        JOIN headmaster ON employee.e_id= headmaster.head_id
        WHERE employee.e_id=3  ';

        $result3 = $conn->query($sql3);

        $row3= $result3->fetch_assoc();





?>



        <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>DEAN</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSsm7u7CgiAO1-uw8VWqCLuC5m0Xs3lZOwMTvFR9RANYRaR40KSPF7hibmOBrV8NOqy5t4&usqp=CAU"
                            alt="">
                        <h3 class="mt-3">Prof. Dr. <?php if(!is_null($row1['head_id'])){echo ''.$row1['first_name'].' '.$row1['middle_name']. ' '.$row1['last_name'];}?>
                        </h3>
                        <hr>
                        <p class="blog text-justify">

                            He is the founding dean of the Faculty of Engineering and Natural Sciences at Istanbul
                            Medipol University. His research interests are in the fields of wireless communication
                            systems and signal processing, Smart Radios, software-based radios; Smart Electric Grids and
                            Smart Homes; Unmanned Aerial Vehicles (Control and Communication); In Vivo Communication;
                            Biomedical Signal Processing; Channel Modeling; Testing and Measurement of Communication
                            Systems are some of the study subjects.
                        </p>
                        </p>
                        <p class="blog text-justify">
                            E-mail:<?php if(!is_null($row1['head_id'])){echo ' '.$row1['mail'];}?>
                        </p>
                        <button onclick="window.location='https://www.linkedin.com/in/arslan-huseyin-28a4a246/';"
                            class="button" style="vertical-align:middle">
                            <span> Linkedin </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
                    <div class="row my-3">
                        <div class="col-md-4 mb-3">
                            <div class="kart">
                                <p class="yazar mb-2">
                                    <strong>Vice-Dean</strong> <span class="badge badge-pill badge-primary"></span>
                                </p>
                                <img class="img-thumbnail"
                                    src="https://sens.medipol.edu.tr/wp-content/uploads/2017/06/kemal-özdemir-2-e1498725830920.jpg"
                                    alt="">
                                <h3 class="mt-3" href="#">Assoc. Dr.
                                    <?php if(!is_null($row2['head_id'])){echo ''.$row2['first_name'].' '.$row2['middle_name']. ' '.$row2['last_name'];}?>
                                </h3>
                                <hr>
                                <p class="blog text-justify">
                                    He is the vice dean of the Faculty of Engineering and Natural Sciences at Istanbul
                                    Medipol University and also the head of the Computer Engineering Department. As a
                                    result of its experience and knowledge in the industry with the Academy, it has
                                    pioneered the development of many products. Some of these products currently in use
                                    are a) CHPMAX 5000 marketed by Arris, b) F-16 VCO system manufactured by Herley Vega
                                    Systems, and c) national data link design. Assoc. Özdemir's current work areas are
                                    the development of 5G systems and biomedical devices.
                                </p>
                                </p>
                                <p class="blog text-justify">
                                    E-mail:<?php if(!is_null($row2['head_id'])){echo ' '.$row2['mail'];}?>
                                </p>
                                <button
                                    onclick="window.location='https://www.linkedin.com/in/kemal-ozdemir-phd-peng-b670477/';"
                                    class="button" style="vertical-align:middle">
                                    <span> Linkedin </span></button>
                                <hr>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-md-4 mb-3">
                                    <div class="kart">
                                        <p class="yazar mb-2">
                                            <strong>Vice-Dean</strong> <span
                                                class="badge badge-pill badge-primary"></span>
                                        </p>
                                        <img class="img-thumbnail"
                                            src="https://sens.medipol.edu.tr/wp-content/uploads/2015/01/bahadir-e1498727258420.png"
                                            alt="">
                                        <h3 class="mt-3" href="#">Prof. Dr.
                                            <?php if(!is_null($row2['head_id'])){echo ''.$row3['first_name'].' '.$row3['middle_name']. ' '.$row3['last_name'];}?>
                                        </h3>
                                        <hr>
                                        <p class="blog text-justify">
                                            He is the vice dean of the Faculty of Engineering and Natural Sciences at
                                            Istanbul Medipol University and also the head of the Electrical and
                                            Electronics Engineering Department. His Research areas are Computer vision,
                                            image/video processing, computational photography, signal processing.
                                        </p>
                                        </p>
                                        <p class="blog text-justify">
                                            E-mail:<?php if(!is_null($row3['head_id'])){echo ' '.$row3['mail'];}?>
                                        </p>
                                        <button
                                            onclick="window.location='https://www.linkedin.com/in/bahadir-gunturk-6771941/';"
                                            class="button" style="vertical-align:middle">

                                            <span> Linkedin </span></button>
                                        <hr>
                                    </div>
                                </div>


                            </div>
    </body>

</html>