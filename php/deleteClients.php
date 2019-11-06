<?php
include "db.php"; 
    if(isset($_POST['del']))
    {
       
        $sql = "delete from clients where ID=".$_POST['id'];
        //echo $sql;
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
        echo "<script>location='../adminClients.php';</script>";
    }
?>