<?php

/* 21.12.2017*/
/* Meghna Anand */
include "Header.php";
include "Lab9body.php";
$con=mysql_connect('localhost','odb','odb_0db');
if(!$con){
echo "Connection established!!";
die("Cannot establish a connection");
}else{
 echo "Connection established!!";
}

mysql_select_db('odb_anand');
mysql_query("INSERT INTO Employee(Empname,id,name,age)VALUES('Timmy Mellowman','23','Java','25')") or die(mysql_error());  
mysql_query("INSERT INTO Employee(Empname,id,name,age)VALUES('Hugh Jackman','24','PHP','40')") or die(mysql_error());  
mysql_query("INSERT INTO Employee(Empname,id,name,age)VALUES('Brad Pitt','25','JS','45')") or die(mysql_error());  

echo "Data inserted!!";
include "Footer.php";
mysql_close($con);
exit();

?>