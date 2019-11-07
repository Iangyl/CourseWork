<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $sql = "INSERT into cities_second(city, airport, country) values('".$_POST['name_c']."', '".$_POST['airport_c']."', '".$_POST['country_c']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminCitiesSecond.php';</script>";
        }
?>