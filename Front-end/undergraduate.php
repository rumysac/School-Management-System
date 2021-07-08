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
    <link rel="stylesheet" href="cssFiles/undergraduate.css">
    <title>Document</title>
</head>
<body>


<?php 
        $sql1='SELECT * FROM classroom
        JOIN employee ON employee.d_name=classroom.d_name
        WHERE classroom.d_name="Electrical and Electronic Engineering" AND employee.e_id=3';


        $result1 = $conn->query($sql1);

        $row1= $result1->fetch_assoc();


        $sql2='SELECT * FROM classroom
        JOIN employee ON employee.d_name=classroom.d_name
        WHERE classroom.d_name="Computer Engineering"';


        $result2 = $conn->query($sql2);

        $row2= $result2->fetch_assoc();

        
        $sql3='SELECT * FROM classroom
        JOIN employee ON employee.d_name=classroom.d_name
        WHERE classroom.d_name="Industrial Engineering"';

        $result3 = $conn->query($sql3);

        $row3= $result3->fetch_assoc();


        $sql4='SELECT * FROM classroom
        JOIN employee ON employee.d_name=classroom.d_name
        WHERE classroom.d_name="Civil Engineering"';

        $result4 = $conn->query($sql4);

        $row4= $result4->fetch_assoc();



        $sql5='SELECT * FROM classroom
        JOIN employee ON employee.d_name=classroom.d_name
        WHERE classroom.d_name="Biomedical Engineering"';

        $result5 = $conn->query($sql5);

        $row5= $result5->fetch_assoc();








