<?php
include "db.php"; 
    if(isset($_POST['del']))
    {
       
        $sql = "delete from cities where ID=".$_POST['id'];
        //echo $sql;
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);
        echo "<script>location='../adminCities.php';</script>";
    }
?>