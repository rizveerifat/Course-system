<!DOCTYPE html>
<html lang="en">
<head>
  <title>Rocket Payment</title>
    
</head>
<body>
<center><br><br>
    

                <h3 >Rocket</h3><br>
				<form action="" method="post">
			StudentName: <input type="text" name="StudentName" required><br><br>
			StudentID: <input type="number" name="StudentID" required><br><br>
			StudentDepartment: <input type="text" name="StudentDepartment" required><br><br>
			
		
			<input type="submit" name="submit" value="Submit">
		</form><br>
               
        <?php 
            if(isset($_POST['submit'])){
                $connection = mysqli_connect("localhost","root","");
                $db = mysqli_select_db($connection,"cms");
                $query = "select * from paymentone where StudentName= '$_POST[StudentName]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    if($row['StudentName']== $_POST['StudentName']){
                        if($row['StudentID']==$_POST['StudentID']){
                            header("Location: rocket_pay.php");
                        }
                        else{
                            echo "Wrong info ";
                        }
                    }
                    else{
                        echo "Wrong info";
                    }
                }
            }
        ?>
    


</body>
</html>