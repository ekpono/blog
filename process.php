

























<!DOCTYPE>
<html>
<head>
<title>PHP Project</title>
</head>
<body>

<?php
$connection = mysqli_connect("localhost", "root", "", "php_project");
if($connection === FALSE){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$db_select = mysqli_select_db($connection, 'php_project');
if (!$db_select) {
    die("Database selection failed: " . mysqli_error());
}
/*
if (!_$POST['name'] && !_$POST['email']){
   $msg = "fil the form";
}
*/
$email = mysqli_real_escape_string ($connection, $_REQUEST["email"]);
$name = mysqli_real_escape_string ($connection, $_REQUEST["name"]);

$sql = "INSERT INTO contacts (name, email) VALUES('$name', '$email')";

if (mysqli_query($connection, $sql)) { 
    echo "<p style=\"color:blue\"> Record added successfully.</p>";
    echo "<a href=\"index.php\">Return to Login</a>";
} else echo "ERROR: Could not able to execute $sql" . mysqli_error($connection);

mysqli_close($connection);

?>

</body>
</html>