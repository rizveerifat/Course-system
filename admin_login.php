<!DOCTYPE html>
<html lang="en">
<head>
  <title>Admin Login</title>
    
</head>
<body>
<center><br><br>
    

                <h3 >Admin Login Page</h3><br>
                <form action="" method="post" >
                Email : <input type="text"  name="email" required> <br> <br>
                Password :<input type="password" " name="password" required> <br> <br>
                <input type="submit"  name="Login" required>
                </form> <br>   

        <?php 
            if(isset($_POST['Login'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"cms");
                $query ="select * from login where email = '$_POST[email]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['email']== $_POST['email']){
                        if($row['password']==$_POST['password']){
                            header("Location: admin_dashboard.php");
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