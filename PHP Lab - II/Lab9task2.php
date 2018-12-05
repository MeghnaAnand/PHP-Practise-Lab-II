<?php
include "Header.php";
$con=mysql_connect("localhost","odb","odb_0db");
if(!$con){
  echo "Connection is not established!";
  die("Cannot establish a connection!!");
}else{
 echo "Connection established!!";
}
mysql_select_db("odb_anand");
mysql_query("CREATE TABLE Employee(EmpName VARCHAR(50),id INT NOT NULL AUTO_INCREMENT, PRIMARY KEY(id),name VARCHAR(30), age INT)")or die(mysql_error());  

echo "Table Created!";

mysql_close($con);
exit(); 
?>




