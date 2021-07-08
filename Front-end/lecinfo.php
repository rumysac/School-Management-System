<!DOCTYPE html>
<?php 

include '/Applications/XAMPP/xamppfiles/htdocs/Mebis_sens/db/config.php';
$username='';
$conn=open_connection();
session_start();
if(!isset($_SESSION["login"])){
    header("Location:inslogin.php");
}
$result= ($_SESSION['user']['lec_id']);
$sql1='SELECT * FROM employee
        JOIN lecturer ON employee.e_id= lecturer.lec_id
        WHERE lecturer.lec_id= '.$result.'';

$result1 = $conn->query($sql1);

$row= $result1->fetch_assoc();




?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFiles/lecinfo.css">
    

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

                </ul>

            </li>



        </ul>
    </div>

<br><br><br><br>

     <h2 class="headingg">Information of Lecturer </h2>

    <div class="offereddiv">
        
            <table class="searchable sortable" id="offeredtable">
                <thead class="head"></th>
                    <tr class="tablerow">
                        <th class="head">ID</th>
                        <th class="head">Lecturer Name-Surname</th>
                        <th class="head">Mail</th>
                        <th class="head"><button onclick="window.location='lec_article.php'"class="button" style="vertical-align:middle">

                            <span> Articles </span></button></th>
                                                           
                    </tr>
                </thead>
                
                    
              
            
            <tbody>
            <tr>
           
                    <td><?php echo $row['lec_id']; ?></td>
                    <td><?php echo ''.$row['first_name'].' '.$row['middle_name']. ' '.$row['last_name'];?></td>
                    <td><?php echo $row['mail']; ?></td>
                    
                </tr>
                </tbody>
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