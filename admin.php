<!DOCTYPE html>
<html>
<head>
<title>Admin Login</title>
<style>
body {
font-family: Arial, sans-serif;
background-image:url("https://images.unsplash.com/photo-1515847049296-a281d6401047?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
background-size:cover;
background-repeat: norepeat;
height: 100vh;
opacity: 0.8;
}
.login-container {
width: 400px;
margin: 0 auto;
margin-top: 150px;
background-color: #ffffff;
padding: 50px;
border-radius: 20px;
box-shadow: 0px 0px 5px
rgba(0, 0, 0, 0.3);
}
h1 {
text-align: center;
}
form {
margin-top: 20px;
}
input[type="text"],
input[type="password"] {
width: 100%;
padding: 10px;
margin-bottom: 10px;
border: 1px solid #ccc;
border-radius: 3px;
}
button[type="submit"] {
width: 100%;
padding: 10px;
background-color: #4CAF50;
color: #ffffff;
border: none;
border-radius: 3px;
cursor: pointer;
}
button[type="submit"]:hover
{
background-color: #45a049;
}
</style>
</head>
<body>
<div class="login-container">
<h1>Admin Login</h1>
<form id="login-form"
action="adminpanel.php"
method="post">
<input type="text"
name="username"
placeholder="Username">
<input type="password"
name="password"
placeholder="Password">
<button
type="submit">Login</button>
</form>
</div>
</body>
</html>