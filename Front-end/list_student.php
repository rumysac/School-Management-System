<!DOCTYPE html>

<?php

include 'db/config.php';

$username='';
session_start();
$conn=open_connection();

$result= (int)($_SESSION['user']['lec_id']);
if (isset($_POST['search'])){
    $course_code = $_POST['course_code']; 
    $course=(string)$course_code;



/**for the info about course which is taken by students */
$sql2='SELECT * FROM take_course
JOIN student ON take_course.s_id= student.s_id
WHERE take_course.c_code= "'.$course_code.'"';

$result2 = $conn->query($sql2);

}

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
                    <li><a href="lecinfo.php"> Information of Student </a></li>

                </ul>

            </li>



        </ul>
    </div>



    <div class="coursetable" id="tabledivpdf">

        <table class="offeredtable" id="offeredtable">
            <tr class="head">
                </th>
            <tr class="tablerow">
                <th class="head">Number of Students</th>
                <th class="head">Student Name</th>
                
                
            </tr>
            </tr>

            <tbody id="tablediv">
               
           
            </tbody>

            
            <?php
           
            if ($result2!== false && $result2->num_rows > 0) {
              // output data of each row
              $i=1;
              while($row2 = $result2->fetch_assoc()) {
                echo '
                       
                        <tr>
                        <td>'.$i.'</td>
                        <td> '.$row2['first_name']. ' '.$row2['middle_name'].' '.$row2['last_name'].'</td>
                       
                        
                        


                        ';

                $i=$i+1;}}
              
          ?>




                
        </table>
      
    </div>

 <button id="cmd" class="button button2" style="float:right; margin-right:30px;     background-color: #4CAF50;
    border: none;
    color: white;
    padding: 15px 32px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
    -webkit-transition-duration: 0.4s;
    transition-duration: 0.4s;" onclick="createpdf()">Download Pdf Table</button>
    
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
    <script>
    function addcourse(id)
    {
        document.getElementById("tr_"+id).outerHTML="";
        var postdatax="type=del";
        postdatax+="&course_id="+id;
        curl_post("Add.php",postdatax);
    }


            function curl_get(urlx)
{
    var url= urlx;
    var returneddata="##404##"
    try{
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
       if (this.readyState == 4 &&this.status == 200) {
           returneddata= this.responseText;
       }
       else if(this.status==404 || this.status==500|| this.status==501|| this.status==502|| this.status==503)
       {
            returneddata= "##404##";
       }
  };
  xhttp.open("GET", url,false);
  xhttp.send();
}
catch(err){returneddata= "##404##";}
return returneddata;
}

function curl_post(urlx,postdata)
{
    var url= urlx;
    var params = postdata;
    var returneddata="##404##"
    try{
  var xhttp = new XMLHttpRequest();
 
  xhttp.onreadystatechange = function() {
       if (this.readyState == 4 &&this.status == 200) {
           returneddata= this.responseText;
       }
       else if(this.status==404 || this.status==500|| this.status==501|| this.status==502|| this.status==503)
       {
            returneddata= "##404##";
       }
  };
  xhttp.open("POST", url,false);
   xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  xhttp.send(params);
}
catch(err){returneddata= "##404##";}
return returneddata;
}
    </script>
    
</body>

</html>