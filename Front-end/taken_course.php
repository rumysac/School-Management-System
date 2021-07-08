<!DOCTYPE html>
<?php

include 'db/config.php';

$username='';
session_start();
$conn=open_connection();

$result= (int)($_SESSION['user']['s_id']);



$sql='SELECT * FROM course
LEFT JOIN give_course  ON course.c_code= give_course.c_code
LEFT JOIN take_course  ON course.c_code= take_course.c_code
LEFT JOIN employee ON give_course.lec_id= employee.e_id
WHERE take_course.s_id='.$result.'
';

$result = $conn->query($sql) or die($conn->error);
$row = $result->fetch_assoc();


?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cssFiles/ogrenci.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.5.3/jspdf.min.js" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.3.1/jspdf.umd.min.js"></script>
       <script src="https://kit.fontawesome.com/27a868a5a2.js" crossorigin="anonymous"></script>
	       <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"
        integrity="sha512-s/XK4vYVXTGeUSv4bRPOuxSDmDlTedEpMEcAQk0t/FMd9V6ft8iXdwSBxV0eD60c6w/tjotSlKu9J2AAW1ckTA=="
        crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <div id="menu">
		<ul> 
            <li><a href="#"><img src="source/mebis_logo.png" alt=""></a></li>
			
			<li><a href="#"> Course </a>
				<ul>
		<li><a href="offered_course.php"> Current courses </a></li>
					<li><a href="drop_course.php"> Chosen courses </a></li>
					<li><a href="taken_course.php"> Taken courses </a></li>
					
				</ul>
                
                    <li><a href="#"><i class="fas fa-user fa-2x"></i></a>
                        <ul>
                            <li><a href="index.php"> Log out </a></li>
                            <li><a href="sinfo.php"> Information of Student </a></li>
                            
                        </ul>
                    
                    </li>
                    
                    
			
		</ul>
	</div>

    <br><br><br><br>

    <h2 class="headingg">Taken Courses </h2>

    <div class="offereddiv">
        
            <table class="searchable sortable" id="offeredtable">
                <thead class="head"></th>
                    <tr class="tablerow">
                        <th class="head">Course </th>
                        <th class="head">Course Code</th>
                        <th class="head">Course Name</th>
                        <th class="head">Lecturer Name</th>                                               
                        <th class="head">Mark</th> 
                                                                      
                    </tr>
                </thead>
                <?php
                if ($result!== false && $result->num_rows > 0) {
              // output data of each row
              $i=1;
              while($row = $result->fetch_assoc()) {
            
                echo '
                       
                        <tr>
                        <td>' .$i.'</td>
                        <td>' .$row["c_code"].'</td>
                        <td>' .$row["c_name"].'</td>
                        <td> '.$row['first_name']. ' '.$row['middle_name'].' '.$row['last_name'].'</td>
                        <td>' .$row["mark"].'</td>
                       
                        ';
                    
                        $i=$i+1;
                    }
                    }    
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