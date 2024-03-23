<?php

session_start();

$con=mysqli_connect("localhost", "beh", "pass", "BEHloginfo");
if(mysqli_connect_error()){
die("Connection failed:" .mysqli_connect_error());
}

$username=$_POST['username'];
$password=$_POST['password'];

$sql="SELECT * FROM users WHERE uname='$username' AND pass='$password'";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
$count=mysqli_num_rows($result);

if($count==1){
$_SESSION['uname']=$row['uname'];
$_SESSION['pass']=$row['pass'];
header("Location:behhome.php");
exit();
}
else{
header("Location: login.html");
exit();
}

?>
