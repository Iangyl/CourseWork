<?php
    include "../db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE cities_second SET `city` = '{$_POST['c_name']}', `airport` = '{$_POST['a_name']}',
        `country` = '{$_POST['country_name']}' WHERE cities_second.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../../admin/adminCitiesSecond.php'</script>";
    }
?>