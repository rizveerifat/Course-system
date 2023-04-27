<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into paymentone values('$_POST[StudentName]','$_POST[StudentID]','$_POST[StudentDepartment]','$_POST[Totalfee]')";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully");
    window.location.href="Bkash.php";
    </script>