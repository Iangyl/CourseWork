<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminAirlines</title>
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
        <article id="airlines-block">
            <h2>Table: Airlines</h2>
            <h3 class="h3-fix">Insert</h3>
            <form name="add_a" action="php/insertAirlines.php" method="post" class="form-insert">
                <div class="input-container">
                    <ul class="input-list">
                        <li>
                            <input type="text" name="Name" placeholder="Введіть назву" class="input-control" required/>
                        </li>
                        <li>
                            <input type="text" name="Owner" placeholder="Власник" class="input-control" required/>
                        </li>
                        <li>
                            <input type="text" name="Adress" placeholder="Адреса компанії" class="input-control" required/>
                        </li>
                    </ul>                    
                    <button type="submit" name="add" class="btn">Вставити</button>
                </div>
            </form>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
                $result = $pdo->query("select * from airlines");
                echo "<table>
                <tr>
                    <th>Id</th>
                    <th>Назва компанії</th>
                    <th>Власник</th>
                    <th>Адреса</th>
                    <th></th>
                    <th></th>
                </tr>";
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr>
                    <form action='php/changeAirlines.php' method='post'>
                        <td>{$row['ID']}</td>
                        <td><input type='text' name='name' value='{$row['Name']}'></td>
                        <td><input type='text' name='owner' value='{$row['Owner']}'></td>
                        <td><input type='text' name='adress' value='{$row['Adress']}'></td>
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
                        <form action='php/deleteAirlines.php' method='post'>
                            <input type="hidden" name="id" value="<? echo $row['ID'];?>">
                            <input type='submit' name="del" value='Видалити' class='btn-search'/>
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