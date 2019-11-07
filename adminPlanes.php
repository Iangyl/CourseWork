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
                   <li><a href="adminCitiesSecond.php">Cities-2</a></li>
                   <li><a href="adminClients.php">Clients</a></li>
                   <li><a href="adminFlights.php">Flight</a></li>
                   <li><a href="adminPlanes.php">Plane</a></li>
                   <li><a href="adminServiceClass.php">Service class</a></li>
                   <li><a href="index.php">Exit</a></li> 
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
                            <input type="text" name="Edition" placeholder="Рік випуску" class="input-control extra-control" required/>
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
                            <input type="number" name="Airline" placeholder="Авіакомпанія(Id)" class="input-control extra-control" required/>
                        </li>
                    </ul>                    
                    <button type="submit" name="add" class="btn">Вставити</button>
                </div>
            </form>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from plane");
                echo '<table id="planes-table">
                <tr>
                    <th>Id</th>
                    <th>Модель</th>
                    <th>Випуск</th>
                    <th>Економ-місця</th>
                    <th>Бізнес-місця</th>
                    <th>Преміум-місця</th>
                    <th>Авіакомпанія</th>
                    <th></th>
                    <th></th>
                </tr>';
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr><form action='php/changePlanes.php' method='post'>
                    <td>{$row['ID']}</td>
                    <td><input type='text' name='model' value='{$row['Model']}'></td>
                    <td><input type='text' name='edition' value='{$row['Edition']}'></td>
                    <td><input type='text' name='q_econom' value='{$row['Quantity_Econom']}'></td>
                    <td><input type='text' name='q_business' value='{$row['Quantity_Business']}'></td>
                    <td><input type='text' name='q_premium' value='{$row['Quantity_Premium']}'></td>
                    <td><input type='text' name='id_a' value='{$row['ID_Airline']}'></td>
                    <td>"
                        ?>
                            <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name='chg' value='Змінити' class='btn-search'/>
                        </form>
                        
                        <?
                        echo "
                    </td>
                    <td>"
                    ?>
                       <form action='php/deletePlanes.php' method='post'>
                            <input type="hidden" name="id" value="<? echo $row['ID'];?>">
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
</body>
</html>