<!DOCTYPE html>
<html>
<head>
<title>Ticket Booking</title>
<style>
	
	 body {
	 background-image:url("https://images.unsplash.com/photo-1567277239459-62eae97298de?q=80&w=2067&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
	 background-size: cover;
	 background-repeat: no-repeat;
	 background-position:center;
	 height: 1000px;
	 margin: 0;
	 position: relative;
	 
	}
	.wrapper {
 		min-height: 100%;
 		display: flex;
 		flex-direction: column;
 	}
/* Style the header */
	header {
		 background-color: #007bff;
		 color: #fff;
		 padding: 20px;
	}
	header h1 {
 		font-size: 28px;
		 padding: 20px;
		 font-family:Microsoft
		JhengHei UI;
	}
	nav ul {
		list-style-type: none;
 		margin: 0;
 		padding: 0;
	}
	nav ul li {
 		display: inline;
 		margin-right: 10px;
	}
	nav ul li a {
		 color: #fff;
		 text-decoration: none;
		 font-family:Microsoft
		 JhengHei UI;
	}
	li a:hover {
		background-color:darkblue;
	}
	form {
		width: 400px;
		margin: 0 auto;
		background-color: #fff;
		padding: 40px;
		box-shadow: 0px 2px 4px
		rgba(0, 0, 0, 0.3);
		background-color:black;
		opacity:0.8;
		margin-top:2rem;
		margin-bottom:3rem;
	}
	label {
		display: block;
		margin-bottom: 10px;
		color: yellow;
		font-size:16px;
	}
	input[type="text"],
	input[type="email"],
	input[type="tel"],
	select {
		width: 100%;
		padding: 10px;
		border-radius: 5px;
		border: none;
		box-shadow: 0px 1px 2px
		rgba(0, 0, 0, 0.3);
		margin-bottom: 20px;
		font-size: 16px;
	}
	input[type="submit"] {
		background-color: #2c3e50;
		color: #fff;
		border: none;
		border-radius: 5px;
		padding: 10px;
		font-size: 16px;
		cursor: pointer;
		transition: background-color
		0.3s ease;
	}
	input[type="submit"]:hover {
		background-color: green;
	}
	.info {
		margin-top: 40px;
		text-align: center;
		color: white;
		font-size: 17px;
	}
	h3 {
		font-size: 40px;
		color: darkblue;
		text-align: center;
		margin-bottom:
	}
	h4 {
		font-size: 40px;
		color: darkblue;
		text-align: center;
		margin-top: 2rem; /* Adjust
		the top margin */
		margin-bottom: rem; /*
		Adjust the bottom margin */
	}
	.doc {
		text-align:center;
		margin-bottom:3rem;
		font-family: Corbel;
	}
	footer {
		background-color: #007bff;
		color: #fff;
		padding: 1rem;
		text-align: center;
		margin-top:auto;
	}
	footer a{
		color: #fff;
		text-decoration: none;
		font-family:Franklin Gothic
		Medium;
	}
	footer p{
		font-family:Franklin Gothic
		Medium;
	}
	.seat {
		width: 50px;
		height: 50px;
		border: 1px solid #ccc;
		display: inline-block;
		margin: 5px;
		text-align: center;
		line-height: 50px;
		cursor: pointer;
	}
	.selected {
		background-color:green;
		color: #fff;
	}
	.unavailable {
		background-color:red;
		color: #fff;
		cursor: not-allowed;
	}
</style>
</head>
<body>
<div class="wrapper">
<header>
<h1>Book tickets at your
comfort</h1>
<nav>
<ul>
<li><a
href="homepage2.php">Home</
a></li>
<li><a
href="routes.php">Routes</
a></li>
<li><a
href="schedule.php">Schedule</a></li>
<li><a
href="ticketbooking.php">Tickets</a
></li>
<li><a
href="aboutus.php">About
Us</a></li>
<li><a href="logout.php"
onclick="return confirm('Are you sure you want to logout?">Log out</a></li>
</ul>
</nav>
</header>
<form method="post"
action="index2.php"
novalidate>
<label
for="name">Name:</label>
<input type="text"
id="name" name="name"
required>
<label
for="email">Email:</label>
<input type="email"
id="email" name="email"
required>
<label
for="phone">Phone:</label>
<input type="tel" id="phone"
name="phone" required>
<label
for="source">Source:</label
>
<select id="source"
name="source">
<option value="">--Select
Source--</option>
<option value="Rourkela">Rourkela</option>
<option value="Bhubaneswar">Bhubaneshwar</option>
<option value="Cuttack">Cuttack</option>
<option value="Paradeep">Paradeep</option>
<option value="Jajpur">Jajpur</option>
<option value="Koraput">Koraput</option>
</select>
<label
for="destination">Destination:</label>
<select id="destination"
name="destination">
<option value="">--Select
Destination--</option>
<option
value="Bhubaneshwar">
Bhubaneshwar</option>
<option
value="cuttack">Cuttack</op
tion>
<option
value="Koraput">Koraput</o
ption>
<option
value="Jajpur">Jajpur</optio
n>
<option
value="Paradeep">Paradeep
</option>
<option value="Rourkela">Rourkela</option>
</select>
<label for="selectbus">Select Bus:</label>
<select id="selectbus" name="selectbus">
<option value="">--Select
Bus--</option>
<option value="AC">OD-1206  |  AC  |  Rs860  |  RKL---BBSR</option>
<option value="VOLVO">OD-1206  |  VOLVO  |  Rs1200  |  RKL---BBSR</option>
<option value="NON-AC">OD-1888  |  NON-AC  |  Rs450  |  RKL---CTK</option>
<option value="VOLVO">OD-4590  |  NON-AC  |  Rs580  |  RKL---KPT</option>
<option value="AC">OD-7789  |  AC  |  Rs800  |  RKL---JJP</option>
<option value="AC">OD-1222  |  AC  |  Rs850  |  RKL---PRD</option>
<option value="VOLVO">OD-1222  |  VOLVO  |  Rs1150  |  RKL---PRD</option>
</select>

<br>
<label
for="date">Date:</label>
<input type="date" id="date"
name="date" required>
<br>
<br>
<center><input
type="submit" value="Book
now"></center>
</form>
<section>
<h3>Why book tickets online
?</h3>
<div class="meta">
<p class="doc">1) 24/7
availability for tickets across
anywhere in the
region.<br>2) Easy and
secure payment options
availabe for
customers.<br>3) Instant
booking confirmation
through emails or registered
phone number.<br>4) Ability
to choose seats and buses
according to your
wishes.<br>5) Access to
exclusive deals and discounts
by online payments.<br>6)
No need to carry physical
tickets e-tickets are available
through phone.</p>
</div>
</section>
<section class="namaste">
<h4>Why choose us ?</h4>
<div class="para">
<p class="doc">We have
kept the site simple for users
as much as possible by our
team.<br> Customers can
view every detail of the bus,
including updated pictures,
the type of bus and much
more, on our
website.<br>We offer
comfortable and affordable
bus services to various
destinations across
India.<br>Book your tickets
today and travel hassle-free.<br>Booking tickets online is
convenient and saves you time.<br>You can book tickets from
the comfort of your home or office without having to visit our
booking counters.<br>Additionally, you can easily compare
prices and choose from a range of available options.<br>So,
why wait in long queues? Book your tickets online today!</p>
</div>
</section>
<footer>
<div class="info">
<p>For more information, call us at +91-XXXXXXXXXX or email
us at busadmin@gmail.com</p>
<a href="feedback.php">@Feedback</a>
</div>
</footer>
</body>
</html>




