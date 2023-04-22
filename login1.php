<?php
$host="localhost";
$user="root";
$password="";
$db="first";
$link=mysqli_connect($host,$user,$password,$db);

$u=$_POST['user'];
$p=$_POST['pass'];

$query="select * from tbllogin where username='$u' and password='$p'";
$result=mysqli_query($link,$query);
if(mysqli_num_rows($result)>0){
    header("location:home.php");
}else{
    echo "INVALID USER/PASSWORD";
}

?>