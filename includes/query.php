<?php 
session_start();
?>
<html>
<body>
<?php
$servername = "acadmysql.duc.auburn.edu";
$username = "azr0046";
$password = "calvin";
$dbname = "azr0046";

$sql=$_POST['sql'];

$drop="drop";
$bool=stripos($sql, $drop);
if($bool!==false)
{echo "You Cannot DROP Tables";}

else
{

$modified_sql_1=str_replace(";","",$sql);
$modified_sql=stripslashes($modified_sql_1);

$conn = mysql_connect($servername, $username, $password);

mysql_select_db('azr0046',$conn);

$result = mysql_query("$modified_sql");

 $_SESSION['error']=mysql_error();
echo $_SESSION['error'];

if ($_SESSION['error']=="")
{
// Print the column names as the headers of a table
echo "<br><table border='1'><tr>";
for($i = 0; $i < mysql_num_fields($result); $i++) 
{
    $field_info = mysql_fetch_field($result, $i);
    echo "<br><th>{$field_info->name}</th>";
}

// Print the data
while($row = mysql_fetch_row($result)) 
{
    echo "<tr>";
    foreach($row as $_column) 
    {
        echo "<td>{$_column}</td>";
    }
    echo "</tr>";
}
}
}
?>
<br>
<form action="query.php" method="post">
<label for="Query"> <br>Query: <br> </label>
<textarea name="sql" cols="100" rows="12">
<?php 
echo stripslashes($_POST['sql']);?>
</textarea>
<br>
<input type="submit"><br>
</form>

</body>
</html>