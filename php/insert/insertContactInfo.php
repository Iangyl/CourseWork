<?php
    include "../db.php";
    if (isset($_POST['submit']))
    {
        $sql = "INSERT into clients(Full_name, Email) values('".$_POST['f_name']."', '".$_POST['email']."')";
        $stm = $pdo -> prepare($sql);
        $stm -> execute($values);

        header('location: ../../view/contact.php');
    }
?>