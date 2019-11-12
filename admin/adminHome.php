<?php require_once '../php/db.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700&display=swap" rel="stylesheet">
    <link type="stylesheet" href=""/>
    <link rel="stylesheet" href="../css/reset.css" type="text/css" media="all">
    <link rel="stylesheet" href="../css/adminHomestyle.css" type="text/css" media="all">
    <title>Admin page</title>
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
        <article id="welcome-block" class="block">
            <h1 id="ave">Welcome!</h1>
            <span id="prompt">This is administration page. If you want to leave click here.</span>
            <a href="../index.php">
                <input type="button" class="btn btn-primary" id="button" value="Homepage" />
            </a>
        </article>
    </div>    
</body>
</html>