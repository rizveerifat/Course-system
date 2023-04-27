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

<center>Student Panel</center><br><br><br><br><br><br>
<center>

<form action="" method="post">


            <table>
                <tr>
                    <td>
                        <input type="submit" name="grade" value="grade" >
                    </td>
                </tr>
                 <tr>
                    <td>
                        <input type="submit" name="Number_of_course_passed" value="Number_of_course_passed">
                    </td>
                </tr>
                
                <tr>
                    <td>
                        <input type="submit" name="Number_of_retake_course" value="Number_of_retake_course">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="Number_of_course_left" value="Number_of_course_left">
                    </td>
                </tr>
				    </tr>    				
            </table>
        </form>
    
	<br><br><br><br><br><br><br>

    <?php 
        if(isset($_POST['grade'])){
	   
            ?>
            
                <form action="" method="post" >
                    Enter id:
                    <input type="text" name="id"  >
                    <input type="submit" name="search_grade"  value="Search">
                </form>
				
				 
            <?php
        }
		
	
            if(isset($_POST['search_grade'])){
                $query ="select * from performance where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
                        <tr>
                            <td><b>id : </b></td>
                            <td> <?php echo $row['id'];?></td>
                        </tr>
                        <tr>
                            <td><b>Grade : </b></td>
                            <td><?php echo $row['grade'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	

<br><br>
				 
            
			
			
    <?php 
        if(isset($_POST['Number_of_course_passed'])){
	   
            ?>
            
                <form action="" method="post" >
                    Enter Id:
                    <input type="text" name="id"  >
                    <input type="submit" name="Number_of_course_passed"  value="Search">
                </form>
				
				 
            <?php
        }
		
	
            if(isset($_POST['Number_of_course_passed'])){
                $query ="select * from performance where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
                        <tr>
                            <td>id:</td>
                            <td> <?php echo $row['id'];?></td>
                        </tr>
                        <tr>
                            <td><b>Number_of_course_passed : </b></td>
                            <td><?php echo $row['passed'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	
	
	         
			
			
    <?php 
        if(isset($_POST['Number_of_retake_course'])){
	   
            ?>
            
                <form action="" method="post" >
                    Enter Id:
			      
                  <input type="text" name="id"  >
                  <input type="submit" name="Number_of_retake_course"  value="Search">
                </form>
				
				 
            <?php
        }
		
	
            if(isset($_POST['Number_of_retake_course'])){
                $query ="select * from performance where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
                        <tr>
                            <td>id:</td>
                            <td> <?php echo $row['id'];?></td>
                        </tr>
                        <tr>
                            <td><b>Number of retake course : </b></td>
                            <td><?php echo $row['retake'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	
	
	
	    <?php 
        if(isset($_POST['Number_of_course_left'])){
	   
            ?>
            
                <form action="" method="post" >
                    Enter id:
                    <input type="text" name="id"  >
                    <input type="submit" name="Number_of_course_left"  value="Search">
                </form>
				
				 
            <?php
        }
		
	
            if(isset($_POST['Number_of_course_left'])){
                $query ="select * from performance where id = '$_POST[id]'";
                $query_run = mysqli_query($connection,$query);
                while($row = mysqli_fetch_assoc($query_run)){
                    ?>
					
                    <table>
                        <tr>
                            <td><b>id : </b></td>
                            <td> <?php echo $row['id'];?></td>
                        </tr>
                        <tr>
                            <td><b>Grade : </b></td>
                            <td><?php echo $row['course_left'];?></td>
                        </tr>
                        
                    </table>
					
                    <?php
                }
            }
			 
    ?>
	
	
	
	
    </center>
</body>
</html>