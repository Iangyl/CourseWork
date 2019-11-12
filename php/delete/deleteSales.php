<?php
include "../db.php"; 
    if(isset($_POST['del']))
    {
       
        $sql = "delete from saleslog where ID=".$_POST['id'];
        //echo $sql;
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
        echo "<script>location='../../admin/adminSales.php';</script>";
    }
?>