<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $name = $_POST['Client'];
            $owner = $_POST['Flight'];
            $sql = "insert into sales_log(ID_Client, ID_Flight) values('".$_POST['Client']."', '".$_POST['Flight']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminSalesLog.html';</script>";
        }
?>