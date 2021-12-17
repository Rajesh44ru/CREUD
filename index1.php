<?php
$server_name="localhost";
$user_name="root";
$pass="";
$database="test_db";
$conn=mysqli_connect($server_name,$user_name,$pass,$database);
if(!$conn){
    die("Connection Failed:".mysqli_connect_error());
}
echo "Connected sucessfully";
$sql="SELECT * FROM student";
//using oriented approach
$result=$conn->query($sql);
if($result->num_rows>0)
{
    while($row=$result->fetch_assoc())
    {
        echo $row['id'];
        ECHO $row['name'];
    }
  
    
}



?>