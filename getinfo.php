<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
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
            .suri{ border: 2px solid white; margin-top: 120px;padding: 10px;}
            .ud{float:right;}

        </style>
</head>
<body>
        <div>
            <div id="header" style="min-height:100px;">
                <div id="logo" class="col-lg-2">
                <img src="images/1.png" class="col-lg-12" style="height:100px; width: 200px;" />
                </div>
            
                <div id="empty" class="col-lg-6" style="color:white;">
                <h1 >KNOW THE OWNER OF VEHICLE</h1>
                </div>
            
            
                <div id="menu" class="col-lg-4" style="padding-top:30px;font-size:25px;">
                <a href="index.php">Home</a> | <a href="register.php">Register</a> | <a href="login.php">Login</a> | <a href="https://morth.nic.in/">About Us</a> 
                </div>
            </div>
            <div id="content" class="alpha" style="min-height:550px;">
				
				<div class="col-lg-6">
                    <div class="suri">
					<form action="info.php" method="post">
						<div id="formdiv" style="font-weight:bolder;font-size:20px;padding: 15px;margin-bottom: 30px;">
							<h1 style="text-align:center;font-weight: bolder; color: white">Get Owner Details</h1>
							

                            <div style="color:white">
								
                                <label for="cars">State:</label>
                                        <select name="state" id="state" class="form-control">
                                        <option value="karnataka">Karnataka</option>
                                         <option value="tamilnadu">Tamil Nadu</option>
                                        <option value="kerala">Kerala</option>
                                          <option value="andrapradesh">Andra Pradesh</option>
                                        </select>
							</div>

							<div style="color:white">
								Enter Vehicle Number (ex: KA52M7987):
								<input type="text" class="form-control" id="info" name="info" required/>
							</div>
							
							
							<br>
							<div class="col-lg-6">
								<input type="submit" class="col-lg-12 btn btn-primary form-control" id="btn_info" name="btn_info" value="Get Info"/>
							</div>
							
							<div class="col-lg-6">
								<input type="reset" class="col-lg-6 btn btn-danger form-control" />
							</div>
						</div>
						</form>
                        
                    </div>
                        <br><br>
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        













                       

                            
                        </div>



                    



				</div>

                


			</div>
            <div id="pagefooter" class="footer">
            ALL RIGHTS RESERVED BY MINISTRY OF ROAD TRANSPORT AND HIGHWAYS      
            <div class="ud">
            <a href="login.php"><i class="fa fa-sign-out" style="font-size:45px;"></i></a>
            </div>
            </div>
        </div>







        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </body>
</html>