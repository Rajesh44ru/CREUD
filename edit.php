<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <title>Rajesh form</title>
</head>

<body>
<?php
    include("dbconnect.php");

    $Id=$_POST['id'];
    $sql="SELECT * FROM `student` where id=$Id";
    $result= mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    
    ?>

    <div class="container">
        <div class="row">

            <div class="col-sm-4">
                <h4>Edit  the detail below</h4>


                <form action="update.php" method="post">
                    <div class="form-group">
                        <label for="name">NAME</label>
                        <input type="text" class="form-control" name="name" value= "<?php echo $row['name'];?>">
                    </div>
                    
                   
    
                    <div class="form-group">
                        <label for="roll">ROLL</label>
                        <input type="text" class="form-control" name="roll" value="<?php echo $row['roll'];?>">
                    </div>
                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text " class="form-control" name="address" value="<?php echo $row['address'];?>">
                    </div><bR>
                    <input type="hidden" name="id" value="<?php echo $_POST['id'];?>">
                    <input type="submit" class="btn btn-primary" name="submit" value="update">

                </form>
            </div>
            
   


        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->
</body>

</html>