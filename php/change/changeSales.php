<?php
    include "../db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE saleslog SET `ID_Client` = '{$_POST['id_client']}', `ID_Flight` = '{$_POST['id_flight']}'
         WHERE saleslog.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../../admin/adminSales.php'</script>";
    }
?>