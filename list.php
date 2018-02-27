<?php
$connection = mysqli_connect("localhost", "root", "", "php_project");
if($connection === FALSE){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}   

$db_select = mysqli_select_db($connection, 'php_project');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
$query = "SELECT * FROM contacts";
$query_result = mysqli_query($connection, $query);

echo "<table border=1><caption>LIST OF REGISTERED NAMES</caption>";

while ($row = mysqli_fetch_array($query_result)){
    echo "<tr><td>" . $row['id'] . "</td>" .
    "<td>" . $row['name'] . "</td>".
    "<td>" . $row['email'] . "</td></tr>";
}
echo "</table>";
mysqli_close($connection);
?>