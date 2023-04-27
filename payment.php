<!DOCTYPE html>

<head>
    
    <title>Payment</title>
    

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

</center>
</body>
</html>