<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $name = $_POST['Name'];
            $owner = $_POST['Country'];
            $adress = $_POST['Airport'];
            $sql = "insert into cities(Name, Country, Airport) values('".$_POST['Name']."', '".$_POST['Country']."', '".$_POST['Airport']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminCities.html';</script>";
        }
?>