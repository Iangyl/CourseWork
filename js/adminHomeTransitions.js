let divContainer                 = document.getElementById('container');
let welcomeBlock                 = document.getElementById('welcome-block');
let airlines                     = document.getElementById('airlines-block');
let cities                       = document.getElementById('cities-block');
let clients                      = document.getElementById('clients-block');
let flights                      = document.getElementById('flights-block');
let plane                        = document.getElementById('planes-block');
let salesLog                     = document.getElementById('sales-block');
let serviceClass                 = document.getElementById('service-block');
function transitionToAirlines(){
    if (divContainer.style.overflow == "visible")
    divContainer.style.overflow = "hidden";
    if (welcomeBlock.style.display == "block")
    welcomeBlock.style.display = "none";
    if (airlines.style.display == "none") 
    airlines.style.display = "block";
    if (cities.style.display == "block")
    cities.style.display = "none";
    if (clients.style.display == "block")
    clients.style.display = "none";
    if (flights.style.display == "block")
    flights.style.display = "none";
    if (plane.style.display == "block")
    plane.style.display = "none";
    if (salesLog.style.display == "block")
    salesLog.style.display = "none";
    if (serviceClass.style.display == "block")
    serviceClass.style.display = "none";
}
function transitionToCities(){
    divContainer.style.overflow = 'hidden';
    welcomeBlock.style.display = 'none';
    airlines.style.display = 'none';
    cities.style.display = 'block';
    clients.style.display = 'none';
    flights.style.display = 'none';
    plane.style.display = 'none';
    salesLog.style.display = 'none';
    serviceClass.style.display = 'none';
}
function transitionToClients(){
    divContainer.style.overflow = 'hidden';
    welcomeBlock.style.display = 'none';
    airlines.style.display = 'none';
    cities.style.display = 'none';
    clients.style.display = 'block';
    flights.style.display = 'none';
    plane.style.display = 'none';
    salesLog.style.display = 'none';
    serviceClass.style.display = 'none';
}
function transitionToFlights(){
    divContainer.style.overflow = 'visible';
    welcomeBlock.style.display = 'none';
    airlines.style.display = 'none';
    cities.style.display = 'none';
    clients.style.display = 'none';
    flights.style.display = 'block';
    plane.style.display = 'none';
    salesLog.style.display = 'none';
    serviceClass.style.display = 'none';
}
function transitionToPlanes(){
    divContainer.style.overflow = 'visible';
    welcomeBlock.style.display = 'none';
    airlines.style.display = 'none';
    cities.style.display = 'none';
    clients.style.display = 'none';
    flights.style.display = 'none';
    plane.style.display = 'block';
    salesLog.style.display = 'none';
    serviceClass.style.display = 'none';
}
function transitionToSalesLog(){
    divContainer.style.overflow = 'hidden';
    welcomeBlock.style.display = 'none';
    airlines.style.display = 'none';
    cities.style.display = 'none';
    clients.style.display = 'none';
    flights.style.display = 'none';
    plane.style.display = 'none';
    salesLog.style.display = 'block';
    serviceClass.style.display = 'none';
}
function transitionToService(){
    divContainer.style.overflow = 'hidden';
    welcomeBlock.style.display = 'none';
    airlines.style.display = 'none';
    cities.style.display = 'none';
    clients.style.display = 'none';
    flights.style.display = 'none';
    plane.style.display = 'none';
    salesLog.style.display = 'none';
    serviceClass.style.display = 'block';
}