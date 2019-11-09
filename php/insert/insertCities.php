<?php
    include "../db.php";
        if(isset($_POST['add']))
        {
            $sql = "INSERT into cities(City_name, Airport_name, Country_name) values('".$_POST['name']."', '".$_POST['country']."', '".$_POST['airport']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../../admin/adminCities.php';</script>";
        }
?>