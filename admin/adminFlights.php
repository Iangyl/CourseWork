<?php require_once '../php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/adminHomestyle.css" type="text/css" media="all">
    <script src='../js/juery.js'></script>
    <title>AdminFlight</title>
</head>
<body>
    <div id="container" style="overflow: visible;">
        <aside>
            <nav>
                <ul class="list-nav">
                   <li><a href="adminAirlines.php">Airlines</a></li>
                   <li><a href="adminCities.php">Cities</a></li>
                   <li><a href="adminCitiesSecond.php">Cities-2</a></li>
                   <li><a href="adminClients.php">Clients</a></li>
                   <li><a href="adminFlights.php">Flight</a></li>
                   <li><a href="adminPlanes.php">Plane</a></li>
                   <li><a href="adminServiceClass.php">Service class</a></li>
                   <li><a href="adminSales.php">Sales log</a></li>
                   <li><a href="../index.php">Exit</a></li> 
                </ul>
            </nav>    
        </aside>
        <article id="flights-block" class="block">
            <h2>Table: Flight</h2><!--для блока flights включати overflow: vivsible в контейнері-->
            <h3 class="h3-fix">Insert</h3>
            <form name="add_c" action="../php/insert/insertFlights.php" method="post" class="form-insert">
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
                echo "<table id='flights-table' id='filter-table'>
                <tr>
                    <th>Id</th>
                    <th>Номер польоту</th>
                    <th>Місто відльоту</th>
                    <th>Місто прильоту</th>
                    <th>Дата відльоту</th>
                    <th>Дата прильоту</th>
                    <th>Авіакомпанія</th>
                    <th>Літак</th>
                    <th>Клас обслуговування</th>
                    <th>Ціна, грн</th>
                    <th></th>
                    <th></th>
                    </tr>
                    <tr class='table-filters bg-danger'>
                    <td>№</td>
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
                </tr>";
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr class='table-data'><form action='../php/change/changeFlights.php' method='post'>
                    <td>{$row['Id']}</td>
                    <td><input type='text' name='f_number' value='{$row['Flight_number']}'></td>
                    <td><input type='text' name='d_city' value='{$row['Departure_city']}'></td>
                    <td><input type='text' name='a_city' value='{$row['Arrival_city']}'></td>
                    <td><input type='text' name='d_date' value='{$row['Departure_date']}'></td>
                    <td><input type='text' name='a_date' value='{$row['Arrival_date']}'></td>
                    <td><input type='text' name='id_a' value='{$row['ID_Airline']}'></td>
                    <td><input type='text' name='id_p' value='{$row['ID_Plane']}'></td>
                    <td><input type='text' name='id_s' value='{$row['ID_Service']}'></td>
                    <td><input type='text' name='f_price' value='{$row['Full_price']}'></td>
                    <td>"
                        ?>
                            <input type="hidden" name="id" value="<? echo $row['Id'];?>">
                            <input type='submit' name='chg' value='Змінити' class='btn-search'/>
                        </form>                        
                        <?
                        echo "
                    </td>
                    <td>"
                    ?>
                        <form action='../php/delete/deleteFlights.php' method='post'>
                            <input type="hidden" name="id" value="<? echo $row['Id'];?>">
                            <input type='submit' name='del' value='Видалити' class='btn-search'/>
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
    <script>
        $('.table-filters input').on('input', function () {
            filterTable($(this).parents('table'));
        });

        function filterTable($table) {
            console.log("jkjhk");
            var $filters = $table.find('.table-filters td');
            var $rows = $table.find('.table-data');
            $rows.each(function (rowIndex) {
                var valid = true;
                $(this).find('td').each(function (colIndex) {
                    if ($filters.eq(colIndex).find('input').val()) {
                        if ($(this).html().toLowerCase().indexOf(
                                $filters.eq(colIndex).find('input').val().toLowerCase()) == -1) {
                            valid = valid && false;
                        }
                    }
                });
                if (valid === true) {
                    $(this).css('display', '');
                } else {
                    $(this).css('display', 'none');
                }
            });
        }
    </script>
</body>
</html>