<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminPlanes</title>
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
        <article id="planes-block" class="block">
            <h2>Table: Plane</h2><!--для Plane те ж саме, що й для Flight-->
            <h3 class="h3-fix">Insert</h3>
            <form name="add_d" action="php/insertPlanes.php" method="post" class="form-insert">
                <div class="input-container">
                    <ul class="input-list extra-list">
                        <li>
                            <input type="text" name="Model" placeholder="Назва та модель" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="date" name="Edition" placeholder="Випуск" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="E-quantity" placeholder="К-сть економ-класу" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="B-quantity" placeholder="К-сть бізнес-класу" class="input-control extra-control" required/>
                        </li>
                        <li>
                            <input type="text" name="P-quantity" placeholder="К-сть преміум-класу" class="input-control extra-control" required/>
                        </li>                
                        <li>
                            <input type="text" name="AirLine" placeholder="Авіакомпанія" class="input-control extra-control" required/>
                        </li>
                    </ul>                    
                    <button type="submit" name="add" class="btn">Вставити</button>
                </div>
            </form>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from plane");
                echo '<table id="planes-table">';
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "<tr>
                    <th>Модель</th>
                    <th>Випуск</th>
                    <th>Економ-місця</th>
                    <th>Бізнес-місця</th>
                    <th>Преміум-місця</th>
                    <th>Авіакомпанія</th>
                    <th></th>
                    <th></th>
                    </tr>
                    <tr>
                    <td>{$row['Model']}</td>
                    <td>{$row['Edition']}</td>
                    <td>{$row['Quantity_Econom']}</td>
                    <td>{$row['Quantity_Business']}</td>
                    <td>{$row['Quantity_Premium']}</td>
                    <td>{$row['ID_Airline']}</td>
                    <td>"
                        ?>
                        <form action='php/deletePlanes.php' method='post'>
                        <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name='del' value='Видалити' class='btn-search'/>
                        </form>
                        <?
                        echo "
                    </td>
                    <td>"
                    ?>
                        <form action='php/changePlanes.php' method='post'>
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