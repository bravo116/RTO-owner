<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <title>Change Password</title>

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
            .alpha{margin-left: 500px; }
            .suri{ border: 2px solid white; margin-top: 50px;padding: 10px;}

        </style>
</head>
<body>
<div>
            <div id="header" style="min-height:100px;">
                <div id="logo" class="col-lg-2">
                <img src="images/1.png" class="col-lg-12" style="height:100px; width: 200px;" />
                </div>
            
                <div id="empty" class="col-lg-6" style="color:white">
                <h1 >KNOW THE OWNER OF VEHICLE</h1>
                </div>
            
            
                <div id="menu" class="col-lg-4" style="padding-top:30px;font-size:25px;">
                <a href="index.php">Home</a> | <a href="register.php">Register</a> | <a href="login.php">Login</a> | <a href="https://morth.nic.in/">About Us</a>
                </div>
            </div>
            <div id="content" class="alpha" style="min-height:550px;">
				
				<div class="col-lg-6">
                    <div class="suri">
					<form method="post" action="reset.php">
						<div id="formdiv" style="font-weight:bolder;font-size:20px;padding: 15px;margin-bottom: 30px;">
							<h1 style="text-align:center;font-weight: bolder; color: white">RESET PASSWORD! </h1>
							<br>
							<div style="color:white">
								Phone :
								<input type="text" class="form-control" id="phone" name="phone" required/>
							</div>
                            <div style="color:white">
								Enter your new Password :
								<input type="password" class="form-control" id="pass" name="pass" required/>
							</div>
                            <div style="color:white">
								Re-Enter Password :
								<input type="password" class="form-control" id="repass" name="repass" required />
							</div>
							
							
                            
							
                           
                            <br>
							<div class="col-lg-6">
								<input type="submit" class="col-lg-12 btn btn-primary form-control" id="btn_login" name="btn_login" value="Reset Password"/>
							</div>
							
							<div class="col-lg-6">
								<input type="reset" class="col-lg-6 btn btn-danger form-control" />
							</div>
                            <div>
                               
                            </div>
						</div>
						</form>
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