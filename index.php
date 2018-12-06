<?php
session_start(); // Always at the top
if (isset($_POST['submit']))
    {
   // username and password sent from form 
   $Username = $_POST['username'];
		$Password = $_POST['password'];
   require('db_config.php');
   $sql="Select id from dca_users where username='$Username' and password='$Password'";
   $result=$mysqli->query($sql);
   $count=mysqli_num_rows($result);
if ($count==1)
   {
    $_SESSION['user_id'] =$_POST['username'];
   header('location:application.php');
   }
 else
   {
   echo '<script type="text/javascript">alert("Incorrect Username/Password");</script>';
   }
   }
   else
   {
   }
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Test TO-DO Application</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
</head>
<body>

	
                            <form class="login100-form validate-form" method="post">
                                <span class="login100-form-title p-b-26">
                                    Login
                                </span>
                                <div class="wrap-input100 validate-input" data-validate = "Enter valid userid">
                                    <input class="input100" type="text" name="username">
                                    <span class="focus-input100" data-placeholder="User ID"></span>
                                </div>
            
                                <div class="wrap-input100 validate-input" data-validate="Enter password">
                                    <span class="btn-show-pass">
                                        <i class="zmdi zmdi-eye"></i>
                                    </span>
                                    <input class="input100" type="password" name="password">
                                    <span class="focus-input100" data-placeholder="Password"></span>
                                </div>
            
                                <div class="container-login100-form-btn">
                                    <div class="wrap-login100-form-btn">
                                        <div class="login100-form-bgbtn"></div>
                                        <button class="login100-form-btn" name="submit">
                                            Login
                                        </button>
                                    </div>
                                </div>
            
                                <div class="text-center p-t-115">
                                    <span class="txt1">
                                        
                                    </span>
            
                                    <a class="txt2" href="#">
                                        
                                    </a>
                                </div>
                            </form>
                 
                
				
			
	
	
</body>
</html>
