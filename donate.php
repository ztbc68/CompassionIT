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
                </div>
            </div>
        </nav>

<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div id="homeContent">
				<h1>Donate</h1>
				<p>Every donation to this site will be used for this site. This site will also transparent in how much money has been donated and what it will be used for. Firstly, donations will be used to cover the cost to run the website. Anything after that will be used for community service projects. There will be a community money pot that holds all the money that can be used to fund community service projects. Requests can be made for money and will be approved either by a vote by the community or by the creator/admin of the site. In the beginning, it will most likely be the latter until enough development is done for a voting system to be in place.</p>

				<p>Cryptocurreny will be used as a means for funds because it can be sent around the world without many barriers. Plus, the funds that are donated may grow over time. They also have the chance to depreciate over time, but in that case, a Paypal donation address will also be provided. Cryptocurrency is preferred, but Paypal will also be accepted. If no options suit you, then please send an email to compassioninneed@gmail.com with your preferred method and it will be worked out.</p>

				<br>

				<p>Donation Address (Ethereum): 0x3C2f1185511D9eeda89d1207b1d20d707DBF6770
				<br><a href="https://etherscan.io/address/0x3c2f1185511d9eeda89d1207b1d20d707dbf6770">Etherscan.io</a></p>

				<p>Donation Address (Bitcoin): 17tqrvJoWkg1dfRNVxYspAWaSnXiTHvf9k
				<br><a href="https://blockchain.info/address/17tqrvJoWkg1dfRNVxYspAWaSnXiTHvf9k">Blockchain.info</a></p>

				<p>Donation Address (Paypal): compassioninneed@gmail.com
				<br><a href="https://paypal.me/CompassionInNeed">Paypal.me/CompassionInNeed</a></p>
			</div>
		</div>
	</div>
</div>
</body>
</html>