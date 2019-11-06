<?php
include "db.php"; 
    if(isset($_POST['del']))
    {
        $sql = "DELETE from airlines where `ID` = ".$_POST['id'];
        echo $sql;
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
        echo "<script>location='../adminAirlines.php';</script>";
    }
?>