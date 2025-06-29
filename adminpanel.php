<!DOCTYPE html>
<html>
<head>
<title>Admin Panel</title>
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
body {
font-family: Arial, sans-serif;
background-image:url("https://plus.unsplash.com/premium_photo-1661757054641-6c81e8931a03?q=80&w=1932&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
background-repeat: norepeat;
color: #333;
display: flex;
flex-direction: column;
height: 100vh;
background-size:cover;
}
body {
display: flex;
flex-direction: column;
min-height: 100vh;
}
.container {
max-width: 960px;
margin: 0 auto;
padding: 20px;
flex: 1;
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
font-family: Microsoft
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
font-family: Microsoft
JhengHei UI;
}
li a:hover {
background-color: black;
}
footer {
background-color: #007bff;
color: #fff;
padding: 20px;
text-align: center;
}
footer p{
font-family:Franklin Gothic
Medium;
}
</style>
</head>
<body>
<header>
<h1>Welcome to the Admin
Panel</h1>
<nav>
<ul>
<li><a
href="dashboard.php">Dash
board</a></li>
<li><a
href="schedule.php">Change
Schedule</a></li>
<li><a
href="routesofbus.php">Manage
Routes</a></li>
<li><a
href="accounts.php">User
Accounts</a></li>
<li><a
href="feedback.php">Feedback System</a></li>
<li><a
href="aboutus.php">Logout
</a></li>
</ul>
</nav>
</header>
<div class="container">
<!-- Content of the admin
panel will go here -->
</div>
<footer>
<p>&copy; 2024,Bus
Management System.All
rights reserved</p>
<br>
<p>&copy; 2024 Admin
Panel. All rights
reserved.</p>
</footer>
</body>
</html>		