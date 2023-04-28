<?php 
        $connection = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($connection,"cms");
        $query="delete from students where id = '$_POST[id]'";
        $query_run = mysqli_query($connection,$query);
?>
<script type="text/javascript">
    alert("Details Edited Successfully in studets table");
    window.location.href="admin_dashboard.php";
    </script>