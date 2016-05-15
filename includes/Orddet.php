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


$query = "SELECT * FROM db_orderdetail";
$result = mysqli_query($conn, $query);

?>

<table border="2">
<thead>
   <tr>
      <th>Bookid</th>
      <th>Orderid</th>
      <th>Quantity</th>
       </tr>
</thead>
<tbody>

<?php

while ($row = mysqli_fetch_assoc($result))
echo "<tr><td>{$row['Bookid']}</td><td>{$row['Orderid']}</td><td>{$row['Quantity']}</td></tr>"

?>

</tbody>
</table><br>
</body>
    </html>