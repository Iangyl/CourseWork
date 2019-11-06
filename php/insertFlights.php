<?php
    include "db.php";
        if(isset($_POST['add']))
        {
            $name = $_POST['FlightNumber'];
            $owner = $_POST['CityOfDeparture'];
            $adress = $_POST['ArrivalCity'];
            $sql = "insert into flight(Flight_number, Departure_city, Arrival_city, Departure_date, Arrival_date, ID_Airline, ID_Plane, ID_Service, Full_price) values('".$_POST['FlightNumber']."',
             '".$_POST['CityOfDeparture']."', '".$_POST['ArrivalCity']."', '".$_POST['DateOfDeparture']."', '".$_POST['DateOfArrival']."',
             '".$_POST['IdAirline']."', '".$_POST['IdPlane']."', '".$_POST['IdServiceClass']."', 
             '".$_POST['FullPrice']."')";
            $stm = $pdo -> prepare($sql);
            $stm -> execute($values);
            echo "<script>location='../adminFlights.php';</script>";
        }
?>