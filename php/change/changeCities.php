<?php
    include "../db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE cities SET `City_name` = '{$_POST['c_name']}', `Airport_name` = '{$_POST['a_name']}',
        `Country_name` = '{$_POST['country_name']}' WHERE cities.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../../admin/adminCities.php'</script>";
    }
?>