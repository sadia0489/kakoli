<?php 
require_once 'dbcon.php';

if(isset($_POST['save_data'])){
    $student_name=$_POST['student_name'];
    $father_name=$_POST['father_name'];
    $mother_name=$_POST['mother_name'];
    $dob=$_POST['dob'];
    $gender=$_POST['gender'];
    $religion=$_POST['religion'];
    $mobile=$_POST['mobile'];
    $email=$_POST['email'];
    $address=$_POST['address'];
    $class=$_POST['class'];
    $photo=$_FILES['photo']['name'];
    $tmp_name=$_FILES['photo']['tmp_name'];

    $insert_query=mysqli_query($dbcon,"INSERT INTO `student_info`(`student_name`, `father_name`, `mother_name`, `dob`, `gender`, `religion`, `mobile`, `email`, `address`, `class`, `photo`) VALUES ('$student_name','$father_name','$mother_name','$dob','$gender','$religion','$mobile','$email','$address','$class','$photo')");
    if($insert_query){
        move_uploaded_file($tmp_name, "images/$photo");
        echo '
        <script>
        alert("Successfully submited");
        window.location.href="index.php";
        </script>
        
        ';

    }
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">

        <h1>Data Insert in php with sql</h1>
        <form action="" method="post" enctype="multipart/form-data">
        <div class="row">
       
        <div class="col-sm-12 col-lg-6">
            <div class="mb-3">
                <label class="form-label" for="">Student Name:</label>
                <input type="text" name="student_name" class="form-control" placeholder="Student Name">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Father's Name:</label>
                <input type="text" name="father_name" class="form-control" placeholder="Father's Name">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
             <div class="mb-3">
                <label class="form-label" for="">Mother's Name:</label>
                <input type="text" name="mother_name" class="form-control" placeholder="Mother's Name">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Date Of Birth:</label>
                <input type="date" name="dob" class="form-control" placeholder="Date Of Birth">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Gender:</label>
            <select name="gender" class="form-select" id="">
                <option>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Religion:</label>
            <select name="religion" class="form-select" id="">
                <option>Select Religion</option>
                <option value="Islam">Islam</option>
                <option value="Hindu">Hindu</option>
                <option value="Christian">Christian</option>
            </select>
            </div>
        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Mobile:</label>
                <input type="text" name="mobile" class="form-control" placeholder="Mobile" pattern="01[3|4|5|6|7|8|9][0-9]{8}">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Email:</label>
                <input type="text" name="email" class="form-control" placeholder="Email">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Address:</label>
                <input type="text" name="address" class="form-control" placeholder="Address">
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Class</label>
                <select name="class" class="form-select" id="">
                <option>Select Class</option>
                <option value="One">One</option>
                <option value="Two">Two</option>
                <option value="Three">Three</option>
                <option value="Four">Four</option>
                <option value="Five">Five</option>
                <option value="Six">Six</option>
            
            </select>
            </div>

        </div>
        <div class="col-sm-12 col-lg-6">
        <div class="mb-3">
                <label class="form-label" for="">Photo</label>
                <input type="file" name="photo" class="form-control">
            </div>

        </div>
      
        </div>
        <div class="col-sm-2">
            <input type="submit"  class="form-control btn btn-primary" name="save_data" value="Submit">
    </div>
        </form>

    </div>





<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>






