<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminService</title>
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
                   <li><a href="index.php">Exit</a></li> 
                </ul>
            </nav>    
        </aside>
        <article id="service-block" class="block">
            <h2>Table: Service class</h2>
            <h3 class="h3-fix">Insert</h3>
            <form name="add_f" action="php/insertService.php" method="post" class="form-insert">
                <div class="input-container">
                    <ul class="input-list">
                        <li>
                            <input type="text" name="Class" placeholder="Клас" class="input-control extra-control" required/>
                        </li>
                    </ul>                    
                    <button type="submit" name="add" class="btn">Вставити</button>
                </div>
            </form>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from service_class");
                echo '<table>
                <tr>
                    <th>Id</th>
                    <th>Клас обслуговування</th>
                </tr>';
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr>
                    <td>{$row['ID']}</td>
                    <td>{$row['service_class_name']}</td>
                    </tr>";
                }
                echo "</table>";
            ?>
        </article>
    </div>
</body>
</html>