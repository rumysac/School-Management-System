<?php 
 
 include '/Applications/XAMPP/xamppfiles/htdocs/Mebis_sens/db/config.php';
$conn=open_connection();

session_start();
 
$username = $_POST['username'];
$password = $_POST['password'];
 

$sql_check = $conn->query("SELECT * FROM student where username='".$username."' and pass='".$password."' ") or die($conn->error);
$result=mysqli_fetch_array($sql_check);

if( $result["username"]==$username && $result["pass"]==$password)  {
    $_SESSION['login'] = "true";
    $_SESSION['user'] = $result;
    $_SESSION['password']=$password;
   
    header("Location:../sinfo.php");
}
else {
    if($username=="" or $password=="") {
        echo "<center>Please do not leave the username or password blank..! <a href=javascript:history.back(-1)>Geri Don</a></center>";
    }
    else {
        echo "<center>Username/passsword Wrong! br><a href=javascript:history.back(-1)>Go BACK</a></center>";
    }
}
 
close_connection($conn);
?>