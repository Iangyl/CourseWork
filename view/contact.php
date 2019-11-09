<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Airline</title>
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/contactStyle.css" type="text/css" media="all">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
</head>
<body>
    <div id="container">
        <header>
          <div>
            <div>
                <span id="log-in-block"><a href="Autorization.php">Авторизація</a></span>
                <div id="admin-icon">
                    <a href="Autorization.php"><img src="../pictures/adminTools.png" alt="icon.jpg"></a>
                </div>          
                <img src="../pictures/696.png" alt="plane.png" id="main-img">
                <div id="service-names-container">
                  <span id="service-name">AirLine</span>
                  <span id="service-slogan">Your goals - our wings!</span>
                </div> 
              </div>
            </div>
          <div class="header-container-nav">
            <nav>
              <ul id="nav-ul">
                <li><a href="../index.php" class="header-nav-text">ABOUT</a></li>
                <li><a href="offer.php" class="header-nav-text">TICKETS</a></li>
                <li><a href="information.php" class="header-nav-text">INFORMATION</a></li>
                <li><a href="contact.php" class="header-nav-text">CONTACT US</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <section>
            <div id="contact-block">
                <div class="h-block">Зв'яжіться з нами</div>
                <form name="contact" id="form-contact" action="" method="post">
                    <div>
                        <input type="text" name="name" id="name-contact" class="input-contact" placeholder="Ім'я" /required>
                        <input type="email" name="mail" class="input-contact" id="email-contact" placeholder="E-mail" /required>
                    </div>
                    <div>
                        <input type="textarea" name="text" id="text-area" class="input-contact" placeholder="Все, що забажаєте:" /required>
                        <input type="submit" name="submit" id="btn" />
                    </div>                                        
                </form>
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
                  <a href="https://www.instagram.com/?hl=uk"><img class="footer-img" src="../pictures/instagram.png" alt="inst.png"></a>
                  <a href="https://twitter.com/?lang=uk"><img class="footer-img" src="../pictures/twitter.png" alt="twit.png"></a>
                  <a href="https://www.facebook.com/"><img class="footer-img" src="../pictures/facebook.png" alt="facebook.png"></a>
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
                    <img class="footer-img" src="../pictures/globe.png" alt="global.png">
                    <span>Пошук</br> авіаквитків</span>
                  </div>
                </a>
                <a style="text-decoration: none; outline: none;" href="contact.php">
                  <div id="footer-contact">
                    <img class="footer-img" src="../pictures/support.png" alt="support.png">
                    <span>Зв'яжіться з нами</span>
                  </div>
                </a>
              </div>
            </li>
          </ul>
        </footer>
    </div>
</body>
</html>