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
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<h1 id="center">Zachary Bryant</h1>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<h2>Education</h2>
			<h3>College (Columbia, MO)</h3>
			<ul>
				<li>University of Missouri - Columbia</li>
				<li>BS in Computer Science</li>
				<li>Graduation: December 2017</li>
				<li>Current GPA: 3.2 </li>
			</ul>
			<h3>High School (Edwardsville, IL)</h3>
			<ul>
				<li>Edwardsville High School</li>
				<li>Graduation: May 2014</li>
				<li>GPA: 4.3</li>
			</ul>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<h2>Experience</h2>
			<h3>Student Assistant IT (Univ of Missouri-System Admin)</h3>
			<h4>June 2015 - Present</h4>
			<ul>
				<li>Work with customers and coworkers to maintain computer labs and printers on MU's campus</li>
				<li>Monitor printers on campus and dispatch workers when problems arise</li>
				<li>Answer phone calls from customers and prepare tickets to be resolved by correct work group</li>
			</ul>
			<h3>Tennis Instructor (Edwardsville School District 7)</h3>
			<h4>June 2014 - July 2014</h4>
			<ul>
				<li>Taught second and fifth graders the basics of tennis</li>
				<li>Compiled an agenda for each day</li>
				<li>Analyzed skill levels of different students and adapted my teaching strategies accordingly</li>
			</ul>
			<h3>Newspaper Carrier (Edwardsville Intelligencer)</h3>
			<h4>May 2006 - August 2014</h4>
			<ul>
				<li>Packaged and delivered newspapers to customers daily</li>
				<li>Developed relationships with customers and knew them on a first name basis</li>
			</ul>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<h2>CS Skills</h2>
			<ul>
				<li>Adobe Creative Suite</li>
				<li>Amazon AWS</li>
				<li>C</li>
				<li>C++</li>
				<li>C#</li>
				<li>CSS</li>
				<li>Flask</li>
				<li>HTML</li>
				<li>Javascript</li>
				<li>Java</li>
				<li>Microsoft Office</li>
				<li>Open GL</li>
				<li>Perl</li>
				<li>PHP</li>
				<li>Python</li>
				<li>Ruby on Rails</li>
				<li>Server Deployment</li>
				<li>SQL</li>
				<li>Unity 3D</li>
				<li>UNIX/Linux</li>
				<li>Wordpress</li>
			</ul>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<hr>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10">
			<h2>Dreams/Goals</h2>
			<h3>Dream Job</h3>
			<ul>
				<li>Ability to work remotely.</li>
				<ul>
					<li>If not available: Located in Columbia, MO</li>
					<ul>
						<li>If not available: Located in Boulder, CO</li>
					</ul>
				</ul>
				<li>Ability to introduce my own project ideas</li>
				<li>Always learning something new</li>
				<li>Programming of some sort</li>
				<li>Health/Dental Insurance</li>
				<li>60-75K starting pay</li>
			</ul>
			<h3>Goals</h3>
			<ul>
				<li>Climb Mt. Everest</li>
				<li>Own my own business</li>
				<li>Improve my CS skills</li>
				<li>Travel and improve the world</li>
				<li>Plant lots of trees and plants</li>
			</ul>
		</div>
		<div class="col-lg-1"></div>
	</div>
	<div class="row">
		<div class="col-lg-1"></div>
		<div class="col-lg-10" id="center">
			<!-- <button class="btn-info">Contact Me/Request my Resume</button> -->
		</div>
		<div class="col-lg-1"></div>
	</div>
</div>
</body>
</html>