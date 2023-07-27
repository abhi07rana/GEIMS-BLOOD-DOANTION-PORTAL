<?php
if (isset($_POST['name'])) {
    $server = "localhost";
    $username = "root";
    $password = "root";
    $con = mysqli_connect($server, $username, $password);
    if(!$con){
       die("connection to this database failed due to" . mysqli_connect_error());
    }
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $name = $_POST['name'];
    $gender = $_POST['gender'];
    $time = $_POST['time'];
    $blood = $_POST['blood'];
    $dob = $_POST['date'];
    $sql = "INSERT INTO `geims`.`geims` ( `email`, `phone`, `name`, `gender`, `time`, `blood`, `dob`) VALUES ( '$email', '$phone', '$name', '$gender', '$time', '$blood', '$dob');";

    if ($con->query($sql) == true) {
        
      echo"<script>alert('Thanks You for donating!!!!!!!!')</script>";
      header("Location: i.html");
    } 
     else {
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();



}


?>

