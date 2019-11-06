<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminCities</title>
</head>
<body>
    <div id="container">
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
        <article id="cities-block" class="block">
            <h2>Table: Cities</h2>
            <h3 class="h3-fix">Insert</h3>
            <form name="add_bp" action="php/insertCities.php" method="post" class="form-insert">
                <div class="input-container">
                    <ul class="input-list">
                        <li>
                            <input type="text" name="name" placeholder="Назва міста" class="input-control" required/>
                        </li>
                        <li>
                            <input type="text" name="country" placeholder="Назва аеропорту" class="input-control" required/>
                        </li>
                        <li>
                            <input type="text" name="airport" placeholder="Назва країни" class="input-control" required/>
                        </li>
                    </ul>                    
                    <button type="submit" name="add" class="btn">Вставити</button>
                </div>
            </form>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from cities");
                echo '<table>
                <tr>
                    <th>Назва міста</th>
                    <th>Назва аеропорту</th>
                    <th>Країна</th>
                    <th></th>
                    <th></th>
                </tr>';
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr><form action='php/changeCities.php' method='post'>
                    <td><input type='text' name='c_name' value='{$row['City_name']}'></td>
                    <td><input type='text' name='a_name' value='{$row['Airport_name']}'></td>
                    <td><input type='text' name='country_name' value='{$row['Country_name']}'></td>
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
                        <form action='php/deleteCities.php' method='post'>
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