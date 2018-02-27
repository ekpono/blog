<!DOCTYPE>
<html>
<head>
<title>PHP Project</title>
<style>
div {
    font-size: 20px;
    font-weight: bold;
}
</style>
</head>
<body>
<div>
<caption><h2 style="color:red">Login</h2></caption>
<form method="POST" action="process.php">
    Name: <input type="name" name="name"><br><br>
    Email: <input type='email' name='email'><br><br>
    <button input type='submit' name='submit'>Submit</button>
    <button input type='reset' name='reset'>Reset</button>
</div>
</form>
<a href="list.php">List Saved Contacts </a>
</body>
</html>
