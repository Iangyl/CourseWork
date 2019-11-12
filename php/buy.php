<?php
include "db.php";
    if(isset($_POST['add'])){
        $sql = "INSERT into clients(Full_name, Phone_number, Email, cardNum, civ) values('".$_POST['f_name']."',
         '".$_POST['p_num']."', '".$_POST['email']."', '".$_POST['card']."', '".$_POST['civCode']."')";
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);


        /*$sql1 =  "UPDATE salesLog SET ID_Client = (SELECT clients.id WHERE Full_name = '".$_POST['f_name']."')
         WHERE ID_Flight = {$_POST['fl_id']}";
        //echo $sql1;die();
        $stm1 = $pdo->prepare($sql1);
        $stm1 ->execute($value);*/

        $sql2 = "DELETE from flight where Id=".$_POST['fl_id'];
        //echo $sql2;die();
        $stm2 = $pdo -> prepare($sql2);
        $stm2 -> execute($values);
        echo "<script>location='../view/offer.php'</script>";
    }
?>