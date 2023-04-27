<!DOCTYPE html>

<head>
    
    <title>Student Dashboard</title>
    
    
    <?php 
    session_start();
    $connection = mysqli_connect("localhost","root","");
    $db = mysqli_select_db($connection,"cms");
    ?>
</head>
<body>

<center>Student Panel</center><br><br><br><br><br>

<br><br><br><br><br>
<center>

<form action="" method="post">


            <table>
                <tr>
                    <td>
                        <input type="submit" name="search_course" value="Search Course" >
                    </td>
                </tr>

               

                <tr>
                    <td>
                        <input type="submit" name="add_course" value="Add Course">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="delete_course" value="Delete Course">
                    </td>
                </tr>
               
                <tr>
                    <td>
                        <input type="submit" name="faculty_details" value="Faculty Details">
                    </td>
                </tr>
				<tr>
                    <td>
                        <input type="submit" name="student_rating" value="Student Rating">
                    </td>
                </tr>
				
                
                <tr>
                    <td>
                        <input type="submit" name="pay" value="Payment">
                    </td>
                </tr>  
                <tr>
                    <td>
                        <input type="submit" name="performance" value="performance">
                    </td>
                </tr>    				
            </table>
        </form>
    <br><br><br><br><br>

    <?php 
        if(isset($_POST['search_course'])){
            ?>
            <center>
                <form action="" method="post" >
                    Enter Course Code:
                    <input type="text" name="course_code"  >
                    <input type="submit" name="search_by_course_code_for_search"  value="Search">
                </form>
				 </center>
				
           
            <?php
        }
	
            if(isset($_POST['search_by_course_code_for_search'])){
                $query ="select * from courses where course_code = '$_POST[course_code]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
                        <tr>
                            <td><b>Course Code : </b></td>
                            <td> <?php echo $row['course_code'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Name : </b></td>
                            <td><?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Credit : </b></td>
                            <td><?php echo $row['credit'];?></td>
                        </tr>
                        <tr>
                            <td><b>Course Faculty : </b></td>
                            <td><?php echo $row['faculty'];?></td>
                        </tr>
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	


    

    <?php 
        if(isset($_POST['add_course'])){
            ?>
            <center><h4>Fill up the given fields : </h4>
            <form action="add_course.php" method="post">
            <table>
                        <tr>
                            <td><b>Course Code : </b></td>
                            <td><input type="text" name="code" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Course Name : </b></td>
                            <td><input type="text" name="name" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Course Credit : </b></td>
                            <td><input type="text" name="credit" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Course Faculty : </b></td>
                            <td><input type="text" name="faculty" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit"  value="Add Course"></td>
                        </tr>
                    </table>
					</center>
            </form>
            <?php
        }
    ?>

    <?php 
        if(isset($_POST['delete_course'])){
            ?>
            <center>
                <form action="delete_course.php" method="post">
                    Enter Course Code
                    <input type="text" name="code"><br>
                    <input type="submit" name="search_by_course_code_for_delete" 
                      value="Delete Course">
                </form>
            </center>
            <?php
        }
    ?>




<?php 
        if(isset($_POST['faculty_details'])){
            ?>
            <div>
                <form action="" method="post" >
                    Enter Faculty ID:
                    <input type="text" name="faculty_id"  >
                    <input type="submit" name="search_by_faculty_id_for_search"  value="Search">
                </form>
            </div>
            <?php
        }
            if(isset($_POST['search_by_faculty_id_for_search'])){
                $query ="select * from faculty where faculty_id = '$_POST[faculty_id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <table class="mt-2">
                        <tr>
                            <td><b>Faculty Name : </b></td>
                            <td><?php echo $row['name'];?></td>
                        </tr>
                        <tr>
                            <td><b>Faculty ID : </b></td>
                            <td><?php echo $row['faculty_id'];?></td>
                        </tr>
                        <tr>
                            <td><b>Email : </b></td>
                            <td><?php echo $row['email'];?></td>
                        </tr>
                    </table>
                    <?php
                }
            }
    ?>





<?php 
        if(isset($_POST['student_rating'])){
            ?>
            <center><h4>Fill up the given fields : </h4>
            <form action="add_rating.php" method="post">
            <table>
                        <tr>
                            <td><b>Faculty Name : </b></td>
                            <td><input type="text" name="name" value=""></td>
                        </tr>
                        <tr>
						
						<tr>
                            <td><b>Faculty id : </b></td>
                            <td><input type="text" name="id" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Department : </b></td>
                            <td><input type="text" name="department" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Course: </b></td>
                            <td><input type="text" name="course" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Rating : </b></td>
                            <td><input type="text" name="rating" value=""></td>
                        </tr>
						<tr>
                            <td><b>Comments: </b></td>
                            <td><input type="text" name="comments" value=""></td>
                        </tr>
						<tr>
                            <td><b>Student ID: </b></td>
                            <td><input type="text" name="student_id" value=""></td>
                        </tr>
						
						
                        <tr>
                            <td></td>
                            <td><input type="submit"  value="Add"></td>
                        </tr>
                    </table>
					</center>
            </form>
            <?php
        }
    ?>















<?php 
       
     
if (isset($_POST['pay'])){
	header("Location: payment.php");
}


?>


<?php 
       
     
if (isset($_POST['performance'])){
	header("Location: performance.php");
}


?>


 
                
            

</div>
</center>

</body>
</html>