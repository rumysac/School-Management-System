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
    <link rel="stylesheet" href="cssFiles/secretary.css">
    <title>Document</title>
</head>
<body>
<?php 
        $sql1='SELECT * FROM employee
        JOIN secretary ON employee.e_id= secretary.sec_id
        WHERE employee.e_id=13 ';

        $result1 = $conn->query($sql1);

        $row1= $result1->fetch_assoc();


        $sql2='SELECT * FROM employee
        JOIN secretary ON employee.e_id= secretary.sec_id
        WHERE employee.e_id=14  ';

        $result2 = $conn->query($sql2);

        $row2= $result2->fetch_assoc();

        
        $sql3='SELECT * FROM employee
        JOIN secretary ON employee.e_id= secretary.sec_id
        WHERE employee.e_id=15  ';

        $result3 = $conn->query($sql3);

        $row3= $result3->fetch_assoc();





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
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>SECRETARY</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2015/01/cover_0000_IMG_6154-29.jpg-e1499082206198.png" alt="">
                        <h3 class="mt-3">Faculty Secretary:  <?php echo ''.$row1['first_name'].' '.$row1['middle_name']. ' '.$row1['last_name'];?> </h3>
                        <hr>
                        <p class="blog text-justify">
                            E-mail: <?php echo ' '.$row1['mail'];?>
                        </p>
                        <p class="blog text-justify">
                            Phone: <?php echo ' '.$row1['phone'];?>
                        </p>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>SECRETARY</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2017/08/photo-e1503494544743.jpeg" alt="">
                        <h3 class="mt-3">Secretary:  <?php echo ''.$row2['first_name'].' '.$row2['middle_name']. ' '.$row2['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            E-mail: <?php echo ' '.$row2['mail'];?>
                        </p>
                        <p class="blog text-justify">
                            Phone: <?php echo ' '.$row2['phone'];?>
                        <hr>
                    </div>
                </div>
                <div class="container">
            <div class="row my-3">
                <div class="col-md-4 mb-3">
                    <div class="kart">
                        <p class="yazar mb-2">
                            <strong>SECRETARY</strong> <span class="badge badge-pill badge-primary"></span>
                        </p>
                        <img class="img-thumbnail" src="https://sens.medipol.edu.tr/wp-content/uploads/2015/01/Burak-e1499082266367.png" alt="">
                        <h3 class="mt-3">Secretary:  <?php echo ''.$row3['first_name'].' '.$row3['middle_name']. ' '.$row3['last_name'];?></h3>
                        <hr>
                        <p class="blog text-justify">
                            E-mail:<?php echo ' '.$row3['mail'];?>
                        </p>
                        <p class="blog text-justify">
                            Phone: <?php echo ' '.$row3['phone'];?>
                        </p>
                        <hr> 
                    </div>
                </div>
              
              
      </div>
</body>
</html>