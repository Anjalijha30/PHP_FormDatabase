<!DOCTYPE html>
<html>
<head>
<title>PHP Database Connectivity</title>

</head>
<body>
<h2>Insert Data In Database Using PHP.</h2>
<form action="dbConn.php" method="post">
<!-- Method can be set as POST for hiding values in URL-->
<h2>Data Form</h2>
<label>Name:</label>
<input class="input" name="name" type="text" value=""><br><br>
<label>Email:</label>
<input class="input" name="email" type="text" value=""><br><br>
<label>Contact:</label>
<input class="input" name="contact" type="text" value=""><br><br>
<label>Address:</label>
<textarea cols="25" name="address" rows="2"></textarea><br><br><br>
<input class="submit" name="submit" type="submit" value="Insert">
</form>
</body>
</html>
