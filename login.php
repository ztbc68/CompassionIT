<?php require 'connections/dbconnect.php'; ?>
<?php
    //only run code if form is submitted
    if(isset($_POST['login']))
    {
  	//define variables for sql statement
        $email    = $_POST['email'];
        $password = $_POST['password'];

	//check entered data with database
	$result = $conn->query("SELECT * from user where email='$email'");

	//grab data after found from query
	$row = $result->fetch_array(MYSQLI_BOTH);

	echo $row[1];

	//verify password
	if(password_verify($password, $row['password']))
	{

	//start session
	session_start();

	//create session variables
	$_SESSION["id"] = $row['id'];
	$_SESSION["fname"] = $row['fname'];
	$_SESSION["lname"] = $row['lname'];
    $_SESSION["email"] = $row['email'];
    $_SESSION["lat"] = $row['lat'];
    $_SESSION["lng"] = $row['lng'];
	//$_SESSION["password"] = $row['password']

	//redirect to account
	header('Location: account.php');
	}else //login failed
	{
		session_start();
		$_SESSION["loginFail"] = "Yes";
	}
    }
?>
<!DOCTYPE html>
<html>
      	<head>
              	<title>Compassion In Need</title>
                <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
                <link rel="stylesheet" type="text/css" href="bootstrap.css">
                <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
                <script src="https://code.jquery.com/jquery-3.2.1.js" integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE=" crossorigin="anonymous"></script>
                <script type="text/javascript" src="bootstrap.js"></script>
                <link rel="shortcut icon" type="image/x-icon" href="favicon.ico">
                <link rel="stylesheet" type="text/css" href="style.css">
                <meta name="viewport" content="width=device-width, initial-scale=1">
              	<meta charset="UTF-8">
            
                <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
                <style>
            
                html, body {   
                    width: 100%;   
                    height: 100%;   
                    font-family: "Helvetica Neue", Helvetica, sans-serif;   
                    color: crimson;
                    -webkit-font-smoothing: antialiased;
                }
                    
                    
            #container {
                position: fixed;
                width: 340px;
                height: 280px;
                top: 50%;
                left: 50%;
                margin-left: -600px;
            }
                    
                    
            form {
                margin: 0 auto;
                margin-top: 20px;
            }
                    
            label {
                color: black;
                display: inline-block;
                margin-left: 18px;
                padding-top: 10px;
                font-size: 14px;
            }
                    
            
            input {
                font-family: "Helvetica Neue", Helvetica, sans-serif;
                font-size: 15px;
                outline: none;
            }
                    
            input[type=text],
            input[type=email],
            input[type=password] {
                color: #777;
                padding-left: 10px;
                margin: 10px;
                width: 290px;
                height: 35px;
            }
                    
            input[type=submit],
            /*button[type=button]{
                margin-right: 20px;
                margin-top: 20px;
                width: 80px;
                height: 50px;
                font-size: 14px;
                font-weight: bold;
                color:black;
                background-color: #acd6ef; /*IE fallback*/
                background-image: -webkit-gradient(linear, left top, left bottom, from(#acd6ef), to(#6ec2e8));
                background-image: -moz-linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
                background-image: linear-gradient(top left 90deg, #acd6ef 0%, #6ec2e8 100%);
                border-radius: 30px;
                border: 1px solid #66add6;
                box-shadow: 0 1px 2px rgba(0, 0, 0, .3), inset 0 1px 0 rgba(255, 255, 255, .5);
                cursor: pointer;
            }*/
            </style>
        </head>
        <body>
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="https://www.compassioninneed.org" class="navbar-left navbar-brand"><img src="./img/compassion_in_need_logo.png" id="brand-image" alt="Website Logo"></a>
                </div>
                <div class="collapse navbar-collapse" id="bs-nav">
                    <ul class="nav navbar-nav">
                        <li><a href="about.php"><i class="fa fa-info-circle" aria-hidden="true"></i> About</a></li>
                        <li><a href="donate.php"><i class="fa fa-money" aria-hidden="true"></i> Donate</a></li>
                        <!-- <li><a href="#"><i class="fa fa-lightbulb-o" aria-hidden="true"></i> Ideas</a></li>
                        <li><a href="#"><i class="fa fa-file-text" aria-hidden="true"></i> Plans</a></li> -->
                        <li><a href="event.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Create Event</a></li>
                        <li><a href="events.php"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a></li>
                        <li><a href="map.php"><i class="fa fa-globe" aria-hidden="true"></i> Volunteers</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>
                    </ul>
                </div>
            </div>
        </nav>
		<div class="container">
            <center>
            <h2>Login</h2>
            <p>Use your email and password to login!</p>
            <form action="" method="post" name="LoginForm" id="loginform">
                <?php if(isset($_SESSION["loginFail"])){ ?>
            <div>Login Failed! Please Try Again.</div>
            <?php } ?>
                
                <label for="username">Username:</label>
                <input name="email" type="email" required="required" class="tfield" id="email" placeholder="Email">
                
                <br>
                
                <label for="password">Password:</label>
                <input name="password" type="password" required="required" class="tfield" id="password" placeholder="Password">
                
        <div id="lower">
            
            <br>
                <input name="login" type="submit" class="button" id="login" value="Login">
            
        </div>
            </form>
        </center>
        </div>
	</body>
</html>