<?php require_once '../php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/adminHomestyle.css" type="text/css" media="all">
    <title>AdminClients</title>
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
        <article id="clients-block" class="block">
            <h2>Table: Clients</h2>
            <h3 class="h3-fix">Change/Delete</h3>
            <?php
            $result = $pdo->query("select * from clients");
            echo '<table>
            <tr>
                <th>Id</th>
                <th>ПІБ</th>
                <th>Номер телефону</th>
                <th>E-mail</th>
                <th>Номер карти</th>
                <th>CIV</th>
                <th></th>
                <th></th>
            </tr>';
            while($row = $result->fetch(PDO::FETCH_LAZY))
            {
                echo "
                <tr><form action='../php/change/changeClients.php' method='post'>
                <td>{$row['ID']}</td>
                <td><input type='text' name='full_n' value='{$row['Full_Name']}'></td>
                <td><input type='text' name='phone_n' value='{$row['Phone_number']}'></td>
                <td><input type='email' name='email' value='{$row['Email']}'></td>
                <td><input type='text' name='card_n' value='{$row['cardNum']}'></td>
                <td><input type='text' name='civC' value='{$row['civ']}'></td>
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
                    <form action='../php/delete/deleteClients.php' method='post'>
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