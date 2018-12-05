<?php
include "Header.php";

include "body.php";
echo "<br\>";
echo "MySQL handler is created by MySQL<br>";
$con=mysql_connect("localhost","odb","odb_0db");
if(!$con){
        echo "No database connection!";
        die("Cannot establish connection");
}else {          
       echo "echo Connection established!!";
}

$query1="create database odb_anand";
$result1=mysql_query($con,$query1);
echo "The database is created!";



include "Footer.php";

mysql_close($con);
exit();
?>
