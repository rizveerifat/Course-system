<!DOCTYPE html>

<head>
    
    <title>Faculty</title>
    
    
    <?php 
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cms");
    ?>
</head>
<body>
<div id="header">
<center>Faculty Panel</center>
<br><br><br><br><br><br>
<center>
<form action="" method="post">


            <table>
                <tr>
                    <td>
                        <input type="submit" name="Assigned_course" value="Assigned_course" >
                    </td>
                </tr>
				<br>
				<tr>
                    <td>
                        <input type="submit" name="see_student_details" value="see_student_details" >
                    </td>
                </tr>
				<tr>
                    <td>
                        <input type="submit" name="rating_check" value="rating_check" >
                    </td>
                </tr>
				
                <tr>
                    <td>
                        <input type="submit" name="add_details" value="add_details">
                    </td>
                </tr>
</table>
</form>

<br><br><br><br><br>


<?php 
        if(isset($_POST['Assigned_course'])){
            ?>
            <center>
                <form action="" method="post" >
                    Enter Faculty ID:
                    <input type="text" name="id"  >
                    <input type="submit" name="search_by_faculty_id"  value="Search">
                </form>
				 </center>
				
           
            <?php
        }
	
            if(isset($_POST['search_by_faculty_id'])){
                $query ="select * from faculty_course where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
                        <tr>
                            <td><b>Faculty Name : </b></td>
                            <td> <?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>First Course Assigned : </b></td>
                            <td><?php echo $row['course_one'];?></td>
                        </tr>
                        <tr>
                            <td><b>Second Course Assigned: </b></td>
                            <td><?php echo $row['course_two'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	
<br><br>

<?php 
        if(isset($_POST['see_student_details'])){
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
                $query ="select * from student_details where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
					<tr>
                            <td><b>Student id : </b></td>
                            <td> <?php echo $row['id'];?></td>
                        </tr
                        <tr>
                            <td><b>Student Name : </b></td>
                            <td> <?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>Father Name: </b></td>
                            <td><?php echo $row['father'];?></td>
                        </tr>
                        <tr>
                            <td><b>Mother Name: </b></td>
                            <td><?php echo $row['mother'];?></td>
                        </tr>
						
						<tr>
                            <td><b>House Number: </b></td>
                            <td><?php echo $row['house'];?></td>
                        </tr>
						<tr>
                            <td><b>Mobile: </b></td>
                            <td><?php echo $row['mobile'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	



<?php 
        if(isset($_POST['update_details'])){
            ?>
            <center>
			<form action="" method="post">
                <form action="" method="post" >
                    Enter Faculty Id:
                    <input type="text" name="id" >
                    <input type="submit" name="update"  value="Search">
                </form>
            </center>
            <?php
        }
            if(isset($_POST['update'])){
                $query ="select * from faculty_details where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="update_faculty.php" method="post">
                    <table>
                        <tr>
                            <td><b>id : </b></td>
                            <td><input type="text" name="faculty_id" value="<?php echo $row['id'];?>"></td>
                        </tr>
                        <tr>
                            <td><b> Name : </b></td>
                            <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                        </tr>
                        <tr>
                            <td><b>email : </b></td>
                            <td><input type="text" name="email" value="<?php echo $row['email'];?>"></td>
                        </tr>
                        <tr>
                            <td><b>Mobile : </b></td>
                            <td><input type="text" name="mobile" value="<?php echo $row['mobile'];?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="save"  value="save"></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                }
            }
    ?>
    


<?php 
        if(isset($_POST['add_details'])){
            ?>
            <center><h4>Fill up the given fields : </h4>
            <form action="add_details.php" method="post">
            <table>
                        <tr>
                            <td><b>Faculty id : </b></td>
                            <td><input type="text" name="code" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Faculty Name : </b></td>
                            <td><input type="text" name="name" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Faculty Email : </b></td>
                            <td><input type="text" name="credit" value=""></td>
                        </tr>
                        <tr>
                            <td><b>mobile: </b></td>
                            <td><input type="text" name="faculty" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit"  value="Add "></td>
                        </tr>
                    </table>
					</center>
            </form>
            <?php
        }
    ?>




<?php 
        if(isset($_POST['rating_check'])){
            ?>
            <center>
                <form action="" method="post" >
                    Enter Faculty ID:
                    <input type="text" name="id"  >
                    <input type="submit" name="search_by_id"  value="Search">
                </form>
				 </center>
				
           
            <?php
        }
	
            if(isset($_POST['search_by_id'])){
                $query ="select * from rating where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
					<tr>
                            <td><b>Faculty id : </b></td>
                            <td> <?php echo $row['id'];?></td>
                        </tr
                        <tr>
                            <td><b>Faculty Name : </b></td>
                            <td> <?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>Department: </b></td>
                            <td><?php echo $row['department'];?></td>
                        </tr>
						
						<tr>
                            <td><b>Course: </b></td>
                            <td><?php echo $row['course'];?></td>
                        </tr>
                        <tr>
                            <td><b>Rating: </b></td>
                            <td><?php echo $row['rating'];?></td>
                        </tr>
						
						<tr>
                            <td><b>Comment: </b></td>
                            <td><?php echo $row['comments'];?></td>
                        </tr>
						<tr>
                            <td><b>Id of the student who rated: </b></td>
                            <td><?php echo $row['student_id'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	








<center>
</body>
</html>