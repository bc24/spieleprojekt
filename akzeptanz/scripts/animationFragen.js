/*Animation der Fragen*/
/*Frage1*/
$("#pfeil1").click(function(){
  $("#sliderbox1").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox2").animate({opacity: "toggle"}, 1000, function() {});
  if (frage1offen){
    $("#blockanfang").animate({height:"90px"}, 1000, function() {});
    frage1offen = false;
  }
  else{
    $("#blockanfang").animate({height:"210px"}, 1000, function() {});
    frage1offen = true;
  }
});
/*Frage2*/
$("#pfeil2").click(function(){
  $("#sliderbox3").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox4").animate({opacity: "toggle"}, 1000, function() {});
  if (frage2offen){
    $("#block2").animate({height:"90px"}, 1000, function() {});
    frage2offen = false;
  }
  else{
    $("#block2").animate({height:"210px"}, 1000, function() {});
    frage2offen = true;
  }
});
/*Frage3*/
$("#pfeil3").click(function(){
  $("#sliderbox5").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox6").animate({opacity: "toggle"}, 1000, function() {});
  if (frage3offen){
    $("#block3").animate({height:"90px"}, 1000, function() {});
    frage3offen = false;
  }
  else{
    $("#block3").animate({height:"210px"}, 1000, function() {});
    frage3offen = true;
  }
});
/*Frage4*/
$("#pfeil4").click(function(){
  $("#sliderbox7").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox8").animate({opacity: "toggle"}, 1000, function() {});
  if (frage4offen){
    $("#block4").animate({height:"90px"}, 1000, function() {});
    frage4offen = false;
  }
  else{
    $("#block4").animate({height:"210px"}, 1000, function() {});
    frage4offen = true;
  }
});
/*Frage5*/
$("#pfeil5").click(function(){
  $("#sliderbox9").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox10").animate({opacity: "toggle"}, 1000, function() {});
  if (frage5offen){
    $("#block5").animate({height:"90px"}, 1000, function() {});
    frage5offen = false;
  }
  else{
    $("#block5").animate({height:"210px"}, 1000, function() {});
    frage5offen = true;
  }
});
/*Frage6*/
$("#pfeil6").click(function(){
  $("#sliderbox11").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox12").animate({opacity: "toggle"}, 1000, function() {});
  if (frage6offen){
    $("#block6").animate({height:"90px"}, 1000, function() {});
    frage6offen = false;
  }
  else{
    $("#block6").animate({height:"210px"}, 1000, function() {});
    frage6offen = true;
  }
});
/*Frage7*/
$("#pfeil7").click(function(){
  $("#sliderbox13").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox14").animate({opacity: "toggle"}, 1000, function() {});
  if (frage7offen){
    $("#block7").animate({height:"90px"}, 1000, function() {});
    frage7offen = false;
  }
  else{
    $("#block7").animate({height:"210px"}, 1000, function() {});
    frage7offen = true;
  }
});
/*Frage8*/
$("#pfeil8").click(function(){
  $("#sliderbox15").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox16").animate({opacity: "toggle"}, 1000, function() {});
  if (frage8offen){
    $("#block8").animate({height:"90px"}, 1000, function() {});
    frage8offen = false;
  }
  else{
    $("#block8").animate({height:"210px"}, 1000, function() {});
    frage8offen = true;
  }
});
/*Frage9*/
$("#pfeil9").click(function(){
  $("#sliderbox17").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox18").animate({opacity: "toggle"}, 1000, function() {});
  if (frage9offen){
    $("#block9").animate({height:"90px"}, 1000, function() {});
    frage9offen = false;
  }
  else{
    $("#block9").animate({height:"210px"}, 1000, function() {});
    frage9offen = true;
  }
});
/*Frage10*/
$("#pfeil10").click(function(){
  $("#sliderbox19").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox20").animate({opacity: "toggle"}, 1000, function() {});
  if (frage10offen){
    $("#block10").animate({height:"90px"}, 1000, function() {});
    frage10offen = false;
  }
  else{
    $("#block10").animate({height:"210px"}, 1000, function() {});
    frage10offen = true;
  }
});
/*Frage11*/
$("#pfeil11").click(function(){
  $("#sliderbox21").animate({opacity: "toggle"}, 1000, function() {});
  $("#sliderbox22").animate({opacity: "toggle"}, 1000, function() {});
  if (frage11offen){
    $("#block11").animate({height:"90px"}, 1000, function() {});
    frage11offen = false;
  }
  else{
    $("#block11").animate({height:"210px"}, 1000, function() {});
    frage11offen = true;
  }
});
/*Frage12*/
$("#pfeil12").click(function(){
  $("#sliderbox23").animate({opacity: "toggle"}, 1000, function() {});
  if (frage12offen){
    $("#blockende").animate({height:"90px"}, 1000, function() {});
    frage12offen = false;
  }
  else{
    $("#blockende").animate({height:"300px"}, 1000, function() {});
    frage12offen = true;
  }
});

$("#submitButton").click(function(){
    //alert("Klick");
    $("#hinweis").animate({opacity: "toggle"}, 1000 , function() {});
});
