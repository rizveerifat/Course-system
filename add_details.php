<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into faculty_details values('$_POST[code]','$_POST[name]','$_POST[credit]','$_POST[faculty]')";
        $query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Details Added Successfully in faculty_details table");
    window.location.href="faculty.php";
    </script>