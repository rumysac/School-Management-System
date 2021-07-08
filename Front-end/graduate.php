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
    <link rel="stylesheet" href="cssFiles/graduate.css">
    <title>Document</title>
</head>
<body>



<?php 
        $sql1='SELECT * FROM department
        WHERE department.d_name="Electrical-Electronics Engineering and Cyber Systems"';


        $result1 = $conn->query($sql1);

        $row1= $result1->fetch_assoc();


        $sql2='SELECT * FROM department
        WHERE department.d_name="Biomedical Engineering and Bioinformatics"';


        $result2 = $conn->query($sql2);

        $row2= $result2->fetch_assoc();

        
        $sql3='SELECT * FROM department
        WHERE department.d_name="Healthcare Systems Engineering"';

        $result3 = $conn->query($sql3);

        $row3= $result3->fetch_assoc();


        $sql4='SELECT * FROM department
        WHERE department.d_name="Climate Change, Energy and Health"';

        $result4 = $conn->query($sql4);

        $row4= $result4->fetch_assoc();



        $sql5='SELECT * FROM department
        WHERE department.d_name="Civil Engineering"';

        $result5 = $conn->query($sql5);

        $row5= $result5->fetch_assoc();








?>



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
    
        <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <h1>Graduate Programs</h1>
                    <div class="kart">
                        
                        <p class="yazar mb-2">
                           
                            <strong></strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="http://img.deusm.com/informationweek/2016/01/1324035/Slide1_Security_alengo_iStock_000037415392_Large.png" alt="">
                        <h3 class="mt-3"><?php echo ''.$row1['d_name'];?>(MS without thesis,MS with thesis, PhD)</h3>
                        <hr>
                        <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/EEMSS_2020_2021_Yu%cc%88ksek-Lisans.pdf;'" class="button" style="vertical-align:middle">

                            <span> Courses (MS)</span></button>
                            <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/EEMSS_2020_2021_Doktora.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (PhD)</span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        
                        <p class="yazar mb-2">
                           
                            <strong></strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://idtxs3.imgix.net/si/40000/1E/39.jpg?w=514&h=300&fit=crop&crop=faces,entropy&q=50" alt="">
                        <h3 class="mt-3"><?php echo ''.$row2['d_name'];?>(MS without thesis, MS with thesis, PhD)</h3>
                        <hr>
                        <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/BMB_2020_2021_Yüksek-Lisans.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (MS)</span></button>
                            <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/BMB_2020_2021_Doktora.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (PhD)</span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        
                        <p class="yazar mb-2">
                           
                            <strong></strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://i.pinimg.com/736x/a0/b4/c9/a0b4c9d2e2641771bbf4b1c296fee163.jpg" alt="">
                        <h3 class="mt-3"><?php echo ''.$row3['d_name'];?>(MS with thesis, PhD)</h3>
                        <hr>
                        <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/SSM_2020-2021_Yüksek-Lisans.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (MS)</span></button>
                            <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/SSM_2020-2021_Doktora.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (PhD)</span></button>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        
                        <p class="yazar mb-2">
                           
                            <strong></strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://media.istockphoto.com/photos/wind-energy-versus-coal-fired-power-plant-picture-id1189129733?k=6&m=1189129733&s=612x612&w=0&h=Ks24_sj421AhFDurbh2wZRXiXQxFlRwoc5gCtJYUgPc=" alt="">
                        <h3 class="mt-3"><?php echo ''.$row4['d_name'];?>(MS with thesis)</h3>
                        <hr>
                        <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/İES_2020_2021_Yüksek-Lisans.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (MS)</span></button>
                            
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        
                        <p class="yazar mb-2">
                           
                            <strong></strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://lh3.googleusercontent.com/proxy/_kp4XdlA4ctTLCWDJWr8kk5ldd1TFmAp_b9zpsg5DGlgpggo9FfyZTRpqFyULaKuop1leGfR5scic6wvbtfjnEhT" alt="">
                        <h3 class="mt-3"><?php echo ''.$row5['d_name'];?>(MS with thesis, PhD)</h3>
                        <hr>
                        <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/İM_2020_2021_Yuksek_Lisans.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (MS)</span></button>
                            <button onclick="window.location='https://sens.medipol.edu.tr/wp-content/uploads/2020/12/İM_2020_2021_Doktora.pdf'" class="button" style="vertical-align:middle">

                            <span> Courses (PhD)</span></button>
                        <hr>
                    </div>
                </div>
              
              
      </div>
</body>
</body>
</html>