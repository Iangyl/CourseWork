<?php require_once 'php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Airline</title>
    <link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="css/offerStyle.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <script src='js/juery.js'></script>
</head>
<body>
    <div id="container">
        <header>
          <div>
            <div>
                <span id="log-in-block"><a href="Autorization.php">Авторизація</a></span>
                <div id="admin-icon">
                    <a href="Autorization.php"><img src="./pictures/adminTools.png" alt="icon.jpg"></a>
                </div>          
                <img src="./pictures/696.png" alt="plane.png" id="main-img">
                <div id="service-names-container">
                  <span id="service-name">AirLine</span>
                  <span id="service-slogan">Your goals - our wings!</span>
                </div> 
              </div>
            </div>
          <div class="header-container-nav">
            <nav>
              <ul id="nav-ul">
                <li><a href="index.php" class="header-nav-text">ABOUT</a></li>
                <li><a href="offer.php" class="header-nav-text">TICKETS</a></li>
                <li><a href="information.php" class="header-nav-text">INFORMATION</a></li>
                <li><a href="contact.php" class="header-nav-text">CONTACT US</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <section>
          <div id="search-block">
              <div class="h-block">Підбір квитків AirLine</div>
              <div>Підберемо найкращий квиток для вас!</div>
              <div id="form-block">
                  <form name="search" action="" method="post">
                      <input class="input-control" type="text" name="depart" id="depart" placeholder="Місто відбуття"/>
                      <input class="input-control" type="text" name="arrive" id="arrive" placeholder="Місто прибуття"/>
                      <input class="input-control" type="date" name="date-depart" id="dateD"/>
                      <input class="input-control" type="date" name="date-arrive" id="dateA"/></br>
                      <input type="submit" name="submit" class="btn" id="btn-search" value="Знайти"/>
                  </form>
              </div>
          </div>
          <!--код php, який буде генерувати блоки в яких буде організована інформація про рейси-->
          <!--облагородити для звіту різними фільтрами і тд(не факт, що будуть працювати, але байдуже - зато в ЗВІТІ буде :)  )-->
          <div>
          <?php
                $result = $pdo->query("SELECT flight.*,airlines.Name as 'air', plane.Model as 'Mod', service_class.service_class_name as 'serv',
                 cities.City_name, cities_second.city FROM flight inner join airlines on airlines.id=flight.ID_Airline
                  inner join plane on plane.ID=flight.ID_Plane inner join service_class on service_class.ID=flight.ID_Service
                   inner join cities on cities.ID=flight.Departure_city inner join cities_second on cities_second.ID=flight.Arrival_city");
                echo "<table id='flights-table' id='filter-table'>
                <tr>
                    <th>Номер польоту</th>
                    <th>Місто відльоту</th>
                    <th>Місто прильоту</th>
                    <th>Дата відльоту</th>
                    <th>Дата прильоту</th>
                    <th>Авіакомпанія</th>
                    
                    <th>Клас обслуговування</th>
                    <th>Ціна, грн</th>
                    <th></th>
                    </tr>
                    <tr class='table-filters bg-danger'>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td><input type='datetime-local' class='table-input'></td>
                    <td><input type='datetime-local' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    
                    <td><input type='text' class='table-input'></td>
                    <td><input type='text' class='table-input'></td>
                    <td></td>
                </tr>";
                while($row = $result->fetch(PDO::FETCH_LAZY))
                {
                    echo "
                    <tr class='table-data'><form action='' method='post'>
                    <td>{$row['Flight_number']}</td>
                    <td>{$row['City_name']}</td>
                    <td>{$row['city']}</td>
                    <td>{$row['Departure_date']}</td>
                    <td>{$row['Arrival_date']}</td>
                    <td>{$row['air']}</td>
                    
                    <td>{$row['serv']}</td>
                    <td>{$row['Full_price']}</td>
                    <td class='button-buy'>"
                        ?>
                            <input type="hidden" name="id" value="<? echo $row['Id'];?>">
                            <input type='submit' name='buy' value='Деталі' class='btn-search'/>
                        </form>                        
                        <?
                        echo "
                    </td>
                    </tr>";
                }
                echo "</table>";
            ?>
          </div>
        </section>
        <footer>
          <ul id="footerBlock-list">
            <li>
              <div>
                <div id="footer-header">
                  <span class="head-4" id="footer-h">AirLine</span>
                  <span class="little-text">©2019</span>
                  <div class="little-text" id="little-footer-text">AirLine - сервіс вигідних подорожей, де можна знайти дешеві авіаквитки.
                      Вся необхідна мандрівникові інформація - саме тут!</div>
                </div>
                <div id="block-img">
                  <a href="https://www.instagram.com/?hl=uk"><img class="footer-img" src="./pictures/instagram.png" alt="inst.png"></a>
                  <a href="https://twitter.com/?lang=uk"><img class="footer-img" src="./pictures/twitter.png" alt="twit.png"></a>
                  <a href="https://www.facebook.com/"><img class="footer-img" src="./pictures/facebook.png" alt="facebook.png"></a>
                </div>
                <div id="block-links">
                  <span><a href="#">Умови використання</a></span>
                  <span><a href="#">Політика конфіденційності</a></span>
                  <span><a href="#">Політика використання файлів cookies</a></span>
                  <span><a href="#">Допомога</a></span>
                </div>
              </div>
            </li>
            <li>
              <div>
                <a style="text-decoration: none; outline: none;" href="offer.php">
                  <div id="footer-offer">
                    <img class="footer-img" src="./pictures/globe.png" alt="global.png">
                    <span>Пошук</br> авіаквитків</span>
                  </div>
                </a>
                <a style="text-decoration: none; outline: none;" href="contact.php">
                  <div id="footer-contact">
                    <img class="footer-img" src="./pictures/support.png" alt="support.png">
                    <span>Зв'яжіться з нами</span>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </footer>
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
    </div>
</body>
</html>