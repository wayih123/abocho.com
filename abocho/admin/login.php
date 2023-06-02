<?php
include('includes/conn.php');
session_start();

ob_start();
?>
<!DOCTYPE html>
<html lang="en" class="h-100">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>

    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta property="og:title" content="Abocho Dashboard" />
    <meta property="og:description" content="Abocho Dashboard" />
    <meta property="og:image" content="https:abocho.com" />
    <meta name="format-detection" content="telephone=no">
    <title>Abocho |Admin Login</title>
    <meta name="description" content="Some description for the page"/>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="public/images/favicon.png">
    <link href="public/css/style.css" rel="stylesheet">
    <script src="public/js/sweetalert.min.js" type="text/javascript"></script>

    
</head>

<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
			    <div class="col-md-6">
        <div class="authincation-content">
            <div class="row no-gutters">
                <div class="col-xl-12">
                    <div class="auth-form">
    					<div class="text-center mb-3">
                             <h4 class="text-center mb-4">  ABOCHO SUPER ADMIN</h4>
                          
    						<!-- <img src="public/images/logo-full-black.png" alt=""> -->
    					</div>
                        <p class="text-center mb-4">Loing into Admin Dashboard</p>
                        
                       

                        <?php
               if (isset($_POST['submit'])) {

                $username = htmlentities($_POST['username']);
                      $password = htmlentities($_POST['password']);

                      
                      $sql = "SELECT * FROM admin WHERE username='$username' AND password='$password' ";

                     $result = mysqli_query($conn, $sql);
                     $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

                     if (!$row == 0) {


                         $name = $row['username'];
                         $id = $row['id'];

                         $_SESSION['username'] = $name;
                         $_SESSION['id'] = $id;

                         header("location:index.php");


                            }
                         else
                        {
                          ?>

                                <script>
                                    swal({
                                    title: "Error Logging in",
                                    text: "Please Check your log-in details and try to log in again!",
                                    icon: "warning",
                                    buttons: true,
                                    dangerMode: true,
                                  })
                               
                                </script>


                          <?php
                           
                         
                         }

               }
                  



                  ?>
                        <form action="login.php" method="POST">
                            <div class="form-group">
                                <label class="mb-1"><strong>User Name</strong></label>
                                <input type="text" name="username" class="form-control" placeholder="Username">
                            </div>
                            <div class="form-group">
                                <label class="mb-1"><strong>Password</strong></label>
                                <input type="password" name="password" class="form-control" placeholder="Password">
                            </div>
                            <div class="form-row d-flex justify-content-between mt-4 mb-2">
                                
                                <div class="form-group">
                                    <a href="page-forgot-password.html">Forgot Password?</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="submit" class="btn btn-primary btn-block">Sign Me In</button>
                            </div>
                        </form>
                     
                    </div>
                </div>
            </div>
        </div>
    </div>
            </div>
        </div>
    </div>
<script src="public/vendor/global/global.min.js" type="text/javascript"></script>
				<script src="public/vendor/bootstrap-select/dist/js/bootstrap-select.min.js" type="text/javascript"></script>
					<script src="public/js/custom.js" type="text/javascript"></script>
				<script src="public/js/deznav-init.js" type="text/javascript"></script>
				<script src="public/js/demo.js" type="text/javascript"></script>
				<script src="public/js/styleSwitcher.js" type="text/javascript"></script>
	</body>


</html>