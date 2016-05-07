var main = function () {


  $.get("http://ipinfo.io", function (response) {
    var ip = response.ip;
    var city = response.city;
    var region = response.region;
    var postal = response.postal;
    var location = response.loc;
    console.log(ip + city + region);
    console.log(JSON.stringify(response, null, 4));
    $("#address").html(city + ", " + region);
    $("#postal").html(postal);

  }, "jsonp");



}

$(document).ready(main);
