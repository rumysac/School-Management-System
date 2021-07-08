<?php

include "config.php";
$conn=open_connection();



$table1 = "CREATE TABLE IF NOT EXISTS department(
    d_name VARCHAR(100),
    campus VARCHAR(50),
    PRIMARY KEY (d_name));";

if ($conn->query($table1) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  

$table2 = "CREATE TABLE IF NOT EXISTS employee(
    mail VARCHAR(100),
    first_name VARCHAR(50),
    middle_name VARCHAR(50),
    last_name VARCHAR(50),
    e_id  INT(11) NOT NULL AUTO_INCREMENT,
    phone VARCHAR(15),
    gender VARCHAR(6),
    d_name VARCHAR(100),
    PRIMARY KEY (e_id),
    FOREIGN KEY (d_name) REFERENCES department(d_name) ON DELETE CASCADE);";


if ($conn->query($table2) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$table12 = "CREATE TABLE IF NOT EXISTS major(
    major_id INT(2),
    PRIMARY KEY (major_id));";
 

if ($conn->query($table12) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  } 

$table3 = "CREATE TABLE IF NOT EXISTS student(
    mail VARCHAR(100),
    first_name VARCHAR(50),
    middle_name VARCHAR(50),
    last_name VARCHAR(50),
    s_id  INT(11) NOT NULL AUTO_INCREMENT,
    phone VARCHAR(15),
    gender VARCHAR(6),
    d_name VARCHAR(100),
    major_id INT(2),
    gpa FLOAT(3),
    username VARCHAR(10) NOT NULL,
    pass VARCHAR(10) NOT NULL,
    PRIMARY KEY (s_id),
    FOREIGN KEY (d_name) REFERENCES department(d_name) ON DELETE CASCADE,
    FOREIGN KEY (major_id) REFERENCES major(major_id) ON DELETE CASCADE);";


if ($conn->query($table3) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

$table4 = "CREATE TABLE IF NOT EXISTS classroom(
    class_id VARCHAR(5),
    d_name VARCHAR(100),
    flor VARCHAR(50),
    PRIMARY KEY (class_id),
    FOREIGN KEY (d_name) REFERENCES department(d_name) ON DELETE CASCADE);";


if ($conn->query($table4) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }    

  $table6 = "CREATE TABLE IF NOT EXISTS lecturer(
    lec_id INT(11) NOT NULL ,
    research_area VARCHAR(500),
    username VARCHAR(10) NOT NULL,
    pass VARCHAR(10) NOT NULL,
    FOREIGN KEY (lec_id) REFERENCES employee(e_id) ON DELETE CASCADE);";


if ($conn->query($table6) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


$table5 = "CREATE TABLE IF NOT EXISTS headmaster(
    head_id INT(11) NOT NULL ,
    FOREIGN KEY (head_id) REFERENCES employee(e_id) ON DELETE CASCADE);";



if ($conn->query($table5) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }

 

$table7 = "CREATE TABLE IF NOT EXISTS secretary(
    sec_id INT(11) NOT NULL,
    FOREIGN KEY (sec_id) REFERENCES employee(e_id) ON DELETE CASCADE);";


if ($conn->query($table7) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }


$table8 = "CREATE TABLE IF NOT EXISTS instructor(
    ins_id INT(11) NOT NULL ,
    FOREIGN KEY (ins_id) REFERENCES lecturer(lec_id) ON DELETE CASCADE);";


if ($conn->query($table8) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }
  
  


$table9 = "CREATE TABLE IF NOT EXISTS assistant_proffesor(
    assis_id INT(11) NOT NULL ,
    FOREIGN KEY (assis_id) REFERENCES lecturer(lec_id) ON DELETE CASCADE);";


if ($conn->query($table9) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }    

$table10 = "CREATE TABLE IF NOT EXISTS associate_proffesor(
    assos_id INT(11) NOT NULL ,
    FOREIGN KEY (assos_id) REFERENCES lecturer(lec_id) ON DELETE CASCADE);";


if ($conn->query($table10) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }    

$table11 = "CREATE TABLE IF NOT EXISTS proffesor(
    prof_id INT(11) NOT NULL ,
    FOREIGN KEY (prof_id) REFERENCES lecturer(lec_id) ON DELETE CASCADE);";


if ($conn->query($table11) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }        

$table13 = "CREATE TABLE IF NOT EXISTS undergraduate(
    under_id INT(11) NOT NULL ,
    FOREIGN KEY (under_id) REFERENCES student(s_id) ON DELETE CASCADE);";


