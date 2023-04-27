<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bkash Payment</title>
  
    
</head>
<body>
<center><br><br>

    

                <h3 >Bkash</h3><br>
				<form action="" method="post">
			StudentName: <input type="text" name="StudentName" required><br><br>
			StudentID: <input type="text" name="StudentID" required><br><br>
			StudentDepartment: <input type="text" name="StudentDepartment" required><br><br>
			Totalfee: <input type="text" name="Totalfee" required><br><br>
			
		
			<input type="submit" name="submit" value="submit">
		</form><br>   
			
<?php 
        if(isset($_POST['submit'])){
			
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into paymentone values('$_POST[StudentName]','$_POST[StudentID]','$_POST[StudentDepartment]','$_POST[Totalfee]')";
        $query_run = mysqli_query($connection,$query);
		}
?>
            
          
            
     
	</center>	

</body>
</html>