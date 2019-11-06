<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $name = $_POST['Name'];
            $owner = $_POST['Owner'];
            $adress = $_POST['Adress'];
            $sql = "insert into airlines(Name, Owner, Adress) values('".$_POST['Name']."', '".$_POST['Owner']."', '".$_POST['Adress']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminAirlines.php';</script>";
        }
?>