<?php
    include "db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE clients SET `Full_Name` = '{$_POST['full_n']}', `Phone_number` = '{$_POST['phone_n']}',
         `Email` = '{$_POST['email']}', `cardNum` = '{$_POST['card_n']}', `civ` = '{$_POST['civC']}'
         WHERE clients.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../adminClients.php'</script>";
    }
?>