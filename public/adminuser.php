<html>
<head>
  <meta charset="UTF-8">
  <title>Database</title>
<!--   <link rel="stylesheet" href="styling.css">-->
  
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    

</head>
    <style>
.jumbotron{
  background-color: #808080;
  color: #02386E;
  padding: 100px 100px;
  font-family: Montserrat,sans-serif;
   background: url("madrid.jpg") no-repeat center center fixed ; 
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
 body {
  font-size: 28px;
}

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  position: -webkit-sticky; /* Safari */
  position: sticky;
  top: 0;
}

li {
  float: left;
}

li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: #111;
}

.active {
background-color:#0074D9;
}    
h2{
  font-size: 30px;
    font-weight: 800;
  color: #FFFFFF;
  text-transform: uppercase;
  font-weight: 300;
  text-align: center;
  margin-bottom: 15px;
}   
    p{
        color: #00264D;
    }
    
        body{
            background-color: #7FDBFF;
        }   
    

   
        
</style>
<div class="jumbotron text-center ">
 <br>
    <br><br><br>
</div> 
<body>

    

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "forum";

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
} 
?>
<!--        <h2>ENGLISH MATCH DATA</h2>-->
  <div class="container">
  <table class="table table-fixed">
      <thead>
        <tr>
             <th class="col-xs-1">ID</th>
      <th class="col-xs-5">NAME</th>
             <th class="col-xs-63">EMAIL</th>
      <th class="col-xs-3">CREATED_ON</th>
             <th class="col-xs-1">CONTRIBUTION</th>
             <th class="col-xs-3">OPTION</th>
      
         
     </tr>
  </thead>
  <tbody>
<?php
$sql = "SELECT * FROM users";
$result = $conn->query($sql);
if ($result->num_rows >0 ) {
    while($row = $result->fetch_assoc()) { 
        echo "<tbody>";
        echo "<tr>";
         echo "<td>" .$row["id"]. "</td>";
        echo "<td>" .$row["name"]. "</td>";
          echo "<td>" .$row["email"]. "</td>";
         echo "<td>" .$row["created_on"]. "</td>";
         echo "<td>" .$row["contribution"]. "</td>";  
       echo <td>
    <form action='delete.php?name="<?php echo $contact['name']; ?>"' method="post">
        <input type="hidden" name="name" value="<?php echo $contact['name']; ?>">
        <input type="submit" name="submit" value="Delete">."</td>";
        
         echo "</tr>";  
        echo "</tbody>";
    }
}else {
     echo "0 results";
 }    
?>
    </tbody>
      </table>
</div>
   </body>
</html>