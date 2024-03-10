<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Vehicle Info</title>

    <style>
           body{overflow: hidden;background-color: black;}
            .homeimg
			{
				height:550px;
			}
            .footer{
            text-align: center;padding: 10px;margin-top:30px;
            background-color: green;
            font-size: 30px;
            text-decoration: underline;
            color: white;
            }
            .alpha{margin-left: 500px;}
            #zuca{font-size: xx-large;color:white}
            .suri{ border: 2px solid white; margin-top: 50px;padding: 10px;color:white}

        </style>
</head>
<body>
        <div>
            <div id="header" style="min-height:100px;">
                <div id="logo" class="col-lg-2">
                <img src="images/1.png" class="col-lg-12" style="height:100px; width: 200px;" />
                </div>
            
                <div id="empty" class="col-lg-6"style="color:white">
                <h1 >KNOW THE OWNER OF VEHICLE</h1>
                </div>
            
            
                <div id="menu" class="col-lg-4" style="padding-top:30px;font-size:25px;">
                <a href="index.php">Home</a> | <a href="register.php">Register</a> | <a href="login.php">Login</a> | <a href="https://morth.nic.in/">About Us</a>
                </div>
            </div>
            <div id="content" class="alpha" style="min-height:550px;">
				
				<div class="col-lg-6">
					
                        <br><br>
                        
                        <div>
                            <div>
                                <h1 id="zuca">The Owner of Vehicle is: </h1>
                            </div>

                        <?php

$cons=mysqli_connect("localhost","root","","trafficdb");
if(isset($_POST['btn_info']))
{
    $id=$_POST['info'];
    $st=$_POST['state'];
    if($st== 'karnataka'){
    $query= "select * from karnataka where vno='$id'";
    $result=mysqli_query($cons,$query);
    }
    else if($st== "tamilnadu"){ $query= "select * from tamilnadu where vno='$id'";
        $result=mysqli_query($cons,$query);}
    else if($st== "andrapradesh"){ $query= "select * from andrapradesh where vno='$id'";
        $result=mysqli_query($cons,$query);}
    else if($st== "kerala"){ $query= "select * from kerala where vno='$id'";
        $result=mysqli_query($cons,$query);}
    else echo"Please select State";
    if(mysqli_num_rows($result)> 0)
    {
     while($row=mysqli_fetch_array($result))
     {
        ?>
        <div class="suri">
        <b>Vehicle Number:</b> <input type="text" value="<?php echo $row['vno'];?>" class="form-control">
      
     
        <b>Name:</b> <input type="text" value="<?php echo $row['name']; ?>" class="form-control">
      
     
        <b>Phone Number:</b> <input type="text" value="<?php echo $row['phone'];?>" class="form-control" id="hello">
        
      
        <b>RC Number:</b> <input type="text" value="<?php echo $row['rcno']; ?>" class="form-control">
      
        <b> Vehicle Name:</b> <input type="text" value="<?php echo $row['vname']; ?>" class="form-control">
        </div>
      
        <?php
     }
    }
    else
    {
        echo "No DATA";
    }
}




?>
          <br>              
        <diV>
            <button class="form-control"><a href="tel:+916366145241">CALL</a></button>
        </diV>                
                    
                        
                        </div>                   
                        
                        
                        
                        
                        
                        
                        















                            
                







				</div>

                


			</div>
            <div id="pagefooter" class="footer">
            ALL RIGHTS RESERVED BY MINISTRY OF ROAD TRANSPORT AND HIGHWAYS
            </div>
        </div>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>






