if ($conn->query($table13) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      

$table14 = "CREATE TABLE IF NOT EXISTS graduate(
    grad_id INT(11) NOT NULL ,
    FOREIGN KEY (grad_id) REFERENCES student(s_id) ON DELETE CASCADE);";


if ($conn->query($table14) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      

$table15 = "CREATE TABLE IF NOT EXISTS phd(
    phd_id INT(11) NOT NULL ,
    FOREIGN KEY (phd_id) REFERENCES student(s_id) ON DELETE CASCADE);";


if ($conn->query($table15) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      


$table16 = "CREATE TABLE IF NOT EXISTS course(
    c_name VARCHAR(100),
    c_code VARCHAR(50),
    major_id INT(2),
    PRIMARY KEY (c_code),
    FOREIGN KEY (major_id) REFERENCES major(major_id) ON DELETE CASCADE);";


if ($conn->query($table16) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      
  
  

$table17 = "CREATE TABLE IF NOT EXISTS lab(
    lab_id VARCHAR(10),
    PRIMARY KEY (lab_id));";


if ($conn->query($table17) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      


$table18 = "CREATE TABLE IF NOT EXISTS article(
    a_name VARCHAR(500),
    a_website VARCHAR(1000),
    PRIMARY KEY (a_name));";


if ($conn->query($table18) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      

    
$table19 = "CREATE TABLE IF NOT EXISTS given_at(
    class_id VARCHAR(5),
    c_code VARCHAR(50),
    FOREIGN KEY (class_id)  REFERENCES classroom(class_id) ON DELETE CASCADE,
    FOREIGN KEY  (c_code) REFERENCES course(c_code) ON DELETE CASCADE);";


if ($conn->query($table19) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      

$table20 = "CREATE TABLE IF NOT EXISTS inform(
    sec_id INT(11) NOT NULL ,
    s_id INT(11) NOT NULL ,
    FOREIGN KEY (sec_id) REFERENCES secretary(sec_id) ON DELETE CASCADE,
    FOREIGN KEY (s_id) REFERENCES student(s_id) ON DELETE CASCADE);";



if ($conn->query($table20) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      



$table21 = "CREATE TABLE IF NOT EXISTS st_publish(
    a_name VARCHAR(500),
    s_id INT(11) NOT NULL,
    FOREIGN KEY (a_name) REFERENCES article(a_name) ON DELETE CASCADE,
    FOREIGN KEY (s_id) REFERENCES student(s_id) ON DELETE CASCADE);";


if ($conn->query($table21) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }          

$table22 = "CREATE TABLE IF NOT EXISTS lec_publish(
    a_name VARCHAR(500),
    lec_id INT(11) NOT NULL ,
    FOREIGN KEY (a_name) REFERENCES article(a_name) ON DELETE CASCADE,
    FOREIGN KEY (lec_id) REFERENCES lecturer(lec_id) ON DELETE CASCADE);";


if ($conn->query($table22) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }          


$table23 = "CREATE TABLE IF NOT EXISTS take_course(
    c_code VARCHAR(50),
    s_id INT(11) NOT NULL ,
    mark INT(3), 
    FOREIGN KEY (c_code) REFERENCES course(c_code) ON DELETE CASCADE,
    FOREIGN KEY (s_id) REFERENCES student(s_id) ON DELETE CASCADE);";


if ($conn->query($table23) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }          

$table24 = "CREATE TABLE IF NOT EXISTS give_course(
    c_code VARCHAR(50),
    lec_id INT(11) NOT NULL ,
    FOREIGN KEY (c_code) REFERENCES course(c_code) ON DELETE CASCADE,
    FOREIGN KEY (lec_id) REFERENCES lecturer(lec_id) ON DELETE CASCADE);";



if ($conn->query($table24) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      


$table25 = "CREATE TABLE IF NOT EXISTS give_lab(
    s_id INT(11) NOT NULL ,
    lab_id  VARCHAR(10),
    FOREIGN KEY (s_id) REFERENCES student(s_id) ON DELETE CASCADE,
    FOREIGN KEY (lab_id) REFERENCES lab(lab_id) ON DELETE CASCADE);";


if ($conn->query($table25) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      


$table26 = "CREATE TABLE IF NOT EXISTS have_lab(
    c_code VARCHAR(50),
    lab_id VARCHAR(10),
    FOREIGN KEY (c_code) REFERENCES course(c_code) ON DELETE CASCADE,
    FOREIGN KEY (lab_id) REFERENCES lab(lab_id) ON DELETE CASCADE);";
    


if ($conn->query($table26) === TRUE) {
    echo "Table MyGuests created successfully";
  } else {
    echo "Error creating table: " . $conn->error;
  }      

close_connection($conn);
?>