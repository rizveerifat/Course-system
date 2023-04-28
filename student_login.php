<!DOCTYPE html>
<html lang="en">
<head>
  <title>Student Login</title>
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
    

                <h3 >Student Login Page</h3><br>
                <form action="" method="post" >
                Email : <input type="text"  name="email" required> <br> <br>
                Password :<input type="password" " name="password" required> <br> <br>
                <input type="submit"  name="Login" required>
                </form> <br>   

        <?php 
            if(isset($_POST['Login'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"cms");
                $query ="select * from student where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email']== $_POST['email']){
                        if($row['password']==$_POST['password']){
                            header("Location: student_dashboard.php");
                        }
                        else{
                            echo "Wrong Password";
                        }
                    }
                    else{
                        echo "Wrong Email";
                    }
                }
            }
        ?>
    


</body>
</html>