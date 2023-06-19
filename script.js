// API KEY AND URL
const API_KEY = "ce8d44d9f6e9eb18608bc91f239a4aec";
const API_URL = "https://api.openweathermap.org/data/2.5/weather?q=";

// retrieves data from API and updates HTML
async function getWeather(city) {
  let fetchRequest = await fetch(
    API_URL + `${city}&appid=${API_KEY}&units=metric`
  );
  if(fetchRequest.ok){
  let jsonData = await fetchRequest.json();

  console.log(jsonData);

  let cityName = (document.querySelector(".city").innerHTML = jsonData.name);

  document.querySelector(".temp").innerHTML = jsonData.name;

  document.querySelector(".city").innerHTML =
    Math.round(jsonData.main.temp) + "°C";

  document.querySelector(".humidity-percentage").innerHTML =
    jsonData.main.humidity + "%";
  document.querySelector(".wind-speed").innerHTML =
    jsonData.wind.speed + "km/h";
    console.log("CityName = " +cityName);
    console.log("hello");

  

  let weatherIcon = document.querySelector(".weather-img");

  let state = jsonData.weather[0].main;

  if (state == "Clouds") {
    weatherIcon.src = "images/clouds.png";
  } else if (state == "Clear") {
    weatherIcon.src = "images/clear.png";
  } else if (state == "Rain") {
    weatherIcon.src = "images/rain.png";
  } else if (state == "mist") {
    weatherIcon.src = "images/Mist.png";
  }

  document.getElementById("container-box").style.display = "block";
  }else {
    document.getElementById("container-box").style.display = "none";
    document.getElementById("error").style.display = "block";
  }
}

window.onload = () => {
  document.querySelector(".search-btn").addEventListener("click", () => {
    let city = document.querySelector(".searchbox").value;
    getWeather(city);
  });
};
