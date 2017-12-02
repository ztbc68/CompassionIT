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
                    </ul>
                </div>
            </div>
        </nav>

<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12" id="center"><img src="./img/compassion_in_need_2.png" alt="Compassion in Need Logo" id="logo"></div>
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<div id="homeContent">
				<h2>The Vision</h2>
				<p>This site aims to provide a platform for local volunteers to share what they are doing to improve their local communities. Imagine a social media platform dedicated to volunteers. You can upload service projects, request volunteers, petition for funding, approve funding on other projects, earn points to be the best volunteer in your area, and much more. Let's make community service fun and easy. The ultimate vision of this site is for everyday people to use this platform to keep communities clean and innvolved.</p>
				<h2>The Mission</h2>
				<p>Like the song, "All You Need is Love" by <a href="http://ultimateclassicrock.com/beatles-all-you-need-is-love/" id="blue">The Beatles</a>, Compassion In Need believes that love is all the world needs. Therefore, this site's mission is to bring more love into the world. Love comes in many forms so this site will have to continuously adapt. If you have any suggestions on how to improve this site, please contact the <a href="https://www.compassioninneed.org/creator.php">creator</a>.</p>
			</div>
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>
</body>
</html>