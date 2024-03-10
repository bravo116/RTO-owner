<?php

    $name=$_POST['name'];
    $vno=$_POST['vno'];
    $phone=$_POST['phone'];
    $pswd=$_POST['pswd'];
    $otp=$_POST['otp'];
    $email=$_POST['email'];

    $conn = new mysqli('localhost','root','','trafficdb');
if ($conn->connect_error) {
    die('connect Failed: '. $conn->connect_error);
}
else
{
    $stmt= $conn->prepare("insert into userdata(name,vno,phone,pswd,otp,email) values(?,?,?,?,?,?)");
    $stmt->bind_param("ssisis",$name,$vno,$phone,$pswd,$otp,$email);
    $stmt->execute();
    echo '<script>alert("Registered Successfully")</script>';
    $stmt->close();
    $conn->close();
   
    header('location:login.php');
}
?>