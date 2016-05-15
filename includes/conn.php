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


$query = "SELECT * FROM db_book";
$result = mysqli_query($conn, $query);

?>

<table border="2">
<thead>
   <tr>
      <th>Book_id</th>
      <th>Title</th>
      <th>UnitPrice </th>
      <th>Author</th>
      <th>Quantity</th>
      <th>Supplier_id</th>
      <th>Subject_id</th>
    </tr>
</thead>
<tbody>

<?php

while ($row = mysqli_fetch_assoc($result))
echo "<tr><td>{$row['Book_id']}</td><td>{$row['Title']}</td><td>{$row['UnitPrice']}</td><td>{$row['Author']}</td><td>{$row['Quantity']}</td><td>{$row['Supplier_id']}</td><td>{$row['Subject_id']}</td></tr>"

?>

</tbody>
</table><br>
</body>
    </html>