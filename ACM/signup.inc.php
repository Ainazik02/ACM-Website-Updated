<?php
include_once 'db.php';

if(isset($_POST['submit'])){
    
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $major=$_POST['major'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql = "INSERT INTO acm(name,lsName, email, phone, major) VALUES('$first_name', '$last_name','$email','$phone','$major');";
    mysqli_query($conn, $sql);
    header("Location: index.html?success");
}
?>