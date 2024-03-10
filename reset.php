<?php

    
    $phone=$_POST['phone'];
    $repass=$_POST['repass'];
   

    $con = new mysqli("localhost","root","","trafficdb");
if ($con->connect_error) {
    die('connect Failed: '. $con->connect_error);
}
else
{
    $stmt= $con->prepare("update userdata set pswd='$repass' where phone='$phone'");
   
    $stmt->execute();
   $stmt_result = $stmt->get_result();
   if ($stmt_result->num_rows > 0) {
    $data = $stmt_result->fetch_assoc();
    if($data['pswd']===$repass){
        echo'Password Cannot be Same';
    }
}
else{
    echo "<script>
alert('Password Reset Successfully');
window.location.href='login.php';
</script>";
    
}
}
?>