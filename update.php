<?php
include("dbconnect.php");
            if(isset($_POST['submit']))
            {
             $id=$_POST['id'];
             $name=$_POST['name'];
             $roll=$_POST['roll'];
             $address=$_POST['address'];
             $sql="UPDATE  student SET `id`=$id,`name`='$name',`roll`='$roll',`address`='$address' WHERE id='$_POST[id]'";
             //UPDATE `student` SET `id`=[value-1],`name`=[value-2],`roll`=[value-3],`address`=[value-4] WHERE 1
             $result=mysqli_query($conn,$sql);
             if($result){
                header("Location:index.php");
             }
             else{
                 echo "error".mysqli_error($conn);
             }
             mysqli_close($conn);
           

            }

            ?>