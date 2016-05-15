<!doctype html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <title>database connections</title>
    </head>
    <body>
<?php

$servername = "acadmysql.duc.auburn.edu";
$username = "azr0046";
$password = "calvin";
$dbname = "azr0046";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$query = "SELECT * FROM db_order";
$result = mysqli_query($conn, $query);

?>

<table border="2">
<thead>
   <tr>
      <th>orderid</th>
      <th>customerid</th>
      <th>Employee_id</th>
      <th>OrderDate</th>
      <th>Shippeddate</th>
      <th>Shipperid </th>
       </tr>
</thead>
<tbody>

<?php

while ($row = mysqli_fetch_assoc($result))
echo "<tr><td>{$row['orderid']}</td><td>{$row['customerid']}</td><td>{$row['Employee_id']}</td><td>{$row['OrderDate']}</td><td>{$row['Shippeddate']}</td><td>{$row['Shipperid']}</td></tr>"

?>

</tbody>
</table><br>
</body>
    </html>