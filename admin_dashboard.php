<!DOCTYPE html>

<head>
    
    <title>Student Dashboard</title>
    
    
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

<center>Admin Panel</center>
<br><br><br><br>
<br><br><br><br>
<center>
<form action="" method="post">


            <table>
                <tr>
                    <td>
                        <input type="submit" name="add_course" value="add_course" >
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="edit_course" value="Edit Course">
                    </td>
                </tr>

                
                <tr>
                    <td>
                        <input type="submit" name="add_student"  value="Add Student">
                    </td>
                </tr>
				 <tr>
                    <td>
                        <input type="submit" name="delete_student"  value="Delete Student">
                    </td>
                </tr>
                <tr>
                    <td>
                        <input type="submit" name="go_back"  value="Go Back">
                    </td>
                </tr>
				
				<tr>
                    <td>
                        <input type="submit" name="add_status_date" value="Add Status and Payment date of Student" >
                    </td>
                </tr>

                   
            </table>
        </form>
    <br><br><br><br>
<?php 
        if(isset($_POST['edit_course'])){
            ?>
            <center>
			<form action="" method="post">
                <form action="" method="post" >
                    Enter Course Code:
                    <input type="text" name="course_code" >
                    <input type="submit" name="search_by_course_code_for_edit"  value="Search">
                </form>
            </center>
            <?php
        }
            if(isset($_POST['search_by_course_code_for_edit'])){
                $query ="select * from courses where course_code = '$_POST[course_code]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
                    <form action="edit_course.php" method="post">
                    <table class="mt-2">
                        <tr>
                            <td><b>Course Code : </b></td>
                            <td><input type="text" name="code" value="<?php echo $row['course_code'];?>"></td>
                        </tr>
                        <tr>
                            <td><b>Course Name : </b></td>
                            <td><input type="text" name="name" value="<?php echo $row['name'];?>"></td>
                        </tr>
                        <tr>
                            <td><b>Course Credit : </b></td>
                            <td><input type="text" name="credit" value="<?php echo $row['credit'];?>"></td>
                        </tr>
                        <tr>
                            <td><b>Course Faculty : </b></td>
                            <td><input type="text" name="faculty" value="<?php echo $row['faculty'];?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="save"  value="Save"></td>
                        </tr>
                    </table>
                    </form>
                    <?php
                }
            }
    ?>

<?php 
        if(isset($_POST['add_student'])){
            ?>
            <center>Fill up the given fields :
            <form action="add_student.php" method="post">
            <table>
                        <tr>
                            <td><b>Student Name : </b></td>
                            <td><input type="text" name="name" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Student ID : </b></td>
                            <td><input type="text" name="id" value=""></td>
                        </tr>
                        <tr>
                            <td><b> Department : </b></td>
                            <td><input type="text" name="dept" value=""></td>
                        </tr>
                        <tr>
                            <td><b> Enrolled Course : </b></td>
                            <td><input type="text" name="course" value=""></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" name="add"  value="Add Student"></td>
                        </tr>
						</center>
                    </table>
            </form>
            <?php
        }
    ?>
	<?php 
        if(isset($_POST['delete_student'])){
            ?>
            <center>Fill up the given fields :
            <form action="delete_student.php" method="post">
            <table>
                        
                        <tr>
                            <td><b>Student ID : </b></td>
                            <td><input type="text" name="id" value=""></td>
                        </tr>
                       
                        <tr>
                            <td></td>
                            <td><input type="submit" name="delete"  value="Delete Student"></td>
                        </tr>
						</center>
                    </table>
            </form>
            <?php
        }
    ?>
	
	
    <?php 
        if(isset($_POST['add_course'])){
            ?>
            <center><h4>Fill up the given fields : </h4>
            <form action="admin_addcourse.php" method="post">
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
        if(isset($_POST['add_status_date'])){
            ?>
            <center><h4>Fill up the given fields : </h4>
            <form action="update_paystatus_date.php" method="post">
            <table>
                        <tr>
                            <td><b>Student ID : </b></td>
                            <td><input type="text" name="id" value=""></td>
                        </tr>
                        <tr>
                            <td><b>Pay status: </b></td>
                            <td><input type="text" name="payment_status" value=""></td>
                        </tr>
                        <tr>
                            <td><b>year: </b></td>
                            <td><input type="text" name="year" value=""></td>
                        </tr>
                        <tr>
                            <td><b>semester : </b></td>
                            <td><input type="text" name="semester" value=""></td>
                        </tr>
						                        <tr>
                            <td><b>Payment date: </b></td>
                            <td><input type="text" name="last_date" value=""></td>
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
       
     
if (isset($_POST['go_back'])){
	header("Location: index.php");
}


?>

</center>
    </body>
</html>