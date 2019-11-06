<?php
    include "db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE plane SET `Model` = '{$_POST['model']}', `Edition` = '{$_POST['edition']}',
        `Quantity_Econom` = '{$_POST['q_econom']}', `Quantity_Business` = '{$_POST['q_business']}',
         `Quantity_Premium` = '{$_POST['q_premium']}', `ID_Airline` = '{$_POST['id_a']}' WHERE plane.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../adminPlanes.php'</script>";
    }
?>