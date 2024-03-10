<?php

    
    $phone=$_POST['phone'];
    $pswd=$_POST['pswd'];
    

    $con = new mysqli("localhost","root","","trafficdb");
if ($con->connect_error) {
    die('connect Failed: '. $con->connect_error);
}
else
{
    $stmt= $con->prepare("select * from userdata where phone= ?");
    $stmt->bind_param("i",$phone);
    $stmt->execute();
   $stmt_result = $stmt->get_result();
   if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if($data['pswd']===$pswd){
        header('location:getinfo.php');
    }
}
else{
    echo "<h2>Invalid Credentials</h2>";
}
}
?>