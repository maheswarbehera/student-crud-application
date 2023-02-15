<?php
include 'db_connect.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {

    $name = $_POST['name'];
    $rollno = $_POST['rollno'];
    $class = $_POST['class'];
    $school = $_POST['school'];
    $address = $_POST['address'];
    $mobile = $_POST['mobile'];

    //$sql = "INSERT INTO `student` (`name`, `rollno`,`class`,`school`,`address`,`mobile`) VALUES ('$name', '$rollno','$class','$school','$address','$mobile')";
    $sql = "INSERT INTO `student` (`id`, `name`, `rollno`, `class`, `school`, `address`, `mobile`) VALUES (NULL,'$name', '$rollno','$class','$school','$address','$mobile')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('location: dashboard.php');
    } else {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Error!</strong> Your entry has been submitted successfully!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>';
    }
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container my-5">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" class="form-control" id="name" placeholder="Enter your name">
            </div>
            <div class="mb-3">
                <label for="rollno" class="form-label">Roll No</label>
                <input type="rollno" name="rollno" class="form-control" id="rollno" placeholder="Enter roll no">
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class</label>
                <input type="class" name="class" class="form-control" id="class" placeholder="Enter your class ">
            </div>
            <div class="mb-3">
                <label for="school" class="form-label">School</label>
                <input type="school" name="school" class="form-control" id="school" placeholder="Enter school name">
            </div>
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="address" name="address" class="form-control" id="address" placeholder="Enter your address">
            </div>
            <div class="mb-3">
                <label for="mobile" class="form-label">Mobile</label>
                <input type="mobile" name="mobile" class="form-control" id="mobile" placeholder="Enter Mobile No ">
            </div>

            <button type="submit" name="submit" class="btn btn-primary">submit</button>
        </form>
    </div>

</body>

</html>