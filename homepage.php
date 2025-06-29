<!DOCTYPE html>
<html>
<head>
 <title>Bus Management
System</title>
<style>
/* Reset some default styles
*/
body, h1, h2, p {
 margin: 0;
 padding: 0;
}
/* Set some default styles for
the page */
body {
 font-family: Arial, sans-serif;
 background-image:url("https://images.unsplash.com/photo-1509749837427-ac94a2553d0e?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
 background-repeat: no-repeat;
 color: #333;
 display: flex;
 flex-direction: column;
 height: 100vh;
 background-size:cover;
}
.container {
 max-width: 960px;
 margin: 0 auto;
 padding: 20px;
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
/* Style the welcome section
*/
.welcome-section {
 flex: 1;
 display: flex;
 justify-content: center;
 align-items: center;
}
.message-box {
 background-color: #fff;
 padding: 20px;
 text-align: center;
 max-width: 800px;
 opacity:0.9;
}
.message-box h2 {
 font-size: 24px;
 margin-bottom: 10px;
}
.message-box p {
 font-size: 17px;
}
/* Style the footer */
footer {
 background-color: #007bff;
 color: #fff;
 padding: 20px;
 text-align: center;
}
footer a{color: #fff;
 text-decoration: none;
font-family:Franklin
Gothic Medium;
 }
footer p{
 font-family:Franklin Gothic
Medium;
}
</style>
</head>
<body>
 <header>
 <h1>Radha Krishna Tours & Travels</h1>
 <nav>
 <ul>
 <li><a
href="homepage.php">Home</
a></li>
<li><a
href="index.php">Login/Signup</
a></li>
 <li><a
href="routesofbus.php">Routes</
a></li>
 <li><a
href="schedule.php">Schedule</a></li>
 <li><a
href="ticketbooking.php">Tickets</a
></li>
 <li><a
href="aboutus.php">About
Us</a></li>
 </ul>
 </nav>
 </header>
 <section class="welcome-section">
 <div class="message-box">
 <i><h2 style="font-size:29px; font-family:Microsoft JhengHei">Welcome to
Radha Krishna Tours & Travels</h2></i>
 <p>This is a bus ticketbooking system for all your
journey related to bus.</p>
 <p>This site allows you
to:</p>
 <br>
 <br>
 <ul>
 <li>View available bus
routes</li>
 <li>Check the schedule of
buses</li>
 <li>Buy bus tickets
online</li>
 <li>And more!</li>
 </ul>
<br>
<br>
 <p>Please use the
<strong>navigation
links</strong> above to get
started.</p>
 <p>Thank you for visiting
us online.</p>
 <p>We wish you happy
and comfort journey for your
trip with us.</p>
 </div>
 </section>
 <footer>
 <p>© 2024 Bus
Management System.All
rights reserved</p>
 <br>
 <a
href="tandc.php">@Terms
and conditions</a>
 <br>
 <br>
<p>&copy;For problems
reach us:</p>
 <br>
<p>email:
busadmin@gmail.com</p>
<p>ROURKELA,Odisha,Pin-769014</p>
 </footer>
</body>
</html>