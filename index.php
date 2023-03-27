<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
</head>
<body>

<center><br><br>
<h3> Course Management system</h3><br><br>
<form action="" method="post">
<input type="submit" name="student_login" value="Student Login">
<input type="submit" name="admin_login" value="admin Login">
</form>
<?php
if (isset($_POST['student_login'])){
	header("Location: student_login.php");
}
if (isset($_POST['admin_login'])){
	header("Location: admin_login.php");
}


?>






</center>


</body>
</html>