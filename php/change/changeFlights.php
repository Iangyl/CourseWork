<?php
    include "../db.php";
    if(isset($_POST['chg'])){
        $sql =  "UPDATE flight SET `Flight_number` = '{$_POST['f_number']}', `Departure_city` = '{$_POST['d_city']}',
        `Arrival_city` = '{$_POST['a_city']}', `Departure_date` = '{$_POST['d_date']}', `Arrival_date` = '{$_POST['a_date']}',
         `ID_Airline` = '{$_POST['id_a']}', `ID_Plane` = '{$_POST['id_p']}', `ID_Service` = '{$_POST['id_s']}',
         `Full_price` = '{$_POST['f_price']}' WHERE flight.id = {$_POST['id']}";
        $stm = $pdo->prepare($sql);
        $stm ->execute($value);
        echo "<script>location='../../admin/adminFlights.php'</script>";
    }
?>