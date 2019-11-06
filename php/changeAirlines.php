<?php
    include "db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE airlines SET `Name` = '{$_POST['name']}', `Owner` = '{$_POST['owner']}',
        `Adress` = '{$_POST['adress']}' WHERE airlines.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../adminAirlines.php'</script>";
    }
?>