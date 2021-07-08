<!DOCTYPE html>

<?php

include 'db/config.php';

$username='';
session_start();
$conn=open_connection();

$result= (int)($_SESSION['user']['s_id']);


/******************************* IF AN COURSE ADDED BY STUDENT  *******************/



if (isset($_POST['add'])||!empty($_POST['add'])){
    $course_code = $_POST['course_code'];
    $sql2 = 'INSERT INTO take_course(c_code,s_id) VALUES ("'.$course_code.'",'.$result.')  ';
    if ($conn->query($sql2) === TRUE) {
        echo "Records added successfully.";
      } else {
        echo "Error creating record: " . $conn->error;
      }  
    
}


/******************************* IF AN COURSE DELETED BY STUDENT  *****************
**/

if (isset($_POST['drop'])){
$course_code = $_POST['course_code']; 
$course=(string)$course_code;
/*
    $existing='SELECT * FROM take_course WHERE  mark IS NOT NULL
    
    ';
    
    $result1 = $conn->query($existing) or die($conn->error);
    $row = $result1->fetch_assoc();
    $bool=in_array('.$course_code.',$row);
    echo $bool;
    if($bool===TRUE ){
        echo "Can not delete the  course.";
    }
    
     
    else{*/

    $sql2 = 'DELETE FROM take_course WHERE  c_code= ("'.$course_code.'") ';
    if ($conn->query($sql2) === TRUE) {
        echo "Records deleted successfully.";
      } else {
        echo "Error deleting record: " . $conn->error;
      }  
    /* }*/
  
}



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
  
       <script src="https://kit.fontawesome.com/27a868a5a2.js" crossorigin="anonymous"></script>
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

    <center><h2 class="headingg">Selected Courses </h2><center>

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

    
    </table>
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