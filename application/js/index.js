function send_to_php(val) {
                        $.ajax({
                            url: 'php/main.php',
                            type: 'POST',
                            // Form data
                            data: function(){
                                var data = new FormData();
                                data.append('test', val );
                                return data;
                            }(),
                            success: function (data) {
                                var obj = JSON.parse(data);
                                $("#test").val( obj.result );
                            },
                            error: function (data) {
                                console.log(data);
                            },
                            complete: function () {

                            },
                            cache: false,
                            contentType: false,
                            processData: false
                        });
                }

var passwordsMatches = function(p1,p2){
  if (p1==p2){
    return true;
  }
  return false;
}
function signUp () {
  var email = $("#inputEmail").val();
	var password = $("#inputPassword").val();
	var confirmPassword = $("#confirmPassword").val();
  var firstName = $("#inputName").val();
  var lastName = $("#inputLastName").val();
  if (passwordsMatches(password, confirmPassword)) {
    console.log("password Ok");
    var form = '{ "operation":"create",' +
    '"entity":"account",' +
    '"params": { '+
    '"firstName":'+'"'+firstName+" "+lastName+'",'+
    '"email":'+'"'+email+'",'+
    '"password":'+'"'+password+'"'+
    '}}'
    console.log(form);
    var obj = JSON.parse(form);
    console.log(obj);
    var json_string = JSON.stringify(obj);
    send_to_php(json_string);

    //TODO: create server request to signup
  }else{
    console.log("password doesnt match");
  }

}

function logIn(){
  var email = $("#loginEmail").val();
  var password = $("#loginPassword").val();
  var form = '{ "operation":"create",' +
  '"entity":"session",' +
  '"params": { '+
  '"email":'+'"'+email+'",'+
  '"password":'+'"'+password+'"'+
  '}}'
  console.log(form);
  var obj = JSON.parse(form);
  console.log(obj);
}
var main = function () {


  $.get("http://ipinfo.io", function (response) {
    var ip = response.ip;
    var city = response.city;
    var region = response.region;
    var postal = response.postal;
    var location = response.loc;
    //console.log(ip + city + region);
    //console.log(JSON.stringify(response, null, 4));
    $("#address").html(city + ", " + region);
    $("#postal").html(postal);

  }, "jsonp");


  $("#signup").submit(function(e){
    e.preventDefault();
    signUp();
  })
  $("#login-nav").submit(function(e){
    e.preventDefault();
    logIn();
  })

  $('#login-nav').submit(function(e){
    e.preventDefault();
    logIn();
  })



}

$(document).ready(main);
