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
	<link rel="stylesheet" type="text/css" href="index.css">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
                        <?php if(isset($_SESSION["id"])) {echo '<li><a href="event.php"><i class="fa fa-calendar-plus-o" aria-hidden="true"></i> Create Event</a></li>';} ?>
                        <li><a href="events.php"><i class="fa fa-calendar" aria-hidden="true"></i> Events</a></li>
                        <li><a href="map.php"><i class="fa fa-globe" aria-hidden="true"></i> Volunteers</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                        <?php if(isset($_SESSION["id"])) {} else {echo '<li><a href="signup.php"><i class="fa fa-user-plus" aria-hidden="true"></i> Sign Up</a></li>';} ?>
                        <?php if(isset($_SESSION["id"])) {} else {echo '<li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i> Login</a></li>';} ?>
                        <?php if(isset($_SESSION["id"])) {echo '<li><a href="account.php"><i class="fa fa-id-card" aria-hidden="true"></i> Account</a></li>';} ?>
                        <?php if(isset($_SESSION["id"])) {echo '<li><a href="logout.php"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li>';} ?>
                    </ul>
                </div>
            </div>
        </nav>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div id="homeContent">
				<h1 id="h1">Compassion <span id="in">In</span> <span id="need">Need</span></h1>
				<h3>A Crowd-Sourced Community Service App</h3>
				<hr>
				<button onclick="location.href='https://www.compassioninneed.org/signup.php'" class="btn btn-default btn-lg"><i class="fa fa-heart" aria-hidden="true" id="h1"></i> <span id="in">Get Started!</span></button>
			</div>
		</div>
	</div>
</div>
</body>
</html>
