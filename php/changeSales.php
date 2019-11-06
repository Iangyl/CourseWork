<?php
    include "db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE sales_log SET `ID_Client` = '{$_POST['id_c']}', `ID_Flight` = '{$_POST['id_p']}' 
            WHERE sales_log.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../adminSalesLog.php'</script>";
    }
?>