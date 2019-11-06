<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $airline = (int)$_POST['Airline'];
            echo $airline;
            
            $sql = "INSERT into plane(Model, Edition, Quantity_Econom, Quantity_Business, Quantity_Premium, ID_Airline) values('".$_POST['Model']."',
             '".$_POST['Edition']."', '".$_POST['E-quantity']."', '".$_POST['B-quantity']."', '".$_POST['P-quantity']."', '".$_POST['Airline']."')";
              //echo $sql;
              //die();
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminPlanes.php';</script>";
        }
?>
