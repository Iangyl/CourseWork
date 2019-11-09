<?php
include "../db.php"; 
    if(isset($_POST['del']))
    {
       
        $sql = "delete from flight where Id=".$_POST['id'];
        //echo $sql;
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
        echo "<script>location='../../admin/adminFlights.php';</script>";
    }
?>