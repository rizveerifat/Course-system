<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query = "update faculty_details set name='$_POST[name]',
        email=$_POST[email], mobile='$_POST[mobile]' where id='$_POST[faculty_id]'";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Updated Successfully");
    window.location.href="faculty.php";
    </script>