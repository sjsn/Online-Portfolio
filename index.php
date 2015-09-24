<!DOCTYPE html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="shortcut icon" href="http://students.washington.edu/sjsn/onlineportfolio/images/favicon.ico">
	<title>Samuel San Nicolas</title>
 	<script src="Chart.js"></script>
	<link rel="stylesheet" type="text/css" href="index.css" />
	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Ubuntu' rel='stylesheet' type='text/css'>
</head>

<body>
<section id="header">	
	<h1>Samuel San Nicolas</h1>
	<img src="images/sam_san_nicolas.jpg" alt="Samuel San Nicolas" height="175px" width="175px">
	<div id="contact">
		<a href="mailto:samuelsan3@gmail.com" target="_top">
			<img src="images/email.png" alt="email" height="40px" width="40px" id="nav">
		</a>
		<a href="https://github.com/sjsn">
			<img src="images/github.png" alt="email" height="40px" width="40px" id="nav">
		</a>
		<a href="https://www.linkedin.com/pub/samuel-san-nicolas/a6/190/bb4">
			<img src="images/linkedin.png" alt="email" height="40px" width="40px" id="nav">
		</a>
		<a id="hideText">
			<img src="images/Raspi.png" alt="raspberry pi" height="40px" width="40px" id="nav">
				<span id="showText">This website is hosted on a Raspberry Pi!</span>
		</a>
	</div>
	<div id="menu">
		<ul>
			<li><a href="#header">Home</a></li>
			<li><a href="#about">About</a></li>
			<li><a href="#workExperience">Work Experience</a></li>
			<li><a href="#resume">Resume</a></li>
		</ul>
	</div>
</section>
<section id="about">
	<div id="bio">
		<h3>About Me</h3>
		<p> Welcome to my online portfolio! My name is Samuel San Nicolas and I am a Junior at the <a href="http://www.washington.edu/"> University of Washington </a> 
			interested in studying Informatics with a minor in Entrepreneurship. I currently am an intern 
			at <a href="http://www.gototags.com">GoToTags</a> but am always looking for new opportunities. 
			I have passions for programming, building hardware, and <a href="http://youtube.com/CollegeDropoutsGaming">
			content creation</a>. 
	</div>
	<div id="interests">
		<div id="skills">
			<h4>Skills</h4>
			<canvas id="skillsChart" width="300px" height="300px"></canvas>
			<script type="text/javascript" src="index.js"></script>
		</div>
		<div id="hobbies">
			<h4>Hobbies</h4>
			<ul>
				<li>Running</li>
				<li>Game Development</li>
				<li>Mobile App Development</li>
				<li>YouTube Content Creation</li>
				<li>Game Developement</li>
			</ul>
		</div>
	</div>
</section>
<section id="workExperience">
	<h3>Work Experience</h3>
	<div id="job">
		<h4><a href="https://www.gototags.com">GoToTags</a></h4>
		<a href="https://www.gototags.com/">
			<img src="images/gototags-logo.png" alt="GoToTags Logo" height="125px" width="125px" id="got">
		</a>
		<h5>Intern</h5>
		<h6>10/2014 - Present</h6>
		<p>Powering the Internet of Things (IoT) with hardware and software solutions that enable NFC, RF, BLE, and QR technologies.</p>
	</div>
	<div id="job">
		<h4><a href="http://www.digivations.com/">Digivations</a></h4>
		<a href="http://www.digivations.com/">
			<img src="images/digivations_logo.png" alt="Digivations Logo" height="117px" width="172px" id="dig">
		</a>
		<h5>Instructor/Counselor</h5>
		<h6>6/2014 - 9/2014</h6>
		<p>Inspiring world building and innovation through their STEM + Arts + Movement curriculum.</p>
	</div>
	<div id="job">
		<a href="mailto:samuelsan3@gmail.com" target="_top">
			<img src="images/plus.png" height="128px" width="128px" id="new">
		</a>
		<h4 id="next"><a href="mailto:samuelsan3@gmail.com" target="_top">Next?</a></h4>
		<p>I am always seeking new opportunities and adventures! Do you have something that might interest me? Let me know here!</p>
	</div>
</section>
<section id="resume">
	<h3>Resume</h3>
	<div id="imgHolder">
		<a href="images/Sam_San_Nicolas_Resume.pdf" type="_parent">
			<img src="images/Sam_San_Nicolas_Resume.jpg" height="100%" width="110%">
		</a>
	</div>
</section>
</body>
</html>