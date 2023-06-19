<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Weather App</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="style.css">
  <script src="script.js"></script>
</head>

<body>
  <div class="card">
    <!-- Search form -->
    <div class="search">
      <input class="searchbox" type="text" placeholder="Enter a City">
      <button class="search-btn"><img src="images/search.png" alt="search-button"></button>
    </div>
    <!-- Weather img + degrees + city -->
    <div id="container-box" class="container-box">
      <div class="weather">
        <img class="weather-img" src="images/rain.png" alt="weather-img">
        <h1 class="temp">16°C</h1>
        <h2 class="city">London</h2>
      </div>
      <!-- Weather extra details-->
      <div class="details">
        <div class="humidity">
          <img src="images/humidity.png" alt="humidity-img">
          <p class="humidity-percentage">99%</p>
          <p class="humid">Humidity</p>
        </div>
        <div class="wind">
          <img src="images/wind.png" alt="wind-img">
          <p class="wind-speed">25 km/h</p>
          <p>Wind Speed</p>
        </div>
      </div>
    </div>
  </div>











  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>