<!DOCTYPE html>
<html>
<head>
<title>Login page</title>
<style>
            body{
	            background: linear-gradient(rgba(0,0,25,0.5),rgba(0,0,25,0.5)),url(cms.jpg);
	            background-size:cover;
	            background-position:center;
    }
    </style>

</head>
<body>


<center><br><br>
<h3> Course Management system</h3><br><br>
<form action="" method="post">
<input type="submit" name="student_login" value="Student Login">
<input type="submit" name="admin_login" value="admin Login">
<input type="submit" name="Faculty_login" value="Faculty Login">
</form>





<?php
if (isset($_POST['student_login'])){
	header("Location: student_login.php");
}
if (isset($_POST['admin_login'])){
	header("Location: admin_login.php");
}

if (isset($_POST['Faculty_login'])){
	header("Location: faculty_login.php");
}

?>






</center>


</body>
</html>