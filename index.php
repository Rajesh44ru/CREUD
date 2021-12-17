<?php
include("dbconnect.php");

?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>RajeshShows</title>
  </head>
  <body>
    <div class="container">
        <br><br>
        <center><h3>Perform CRUD Operation Here</h3></center><bR><BR>
        <table class="table" border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ROLL</th>
                    <th>ADDRESS</th>
                    <th>Action </th>
                    <th>Action</th>
                </tr>
            </thead>
            <?php
            $sql="SELECT * FROM `student`";
            //$sql1="UPDATE TABLE `student`  set name='rakesh' WHERE id=1";
            //$sql2="DELETE FROM TABLE `student` where id=2";
            $result=mysqli_query($conn,$sql);
            if(mysqli_num_rows($result)>0){
                while($row=mysqli_fetch_assoc($result))
                {
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['roll']."</td>";
                    echo "<td>".$row['address']."</td>";
                    echo '<td>
                          <form action = "edit.php " method="POST">
                          <input type="hidden" name="id" value='.$row['id'].'>
                          <input type="submit" class="btn btn-primary" name="edit" value="Edit"> 
                          </form>
                          </td>';
                    echo '<td>
                          <form action = "delete.php " method="POST">
                          <input type="hidden" name="id" value='.$row['id'].'>
                          <input type="submit" class="btn bth-sm btn-danger" name="delete" value="Delete"> 
                          </form>
                          </td>';
                    echo "<tr>";
                }
            }else 
            echo "no result found ";
            
            
            ?>

        <table>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
  </body>
</html>