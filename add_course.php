
<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into courses values('$_POST[code]','$_POST[name]','$_POST[credit]','$_POST[faculty]')";
        $query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Details addes Successfully in courses table");
    window.location.href="student_dashboard.php";
    </script>