

$(document).ready(function () {
  $(".button-collapse").sideNav();
  passLoocation(-34.0590877549, 18.5374815859);
  $('.materialboxed').materialbox();
});

var temperature, Tminimum, Tmaximum;

function passLoocation(x, y) {

  var location = x + ", " + y;
  setCity(location);
  apicall(x, y);
}
function setCity(latLon) {
  var url = "https://maps.googleapis.com/maps/api/geocode/json?latlng=" + latLon + "&sensor=true";
  url = url.replace(/\s/g, "");
  $.ajax({
    format: "json",
    dataType: "json",
    url: url,
    success: function (data) {
      $('#location').html(data.results[0].address_components[2].long_name);
    },
  });
}

function apicall(lat, long) {
  $.ajax({
    url: 'https://api.darksky.net/forecast/c78c3d44fc4167f267b404d6d060f5b4/' + lat + ',' + long + '?exclude=minutely,hourly,alerts,flags&units=si',
    dataType: 'jsonp',
    success: function (response) {
      var tmax = Math.round(response.daily.data[0].temperatureMax);
      var tmin = Math.round(response.daily.data[0].temperatureMin);
      $("#summary").html(response.daily.data[0].summary);
      if (response.daily.data[0].sunriseTime && response.daily.data[0].sunsetTime) {

        $("#sunrise").html("Sunrise " + timeConverter(response.daily.data[0].sunriseTime));
        $("#sunset").html("Sunset " + timeConverter(response.daily.data[0].sunsetTime));
      }

      $("#maxTemp").html("<i class=\"fa fa-angle-up\" aria-hidden=\"true\"></i> " + tmax + "°C");
      $("#minTemp").html("<i class=\"fa fa-angle-down\" aria-hidden=\"true\"></i> " + tmin + "°C");
      $("#temp").html(Math.round(response.currently.temperature) + "°C");
      $("#windspeed").html("Wind " + response.currently.windSpeed + " m/s");

      temperature = Math.round(response.currently.temperature);   //set value of global variables
      Tminimum = tmin;
      Tmaximum = tmax;

      var icons = new Skycons({ "color": "white" });
      switch (response.currently.icon) {
        case "rain":
          icons.set("weather", Skycons.RAIN);
          icons.play();
          break;
        case "clear-day":
          icons.set("weather", Skycons.CLEAR_DAY);
          icons.play();
          break;
        case "clear-night":
          icons.set("weather", Skycons.CLEAR_NIGHT);
          icons.play();
          break;
        case "partly-cloudy-day":
          icons.set("weather", Skycons.PARTLY_CLOUDY_DAY);
          icons.play();
          break;
        case "partly-cloudy-night":
          icons.set("weather", Skycons.PARTLY_CLOUDY_NIGHT);
          icons.play();
          break;
        case "cloudy":
          icons.set("weather", Skycons.CLOUDY);
          icons.play();
          break;
        case "sleet":
          icons.set("weather", Skycons.SLEET);
          icons.play();
          break;
        case "snow":
          icons.set("weather", Skycons.SNOW);
          icons.play();
          break;
        case "wind":
          icons.set("weather", Skycons.WIND);
          icons.play();
          break;
        case "fog":
          icons.set("weather", Skycons.FOG);
          icons.play();
          break;
      }
    }
  });
}

function timeConverter(UNIX_timestamp) {
  var a = new Date(UNIX_timestamp * 1000);
  var hour = a.getHours();
  var min = a.getMinutes();
  var time = 'am';
  if (hour > 12) {
    time = 'pm';
    hour = hour - 12;
  }
  if (min / 10 < 1)
    min = '0' + min;
  if (hour / 10 < 1)
    hour = '0' + hour;
  var time = hour + ':' + min + time;
  return time;
}
