<?php
include "db.php"; 
    if(isset($_POST['del']))
    {
       
        $sql = "delete from sales_log where ID=".$_POST['id'];
        //echo $sql;
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
        echo "<script>location='../adminSalesLog.php';</script>";
    }
?>