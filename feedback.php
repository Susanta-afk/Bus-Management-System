<!DOCTYPE html>
<html>
<head>
<title>Feedback</title>
<style>
body {
background-image:url("https://images.unsplash.com/photo-1612538811009-ed19118a2b53?q=80&w=1974&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D");
background-repeat: norepeat;
background-size:cover;
opacity:0.9;
}
.container {
max-width: 500px;
margin: 0 auto;
padding: 20px;
}
form {
margin-top: 20px;
width: 600px;
margin: 10 auto;
background-color: #fff;
padding:40px;
box-shadow: 0px 2px 4px
rgba(0, 0, 0, 0.3);
}
label {
display: block;
margin-top: 10px;
font-size:16px;
font-family:Century Gothic;
}
input[type="text"],
input[type="email"],
select,
textarea {
width: 100%;
padding: 10px;
font-size: 16px;
border: 1px solid #ccc;
border-radius: 4px;
}
button[type="submit"] {
display: block;
width: 100%;
padding: 20px;
margin-top: 20px;
font-size: 19px;
background-color: #4CAF50;
color: white;
border: none;
border-radius: 4px;
cursor: pointer;
}
button[type="submit"]:hover
{
background-color: #45a049;
}
</style>
</head>
<body>
<div class="container">
<form method="post"
action="index3.php"
novalidate>
<label
for="name">Name:</label>
<input type="text"
id="name" name="name"
required><br>
<label
for="email">Email:</label>
<input type="email"
id="email" name="email"
required><br>
<label
for="rating">Rating:</label>
<select id="rating"
name="rating"
required><br>
<option value="" disabled
selected>Select
stars</option>
<option
value="5">5</option>
<option
value="4">4</option>
<option
value="3">3</option>
<option
value="2">2</option>
<option
value="1">1</option>
</select>
<label
for="comments">Comments:
</label>
<textarea id="comments"
name="comments"
required></textarea><br>
<button type="submit">Submit Feedback</button>
</form>
</div>
</body>
</html>