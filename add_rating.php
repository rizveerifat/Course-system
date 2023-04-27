
<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into rating values('$_POST[id]','$_POST[name]','$_POST[department]','$_POST[course]','$_POST[rating]','$_POST[comments]','$_POST[student_id]')";
        $query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Details Edited Successfully in rating table");
    window.location.href="student_dashboard.php";
    </script>