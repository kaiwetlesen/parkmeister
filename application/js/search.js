var main = function () {
  var list = [{name: "Parking Spot 1",spots:"100 spots available", distance: "1 mile"},{name: "Parking Spot 2",spots:"80 spots available", distance: "2 mile"}]


  var template = Handlebars.compile($("#search-result-template").html());
  $(list).each(function (i,e){
    var q = JSON.stringify(e);
    console.log(e);

    $("#searchtest").append(template(e));
  })
}

$(document).ready(main);
