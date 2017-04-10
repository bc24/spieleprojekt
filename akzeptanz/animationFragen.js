/*Variablen für den Zustand*/
var frage1offen = true;
var frage2offen = true;
var frage3offen = true;
var frage4offen = true;
var frage5offen = true;
var frage6offen = true;
var frage7offen = true;
var frage8offen = true;
var frage9offen = true;
var frage10offen = true;
var frage11offen = true;
var frage12offen = true;

/*Animation der Fragen*/
$("#pfeil1").click(function(){
  $("#sliderbox1").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox2").animate({opacity: "toggle"}, 1000, function() {});
  if (frage1offen){
    $("#blockanfang").animate({height:"90px"}, 1000, function() {});
    frage1offen = false;
  }
  else{
    $("#blockanfang").animate({height:"260px"}, 1000, function() {});
    frage1offen = true;
  }
});

$("#pfeil2").click(function(){
  $("#sliderbox3").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox4").animate({opacity: "toggle"}, 1000, function() {});
  if (frage2offen){
    $("#block2").animate({height:"90px"}, 1000, function() {});
    frage2offen = false;
  }
  else{
    $("#block2").animate({height:"260px"}, 1000, function() {});
    frage2offen = true;
  }
});

$("#pfeil3").click(function(){
  $("#sliderbox5").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox6").animate({opacity: "toggle"}, 1000, function() {});
  if (frage2offen){
    $("#block3").animate({height:"90px"}, 1000, function() {});
    frage3offen = false;
  }
  else{
    $("#block3").animate({height:"260px"}, 1000, function() {});
    frage3offen = true;
  }
});
