
	

<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="delete from courses where course_code = '$_POST[code]'";
        $query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="student_dashboard.php";
    </script>