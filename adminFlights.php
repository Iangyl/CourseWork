<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminFlight</title>
</head>
<body>
    <div id="container" style="overflow: visible;">
        <aside>
            <nav>
                <ul class="list-nav">
                   <li><a href="adminAirlines.php">Airlines</a></li>
                   <li><a href="adminCities.php">Cities</a></li>
                   <li><a href="adminClients.php">Clients</a></li>
                   <li><a href="adminFlights.php">Flight</a></li>
                   <li><a href="adminPlanes.php">Plane</a></li>
                   <li><a href="adminSalesLog.php">Sales log</a></li>
                   <li><a href="adminServiceClass.php">Service class</a></li>
                   <li><a href="index.html">Exit</a></li> 
                </ul>
            </nav>    
        </aside>
        <article id="flights-block" class="block">
            <h2>Table: Flight</h2><!--для блока flights включати overflow: vivsible в контейнері-->
            <h3 class="h3-fix">Insert</h3>
            <form name="add_c" action="php/insertFlights.php" method="post" class="form-insert">
                <div class="input-container">
                    <ul class="input-list extra-list">
                        <li>
                            <input type="text" name="FlightNumber" placeholder="Номер польоту" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="CityOfDeparture" placeholder="Місто відльоту" class="input-control extra-control" required/>
                         </li>
                        <li>
                            <input type="text" name="ArrivalCity" placeholder="Місто прильоту" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="datetime-local" name="DateOfDeparture" placeholder="Дата відльоту" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="datetime-local" name="DateOfArrival" placeholder="Дата прильоту" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="IdAirline" placeholder="Авіакомпанія" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="IdPlane" placeholder="Літак" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="IdServiceClass" placeholder="Клас обслуговування" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="FullPrice" placeholder="Остаточна ціна" class="input-control extra-control" required/>
                        </li>    
                    </ul>                    
                    <button type="submit" name="add" class="btn">Вставити</button>
                </div>
            </form>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from flight");
                echo '<table id="flights-table">';
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "<tr>
                    <th>Номер польоту</th>
                    <th>Місто відльоту</th>
                    <th>Місто прильоту</th>
                    <th>Дата відльоту</th>
                    <th>Дата прильоту</th>
                    <th>Авіакомпанія</th>
                    <th>Літак</th>
                    <th>Клас обслуговування</th>
                    <th>Ціна</th>
                    <th></th>
                    <th></th>
                    </tr>
                    <tr>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='datetime-local' class='table-input'></td>
                    <td><input type='datetime-local' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td></td>
                    <td></td>
                    </tr>
                    <tr>
                    <td>{$row['Flight_number']}</td>
                    <td>{$row['Departure_city']}</td>
                    <td>{$row['Arrival_city']}</td>
                    <td>{$row['Departure_date']}</td>
                    <td>{$row['Arrival_date']}</td>
                    <td>{$row['ID_Airline']}</td>
                    <td>{$row['ID_Plane']}</td>
                    <td>{$row['ID_Service']}</td>
                    <td>{$row['Full_price']}</td>
                    <td>"
                        ?>
                        <form action='php/deleteFlights.php' method='post'>
                        <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name='del' value='Видалити' class='btn-search'/>
                        </form>
                        <?
                        echo "
                    </td>
                    <td>"
                    ?>
                        <form action='php/changeFlights.php' method='post'>
                            <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name='chg' value='Змінити' class='btn-search'/>
                        </form>
                    <?
                        echo "
                    </td>
                    </tr>";
                }
                echo "</table>";
            ?>
        </article>
    </div>
</body>
</html>