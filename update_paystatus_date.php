<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="insert into pay_status values('$_POST[id]','$_POST[payment_status]','$_POST[year]','$_POST[semester]','$_POST[last_date]')";
        $query_run = mysqli_query($connection,$query);
?>

<script type="text/javascript">
    alert("Details  added Successfully in pay_status table");
    window.location.href="admin_dashboard.php";
    </script>