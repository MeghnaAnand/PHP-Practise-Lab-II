<?php

/* 21.12.2017*/
/* Meghna Anand */
include "Header.php";
include "Lab9body.php";
$con=mysql_connect('localhost','odb','odb_0db');
if(!$con){
 echo "Connection not established!";
 die("Cannot establish connection");
}else{
 echo "Connection established!!";
}
mysql_select_db("odb_anand");
if($_GET['submit']=='submit'){
echo "You entered ".$_GET['id']."id";
 
$query= "SELECT * FROM Employee where id = ".$_GET['id'];
$result=mysql_query($query,$con);
echo "<table border='2'>  
           <tr> 
            <th>EmpName</th>
			<th>id</th>		
			<th>name</th>
			<th>age</th>		
 		</tr>";
while($row = mysql_fetch_array($result)){
 echo '
        <tr>
            <td>'.$row['EmpName'].'</td>
            <td>'.$row['id'].'</td>
            <td>'.$row['name'].'</td>
            <td>'.$row['age'].'</td>
        </tr>';

}echo '</table>';
}
echo "This is the table for ".$_GET['id']."id";
include "Footer.php";
mysql_close($con);
exit();






?>