<!DOCTYPE html>

<?php

include 'db/config.php';

$username='';
session_start();
$conn=open_connection();



$sql='SELECT * FROM course
LEFT JOIN give_course  ON course.c_code= give_course.c_code
LEFT JOIN employee ON give_course.lec_id= employee.e_id
ORDER BY employee.e_id
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

    <center><h2 style="text-align:center">Current Courses</h2> <center>

    <div class="offereddiv">

        <table class="searchable sortable">
            <thead class="head">
                </th>
                <tr class="tablerow">
                    <th class="head">Course</th>
                    <th class="head">Course Code</th>
                    <th class="head">Course Name</th>

                    <th class="head">Lecturer</th>

                </tr>
            </thead>

            <?php
                if ($result!== false && $result->num_rows > 0) {
              // output data of each row
              $i=1;
              while($row = $result->fetch_assoc()) {
                $a=$row["c_code"];
                echo '
                       
                        <tr>
                        <td>' .$i.'</td>
                        <td>' .$row["c_code"].'</td>
                        <td>' .$row["c_name"].'</td>
                        <td> '.$row['first_name']. ' '.$row['middle_name'].' '.$row['last_name'].'</td>
                      
                        ';
                    
                        $i=$i+1;
                    }
                    }
                    
                ?>
        </table>

    </div>


    <body><div >
        <table>
            <div class="course_add">
                <h4>ADD COURSE </h4>
                <form  action="drop_course.php" method="post">
                    <div >
                        <input type="text" required="" name='course_code' placeholder="Course Code" required>
                    
                    </div>
                    <div >



                    <input type="submit" value="ADD COURSE" name="add">
                    </div>
 



                </form>


            </div>


   
    
        <table>
            <div class="course_drop">
                <h4>DROP COURSE </h4>
                <form method="POST" action="drop_course.php">
                    <div >
                        <input type="text" required="" name='course_code' placeholder="Course Code" required>
                    
                    </div>
                    <div >



                    <input type="submit" value="DROP COURSE" name="drop">
                    </div>
 



                </form>


            </div>
            </div>

    </body>
    
    </table>
    <script>
    function addcourse(id) {
        document.getElementById("tr_" + id).outerHTML = "";
        var postdatax = "type=add";
        postdatax += "&course_id=" + id;
        curl_post("Add.php", postdatax);
    }


    function curl_get(urlx) {
        var url = urlx;
        var returneddata = "##404##"
        try {
            var xhttp = new XMLHttpRequest();
            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    returneddata = this.responseText;
                } else if (this.status == 404 || this.status == 500 || this.status == 501 || this.status == 502 ||
                    this.status == 503) {
                    returneddata = "##404##";
                }
            };
            xhttp.open("GET", url, false);
            xhttp.send();
        } catch (err) {
            returneddata = "##404##";
        }
        return returneddata;
    }

    function curl_post(urlx, postdata) {
        var url = urlx;
        var params = postdata;
        var returneddata = "##404##"
        try {
            var xhttp = new XMLHttpRequest();

            xhttp.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    returneddata = this.responseText;
                } else if (this.status == 404 || this.status == 500 || this.status == 501 || this.status == 502 ||
                    this.status == 503) {
                    returneddata = "##404##";
                }
            };
            xhttp.open("POST", url, false);
            xhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
            xhttp.send(params);
        } catch (err) {
            returneddata = "##404##";
        }
        return returneddata;
    }
    </script>

</body>

</html>