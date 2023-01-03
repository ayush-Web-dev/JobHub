	{{-- session_start();
    require "../dbcon.php";

    if(isset($_POST['login'])) {
    
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $password = mysqli_real_escape_string($con, $_POST['password']);
    
            $query = "SELECT * FROM users WHERE username = '$username' && password ='$password'";
            $query_run = mysqli_query($con, $query);
            if(mysqli_num_rows($query_run)) {

				foreach($query_run as $row)
				{
					$user_id = $row['id'];
					$user_name = $row['username'];
					$user_email = $row['email'];
				}
				
				$_SESSION['auth'] = true;
				$_SESSION['auth_user'] = [
					'user_id' => $user_id,
					'user_name' => $user_name,
					'user_email' => $user_email
				];
                header("Location: ../dashboard/dashboard.php");
                exit();
				
            }
            else
            {
				echo '<script>alert("Login Unsuccessful. Please enter the correct username or password")</script>';
                
            }
        }


		if(isset($_SESSION['auth']))
		{
			echo '<script>
        		window.location.href = "../dashboard/dashboard.php";
        		alert("You are already logged in!");
    		</script>';
		}
	if(isset($_GET['login'])){
		print_r($_GET['login']);
		
		
		} else {
			print_r("ERROR");
		} --}}

@extends('master')
<head>
	<link rel="stylesheet" href="{{ 'css/login.css' }}" />
	<title>Login - JobHub</title>
</head>
	<body>	
		<div class="logo">
			<img src="{{ url("images/logo.jpg") }}" />
		</div>
		<div class="login-container">
			<?php
			  if(isset($_SESSION['auth_status']))
            	{
            ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <!-- <strong>Hey!</strong>  -->
                    <?php echo $_SESSION['auth_status']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    </div>

            <?php
				unset($_SESSION['auth_status']);
				}	
			?>
			<div class="login-form">
				<span class="login-title">Login</span>

				<form action="login" method="POST">
					
					<div class="login-input">
						@csrf
						<input
							name="mobile"
							type="mobile"
							id="login-phone"
							placeholder="Enter registered mobile number"
							required
						/>
						<i class="uil uil-user login-icon"></i>
					</div>
					<div class="login-input">
						<input
							name="password"
							type="password"
							id="login-pass"
							placeholder="Enter your password"
							required
						/>
						<i class="uil uil-lock login-icon"></i>
						<i
							class="uil uil-eye-slash login-hideShow"
							onclick="showHidePass()"
						></i>
					</div>

					<div class="forgot-password">
						<a href="#" class="login-text">Forgot password ?</a>
					</div>

                    <div class="login-button">
                       <input type="submit" name="login" value="Login Now" >
                    </div>

                    <div class="login-signup">
						
                        <span style="font-weight: 500">
                            <a href="/" class="login-text">New to JobHub?</a>
                        </span>
                    </div>

                </form>
                
            </div>
        </div>
    

		<script src="{{ 'js/login.js' }}"></script>
	</body>
</html>
