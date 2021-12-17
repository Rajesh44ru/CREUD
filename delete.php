<?php
include("dbconnect.php");
$id=$_POST['id'];
$sql="DELETE FROM student where id='$id'";
$result=mysqli_query($conn,$sql);
if($result){
    header("Location:index.php");
}
else{
    die("Error".mysqli_connect($conn));
}


?>