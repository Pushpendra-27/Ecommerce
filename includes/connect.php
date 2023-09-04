<?php

// $con=new mysqli or
//$con=mysqli_connect('servername','username','passward','databasename')

$con=mysqli_connect('localhost','root','','mystore');
if(!$con){
    die(mysqli_error($con));          //if it is not connected successfully then show error using die method
}

?>