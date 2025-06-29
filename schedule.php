<!DOCTYPE html>
<html>
<head>
 <title>Schedule</title>
 <style>
 html,
 body {
 height: 100%;
 margin: 0;
 padding: 0;
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
li a:hover
{
background-color:darkblue;
}
main
{
padding: 1rem;
 flex-grow: 1;
}
table {
 width: 60%;
 border-collapse:collapse;
 margin-left: 28rem;
 margin-left: auto;
 margin-right: auto
 }
th;
 td {
 border: 1px solid
#ddd;
 padding: 8px;
 text-align: left;
 }
th {
background-color: #f2f2f2;
 }
 footer {
 background-color:#007bff;
 color: #fff;
 padding: 1rem;
 text-align: center;
 margin-top: auto;
 }
/* styling for search and filter
options */
.container {
 display: flex;
 align-items: center;
 justify-content: flex-end;
 background-color: darkblue;
 padding: 1rem;
}
#search-box,
#filter-by,
button {
padding: 0.5rem;
border: 1px solid #333;
border-radius: 0.25rem;
margin-right: 1rem;
font-size: 1rem;
background-color: white;
}
#search-box:focus,
#filter-by:focus,
button:focus {
outline: none;
box-shadow: 0 0 0 2px #ccc;
}
label {
margin-right: 0.5rem;
font-size: 20px;
color: white;
font-family: Arial narrow;
}
marquee
{
color:red;
font-size:90px;
}
h3 {
 font-size: 40px;
 color: darkblue;
 text-align:center;
 margin-bottom:
}
h4 {
 font-size: 40px;
 color: darkblue;
 text-align: center;
 margin-top: 2rem; /*
Adjust the top margin */
 margin-bottom: rem; /*
Adjust the bottom margin */
}
.der
{
text-align:center;
margin-bottom:3rem;
font-family: Corbel;
}
footer p{
 font-family:Franklin Gothic
Medium;
}
</style>
</head>
<body>
 <div class="wrapper">
 <header>
 <h1>TIMINGS</h1>
 <nav>
 <ul>
 <li><a href="homepage2.php">Home</a></li>
 <li><a href="routesofbus.php">Routes</a></li>
 <li><a
href="schedule.php">Schedule</a></li>
 <li><a
href="ticketbooking.php">Tickets</a></li>
 <li><a
href="aboutus.php">About
Us</a></li>
<li><a href="logout.php"
onclick="return confirm('Are
you sure you want to log
out?">Log out</a></li>
 </ul>
 </nav>
 </header>
<main>

<center><h2>SCHEDULE</h2></center>
 <table>
 <thead>
 <tr>
 <th>Bus Number</th>
 <th>Route</th>
 <th>Departure Time</th>
 <th>Arrival Time</th>
 </tr>
 </thead>
 <tr>
  <td>1</td>
  <td>Rourkela - Bhubaneshwar</td>
  <td>9:30 PM</td>
  <td>6:30 AM</td>
 </tr>
 <tr>
 <td>2</td>
 <td>Rourkela - Cuttack</td>
 <td>8:20 PM</td>
 <td>5:30 AM</td>
 </tr>
 <tr>
 <td>3</td>
 <td>Rourkela - Koraput</td>
 <td>1:30 PM</td>
 <td>7:00 PM</td>
 </tr>
 <tr>
 <td>4</td>
 <td>Rourkela - Jajpur </td>
 <td>8:00 PM</td>
 <td>5:00 AM</td>
 </tr>
 <tr>
 <td>5</td>
 <td>Rourkela - Paradeep</td>
 <td>7:00 PM</td>
 <td>5:00 AM</td>
 </tr>
 </table>
 </main>
<section class="nam">
<div class ="get">
<h3>How to stay updated
with your bus timings?</h3>
<p class="der">Schedule gets
updated everytime for
desired
locations.<br>Schedule gets
updated everyday for the
current routes.<br>Track
your bus departure and
arrival time easily.<br>Stay
updated everytime with
us.</p>
</div>
</section>
<section>
<div>
<h4>How to get more of
us?</h4>
<p class="der">Get the realtime updates regarding your
journey.<br>This page
informs any delays if
happens.<br>So you can get
to know about
it.<br>Customer service is
what we look for.<br>We
hope you have a good trip
while travelling with us.</p>
</div>
</section>
<footer>
 <p>© 2024 Bus
Management System. All
rights reserved.</p>
 <p>&copy;For problems
reach us:</p>
 <p>email: busadmin@gmail.com</p>
 </footer>
</body>
</html>
