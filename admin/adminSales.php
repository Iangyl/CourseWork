<?php require_once '../php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminSale</title>
</head>
<body>
    <div id="container">
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
        <article id="service-block" class="block">
            <h2>Table: Sales log</h2>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from saleslog");
                echo '<table>
                <tr>
                    <th>Клієнт</th>
                    <th>Рейс</th>
                    <th></th>
                    <th></th>
                </tr>';
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr><form action='../php/change/changeSales.php' method='post'>
                    <td><input type='text' name='id_client' class='input-control' value='{$row['ID_Client']}'></td>
                    <td><input type='text' name='id_flight' class='input-control' value='{$row['ID_Flight']}'></td>
                    <td>"
                        ?>
                            <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name='chg' value='Змінити' class='btn-search btn-center'/>
                        </form>
                        <?
                        echo "
                    </td>
                    <td>"
                    ?>
                        <form action='../php/delete/deleteSales.php' method='post'>
                            <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name='del' value='Видалити' class='btn-search btn-center' />
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