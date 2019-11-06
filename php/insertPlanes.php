<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $name = $_POST['Model'];
            $owner = $_POST['Edition'];
            $adress = $_POST['E-quantity'];
            $sql = "insert into plane(Model, Edition, Quantity_Econom, Quantity_Business, Quantity_Premium) values('".$_POST['Model']."',
             '".$_POST['Edition']."', '".$_POST['E-quantity']."', '".$_POST['B-quantity']."', '".$_POST['P-quantity']."',
              '".$_POST['Airline']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminPlanes.html';</script>";
        }
?>