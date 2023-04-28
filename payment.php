<!DOCTYPE html>

<head>
    
    <title>Payment</title>
	
	
    <?php 
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cms");
    ?>
	
 
	<style>
            body{
	            background: linear-gradient(rgba(0,0,25,0.5),rgba(0,0,25,0.5)),url(cms1.jpg);
	            background-size:cover;
	            background-position:center;
    }
    </style>    

</head>
<body>
<div id="header">
<center>payment</center>
<br><br><br><br>
<br><br><br><br>
<center>
<form action="" method="post">


            <table>
                <tr>
                    <td>
                        <input type="submit" name="Bkash" value="Bkash" >
                    </td>
                </tr>
				<tr>
                    <td>
                        <input type="submit" name="Rocket" value="Rocket" >
                    </td>
                </tr>
				<tr>
                    <td>
                        <input type="submit" name="payment_status" value="Payment Status" >
                    </td>
                </tr>
								<tr>
                    <td>
                        <input type="submit" name="payment_date" value="Payment Date" >
                    </td>
                </tr>
				<tr>
                    <td>
                        <input type="submit" name="go_back"  value="Go Back">
                    </td>
                </tr>


                
            </table>
        </form>
    <br><br><br><br>
	<br><br><br><br>
	
<?php 
       
     
if (isset($_POST['Bkash'])){
	header("Location: Bkash.php");
}


?>
	
<?php 
       
     
if (isset($_POST['Rocket'])){
	header("Location: rocket.php");
}


?>



<?php 
        if(isset($_POST['payment_status'])){
            ?>
            <center>
                <form action="" method="post" >
                    Enter Student ID:
                    <input type="text" name="id"  >
                    <input type="submit" name="search_by_student_id"  value="Search">
                </form>
				 </center>
				
           
            <?php
        }
	
            if(isset($_POST['search_by_student_id'])){
                $query ="select * from pay_status where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
					<tr>
                            <td><b>Student id : </b></td>
                            <td> <?php echo $row['id'];?></td>
                        </tr
                        <tr>
                            <td><b>Pay Status : </b></td>
                            <td> <?php echo $row['payment_status'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	

<?php 
        if(isset($_POST['payment_date'])){
            ?>
            <center>
                <form action="" method="post" >
                    Enter Student ID:
                    <input type="text" name="id"  >
                    <input type="submit" name="search_by_pay_id"  value="Search">
                </form>
				 </center>
				
           
            <?php
        }
	
            if(isset($_POST['search_by_pay_id'])){
                $query ="select * from pay_status where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
					<tr>
                            <td><b>Student id : </b></td>
                            <td> <?php echo $row['id'];?></td>
                        </tr
                        <tr>
                            <td><b>Paid Date: </b></td>
                            <td> <?php echo $row['last_date'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	









  
<?php 
       
     
if (isset($_POST['go_back'])){
	header("Location: student_dashboard.php");
}


?>

</center>
</body>
</html>