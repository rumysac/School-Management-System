<!DOCTYPE html>
<?php

include 'db/config.php';

$username='';
session_start();
$conn=open_connection();

$result= (int)($_SESSION['user']['lec_id']);
/**for the info about specific courses given by lecturer */
$sql1='SELECT * FROM give_course
JOIN course ON give_course.c_code=course.c_code
WHERE give_course.lec_id= '.$result.'';

$result1 = $conn->query($sql1);


/**for selecting total no of student who takes specific course given by lecturer */
$sql2='SELECT count(take_course.s_id)  as total  FROM take_course
JOIN give_course ON take_course.c_code= give_course.c_code
WHERE give_course.lec_id= '.$result.'';

$result2 = $conn->query($sql2);


/**for the info about student who takes specific course given by lecturer */
$sql3='SELECT * FROM give_course
JOIN take_course  ON take_course.c_code= give_course.c_code
JOIN student ON student.s_id= take_course.s_id
WHERE give_course.lec_id= '.$result.'';

$result3 = $conn->query($sql3);
$row3 = $result3->fetch_assoc();

/**for the info about course which is taken by students */
$sql4='SELECT * FROM take_course
JOIN give_course ON take_course.c_code= give_course.c_code
WHERE give_course.lec_id= '.$result.'';

$result4 = $conn->query($sql4);
$row4 = $result4->fetch_assoc();



?>




<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFiles/courses.css">
    

    <script src="https://kit.fontawesome.com/27a868a5a2.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"
        integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA=="
        crossorigin="anonymous"></script>

    <script>
        var doc = new jsPDF();


        function createpdf() {

            html2canvas($("#offeredtable"), {
                onrendered: function (canvas) {

                    var myImage = canvas.toDataURL("image/png");
                    const pdf = new jsPDF('p', 'pt', 'a4');
                    const imgProps = pdf.getImageProperties(myImage);
                    const pdfWidth = pdf.internal.pageSize.getWidth();
                    const pdfHeight = (imgProps.height * pdfWidth) / imgProps.width;
                    pdf.addImage(myImage, 'PNG', 0, 0, pdfWidth, pdfHeight);
                    pdf.save('download.pdf');
                }
            });



        }



    </script>

    <title>INSTRUCTOR</title>
</head>

<body>
    
    <div id="navbar">
        <ul>
            <li><a href="#"><img src="Source/mebis_logo.png" alt=""></a></li>
            <li><a href="instructor_courses.php">Courses</a>
            <li><a href="#"><i class="fas fa-user fa-2x"></i></a>
                <ul>
                    <li><a href="index.php"> Log out </a></li>
                    <li><a href="lecinfo.php"> Information of Lecturer </a></li>

                </ul>

            </li>



        </ul>
    </div>
    



    <div class="coursetable" id="tabledivpdf">

        <table class="offeredtable" id="offeredtable">
            <tr class="head">
                </th>
            <tr class="tablerow">
                <th class="head">Course Code</th>
                <th class="head">Course Name</th>
                <th class="head">Number of Registered Students</th>
               
                
            </tr>
            </tr>

            <tbody id="tablediv">
               
           
            </tbody>
            
            <?php



            if ($result1!== false && $result1->num_rows > 0) {
              // output data of each row
              $i=0;
              while($row1 = $result1->fetch_assoc()) {
                  if( $result4->num_rows > 0){
                  if($row1["c_code"]==$row4["c_code"]){
                     $row2 = $result2->fetch_assoc();
                   
                    }
                  else{ $row2['total']=0;}}
                  else{ $row2['total']=0;}
                echo '
                       
                        <tr>
                        <td>' .$row1["c_code"].'</td>
                        <td>' .$row1["c_name"].'</td>
                        <td>' .$row2['total'].'</td>
                        
                        
                        ';
                    
                        $i=$i+1;
                    }
                    }/*
                        if ($result3!== false && $result3->num_rows > 0){
                            while($row3 = $result3->fetch_assoc()) {
                                if($row1["c_code"]==$row3["c_code"]){
                                echo '
                        <td> '.$row3['first_name']. ' '.$row3['middle_name'].' '.$row3['last_name'].'</td>';}
                            }}                */        


                        

               
          ?>


<body><div >
        <table>
            <div class="student_search">
            <center><h4>STUDENT SEARCH </h4><center>
                <form  action="list_student.php" method="post">
                    <div >
                        <input type="text" required="" name='course_code' placeholder="Search" required>
                    
                    </div>
                    <div >



                    <input type="submit" value="SEARCH" name="search">
                    </div>
 



                </form>


            </div>







                
        </table>
      
    </div>
</body>

</html>