<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bkash Payment</title>
  <style>
            body{
	            background: linear-gradient(rgba(0,0,25,0.5),rgba(0,0,25,0.5)),url(cms1.jpg);
	            background-size:cover;
	            background-position:center;
    }
    </style> 
    
  
    
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
		
				</form><br> 
<form action="" method="post">


            <table>	
<tr>
                    <td>
                        <input type="submit" name="go_back"  value="Go Back">
                    </td>
                </tr>
            </table>
        </form>	
			
<?php 
        if(isset($_POST['submit'])){
			
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into paymenttwo values('$_POST[StudentName]','$_POST[StudentID]','$_POST[StudentDepartment]','$_POST[Totalfee]')";
        $query_run = mysqli_query($connection,$query);
		}
?>
            
          
   
<?php 
       
     
if (isset($_POST['go_back'])){
	header("Location: payment.php");
}


?>           
     
	</center>	

</body>
</html>