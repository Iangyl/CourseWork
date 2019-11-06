<?php
    include "db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE clients SET `Full_name` = '{$_POST['full_n']}', `birth_date` = '{$_POST['birth_d']}',
        `Phone_number` = '{$_POST['phone_n']}', `Email` = '{$_POST['email']}', `Passport_number` = '{$_POST['pass_n']}'
         WHERE cities.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../adminClients.php'</script>";
    }
?>