?>


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

          <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <h1>Undergraduate Programs</h1>
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong><?php echo ''.$row1['d_name'];?></strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://i.pinimg.com/600x315/d6/51/a7/d651a720971620c326b6bc38a1fca4ca.jpg" alt="">
                        <h3 class="mt-3" href="#">Head of <?php echo ''.$row1['d_name'];?> Department is Prof. Dr. <?php echo ''.$row1['first_name'].' '.$row1['middle_name']. ' '.$row1['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            Electrical - Electronics Engineering provides the technologies that make up the information society. Electrical - Electronics Engineering directly affects the quality and comfort of everyday life by providing the required high technology. Electrical - Electronics Engineering is the driving force of many innovations and discoveries in other fields of science and technology as well. Electrical - Electronics Engineering is the foundation of the fields such as electronic circuits, control systems, biomedical systems, energy systems (production, transmission, distribution), communication, automation, computation, storage and transfer of information, etc. Mobile communication, electronic commerce, computers, and the Internet that are widely used today are also the main subjects of Electrical - Electronics engineering. The role of Electrical - Electronics Engineering in future technological developments is indisputable.
                        </p>
                        <button onclick="window.location='eeecourses.php'"class="button" style="vertical-align:middle">

                            <span> Courses </span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
                    <div class="row my-3">
                        <div class="col-md-4 mb-3">
                            <div class="kart">
                                <p class="yazar mb-2">
                                    <strong><?php echo ''.$row2['d_name'];?></strong> <span class="badge badge-pill badge-primary"></span>
                                </p>
                                <img class="img-thumbnail" src="https://vistapointe.net/images/hacker-wallpaper-5.jpg" alt="">
                                <h3 class="mt-3" href="#">Head of <?php echo ''.$row2['d_name'];?> is Associate Prof. <?php echo ''.$row2['first_name'].' '.$row2['middle_name']. ' '.$row2['last_name'];?></h3>
                                <hr>
                                <p class="blog text-justify">
                                    Computer Engineering is defined as the discipline that embodies the science and technology of design, construction, implementation, and maintenance of software and hardware components of modern computing systems and computer-controlled equipment. Computer engineering has traditionally been viewed as a combination of both computer science (CS) and electrical engineering (EE). It has evolved over the past three decades as a separate, although intimately related, discipline. Computer engineering is solidly grounded in the theories and principles of computing, mathematics, science, and engineering and it applies these theories and principles to solve technical problems through the design of computing hardware, software, networks, and processes.
                                </p>
                                <button onclick="window.location='coecourses.php'"class="button" style="vertical-align:middle">

                                    <span> Courses </span></button>
                                <hr>
                            </div>
                        </div>
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-md-4 mb-3">
                                    <div class="kart">
                                        <p class="yazar mb-2">
                                            <strong><?php echo ''.$row3['d_name'];?></strong> <span class="badge badge-pill badge-primary"></span>
                                        </p>
                                        <img class="img-thumbnail" src="https://5.imimg.com/data5/JI/KW/JO/GLADMIN-21828928/972-500x500" alt="">
                                        <h3 class="mt-3" href="#">Head of <?php echo ''.$row3['d_name'];?> Department is Prof. Dr. <?php echo ''.$row3['d_name'];?> is Associate Prof. <?php echo ''.$row3['first_name'].' '.$row3['middle_name']. ' '.$row3['last_name'];?></h3>
                                        <hr>
                                        <p class="blog text-justify">
                                            The focus of Industrial Engineering is how to improve processes or design things that are more efficient and waste less money, time, raw resources, man-power and energy while following safety standards and regulations. Industrial engineers may use knowledge of Maths, Physics but also Social Sciences to analyse, design, predict and evaluate the results and roadblocks of processes and devices. 
                                        </p>
                                        <button onclick="window.location='iecourses.php'"class="button" style="vertical-align:middle">

                                            <span> Courses </span></button>
                                        <hr>
                                    </div>
                                </div>
                         <div class="container">
                            <div class="row my-3">
                                <div class="col-md-4 mb-3">
                                    <div class="kart">
                                        <p class="yazar mb-2">
                                            <strong><?php echo ''.$row4['d_name'];?></strong> <span class="badge badge-pill badge-primary"></span>
                                        </p>
                                        <img class="img-thumbnail" src="https://clipartstation.com/wp-content/uploads/2018/09/builders-clipart-5.jpg" alt="">
                                        <h3 class="mt-3" href="#">Head of <?php echo ''.$row4['d_name'];?> Department is Prof. Dr. <?php echo ''.$row4['first_name'].' '.$row4['middle_name']. ' '.$row4['last_name'];?></h3>
                                        <hr>
                                        <p class="blog text-justify">
                                           Civil engineering is the professional practice of designing and developing infrastructure projects. This can be on a huge scale, such as the development of nationwide transport systems or water supply networks, or on a smaller scale, such as the development of individual roads or buildings.
                                        </p>
                                        <button onclick="window.location='cecourses.php'"class="button" style="vertical-align:middle">

                                            <span> Courses </span></button>
                                        <hr>
                                    </div>
                                </div>
                        <div class="container">
                            <div class="row my-3">
                                <div class="col-md-4 mb-3">
                                    <div class="kart">
                                        <p class="yazar mb-2">
                                            <strong><?php echo ''.$row5['d_name'];?></strong> <span class="badge badge-pill badge-primary"></span>
                                        </p>
                                        <img class="img-thumbnail" src="https://i.pinimg.com/originals/e7/a1/04/e7a10403a1adb2f91c9734a953cc5f17.jpg" alt="">
                                        <h3 class="mt-3" href="#">Head of <?php echo ''.$row5['d_name'];?> Department is Doc. Dr. <?php echo ''.$row5['first_name'].' '.$row5['middle_name']. ' '.$row5['last_name'];?></h3>
                                        <hr>
                                        <p class="blog text-justify">
                                            Biomedical engineering is the application of the principles and problem-solving techniques of engineering to biology and medicine. This is evident throughout healthcare, from diagnosis and analysis to treatment and recovery, and has entered the public conscience though the proliferation of implantable medical devices, such as pacemakers and artificial hips, to more futuristic technologies such as stem cell engineering and the 3-D printing of biological organs.
                                        </p>
                                        <button onclick="window.location='bmecourses.php'"class="button" style="vertical-align:middle">

                                            <span> Courses </span></button>
                                        <hr>
                                    </div>
                                </div>


              
              
      </div>
</body>
</html>