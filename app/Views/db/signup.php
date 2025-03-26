<?php
$fname      = strip_tags($_POST['fname']);
$lname      = strip_tags($_POST['lname']);
$birthdate  = strip_tags($_POST['dob']);
$birthplace = strip_tags($_POST['pob']);
$nationality= strip_tags($_POST['nationality']);
$email      = strip_tags($_POST['email']);
$password   = strip_tags($_POST['password']);
$confirmP   = strip_tags($_POST['confirmPassword']);
$phone      = strip_tags($_POST['phoneNumber']);
$gender     = strip_tags($_POST['gender']);
$passport   = strip_tags($_POST['passportNumber']);


if($password != $confirmP){
    echo "<script>";
    echo "alert('Invalid username or password!');";
    echo "location.href='register.php'";
    echo "</script>";
}else{
    $db->query("INSERT into users (username,firstname,lastname,password, email) VALUES('$username','$fname','$lname','$password', '$email')");
    header("Location: index.php");
}
?>