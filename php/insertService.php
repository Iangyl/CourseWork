<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $name = $_POST['Class'];
            $sql = "insert into service_class(service_class_name) values('".$_POST['Class']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminServiceClass.php';</script>";
        }
?>