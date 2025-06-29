<!DOCTYPE html>
<html>
<head>
 <title>Routes</title>

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
background-color: white;
 }
 /* Style the header */
 header {
 background-color:
#007bff;
 color: #fff;
 padding: 20px;
 }
 header h1 {
 font-size: 28px;
 padding: 20px;
 font-family: "Gill Sans", sans-serif;
 }
 
 nav ul { list-style-type: none;
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
li a:hover
 background-color:
darkblue;
 }
 main { padding: 1rem;
 flex-grow: 1;
overflow:
auto;
 }
 table {
 width: 60%;
 border-collapse:
collapse;
 margin-left: 28rem;
 margin-left: auto;
 margin-right: auto
 }
th,
 td {
 border: 1px solid
#ddd;
 padding: 8px;
 text-align: left;
}
 th {
 background-color:
#f2f2f2;
 }
 footer {
 background-color:
#007bff;
 color: #fff;
 padding: 1rem;
 text-align: center;
 margin-top: auto;
 }
 footer p {
 font-family: Franklin
Gothic Medium;
 }
/* styling for search and
filter options */
.container {
 display: flex;
 align-items: center;
 justify-content: flexend;
 background-color:
darkblue;
 padding: 1rem;
 }
 #search-box,
 #filter-by,
 button {
 padding: 0.5rem;
 border: 1px solid
#333;
 border-radius:
0.25rem;
 margin-right: 1rem;
 font-size: 1rem;
background-color:
white;
 }
 #search-box:focus,
 #filter-by:focus,
 button:focus {
 outline: none;
 box-shadow: 0 0 0 2px
#ccc;
 }
 label {
 margin-right: 0.5rem;
 font-size: 20px;
 color: white;
 font-family: Arial
narrow;
 }
 /* Adjust the margins
and spacing between
headings */
h2 {
 font-size: 40px;
 color: darkblue;
 text-align: center;
 margin-top: 2rem; /*
Adjust the top margin */
 margin-bottom: 2rem; /*
Adjust the bottom margin */
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
margin-top: 2rem; /*
Adjust the top margin */
 margin-bottom: rem; /*
Adjust the bottom margin */
}
.dore
{
text-align:center;
margin-bottom:3rem;
font-family: Corbel;
}
 </style>
</head>
<body>
 <div class="wrapper">
 <header>
<h1>Radha Krishna Tours & travels</h1>
 <h2 allign=left>Plan your trip now :)</h2>
 <nav>
<ul>
 <li><a
href="ourpage.php">Home</
a></li>
 <li><a
href="routes.php">Routes</
a></li>
 <li><a
href="schedule.php">Schedule</a></li>
 <li><a
href="ticketbooking.php">Tickets</a
></li>
 <li><a href="aboutus.php">About
Us</a></li>
 
 <li><a
href="logout.php"
onclick="return confirm('Are you sure you want to log
out?')">Log out</a></li>
 </ul>
 </nav>
 </header>
 
 <main>
 <h2>Routes our buses
travel</h2>
<table id="routes-table">
<tr>
 <th>Bus Number</th>
 <th>Bus Type</th>
 <th>Starting Point</th>
<th>Ending Point</th>
 <th>Stops</th>
 <th>Fare</th>
 </tr>
 <tr>
<td>OD-1206</td>
<td>AC</td>
<td>Rourkela</td>
<td>Bhubaneswar</td>
 <td>Talcher</td>
 <td>Rs.860</td>
 </tr>
  <tr>
<td>OD-1206</td>
<td>VOLVO</td>
<td>Rourkela</td>
<td>Bhubaneswar</td>
 <td>Talcher</td>
 <td>Rs.1200</td>
 </tr>
 <tr>
 <td>OD-1888</td>
<td>NON-AC</td>
 <td>Rourkela</td>
 <td>Cuttack</td>
 <td>Barkot</td>
 <td>Rs.450</td>
 </tr>
 <tr>
 <td>OD-4590</td>
<td>NON-AC</td>
 <td>Rourkela</td>
 <td>Koraput</td>
<td>Sundergarh</td>
 <td>Rs.580</td>
</tr>
 <tr>
 <td>OD-7789</td>
 <td>AC</td>
 <td>Rourkela</td>
 <td>Jajpur</td>
 <td>Pallahra</td>
 <td>Rs.800</td>
 </tr>
 <tr>
 <td>OD-1222</td>
<td>AC</td>
 <td>Rourkela</td>
 <td>Paradeep</td>
<td>Lahunipada</td>
 <td>Rs.850</td>
 </tr>
 <tr>
 <td>OD-1222</td>
<td>VOLVO</td>
 <td>Rourkela</td>
 <td>Paradeep</td>
<td>Lahunipada</td>
 <td>Rs.1150</td>
 </tr>
 <tr>
 <td>NA</td>
<td>NA</td>
 <td>Rourkela</td>
<td>updating
soon</td>
 <td>updating
soon</td>
 <td>updating
soon</td>
 </tr>
 <tr>
 <td>NA</td>
<td>NA</td>
<td>Rourkela</td>
 <td>updating
soon</td>
 <td>updating
soon</td>
 <td>updating
soon</td>
 </tr>
 <tr>
 <td>NA</td>
<td>NA</td>
<td>Rourkela</td>
 <td>updating
soon</td>
 <td>updating
soon</td>
 <td>updating
soon</td>
 </tr>
 </table>
 </main>

 <script>
 function filterRoutes()
{
 // Get the input and
select elements
 const searchBox =
document.getElementById('s
earch-box');
const filterBy =
document.getElementById('fi
lter-by');

 // Get the table and
rows
 const routesTable =
document.getElementById('r
outes-table');
 const rows =
routesTable.getElementsByT
agName('tr');

 // Loop through all
rows and hide those that do
not match the search query
 for (let i = 1; i <
rows.length; i++) {
 const cells =rows[i].getElementsByTagName('td');
 let match = false;
for (let j = 0; j <
cells.length; j++) {
 const cell =
cells[j];
 const
filterValue = filterBy.value;
 const cellValue
=
cell.textContent.toLowerCase();
 const
searchValue =
searchBox.value.toLowerCase();
 if (filterValue=== 'starting-point' && cellValue.startsWith(searchValue)) {
 match = true;
 } else if
(filterValue === 'endingpoint' && cellValue.endsWith(searchValue)) {
 match = true;
 } else if
(filterValue === 'stops' && cellValue.includes(searchValue)) {
 match = true;
 }
 }
 if (match) {

rows[i].style.display = '';
 } else {

rows[i].style.display = 'none';
 }
 }
 }
 </script>
<section class="more">
 <div class="rag">
 <h3>How we
provide routes to you?</h3>
 <p class="dore">Our
buses move across the state
of Odisha only.<br>This
routes are solely dependent
on the admin of this
site.<br>We cover some
desired routes till
now.<br>More routes will be
updated very
soon.<br>Select the desired
travel destination from the
ticket booking page.</p>
 </div>
 </section>

 <section class="coll">
 <div class="blor">
<h4>Our policies
regarding the price and
payment</h4>
 <p
class="dore">Prices for the
above routes displayed are
fixed.<br>No reduction in
price policies for any
users.<br>Payment must be
carried out through any
payment apps or
UPI.<br>Your private data is
taken care of by our
management
team.<br>Cancellation of
tickets charges 10% of the
actual paid price.<br></p>
 </div>
<p>© 2023 Bus Management
System. All rights reserved.</p>
</section>
<p>&copy;For problems
reach us:</p>
 <p>email:
busadmin@gmail.com</p>
 </footer>

 </div>
</body>
</html>

