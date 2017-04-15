function anzeigenHinweis(){
    $("#hinweis").animate({opacity:"toggle"}, 0, function() {});
}
// Frage 1 - 6
function werteLaden1(f1b,f2b,f3b,f4b,f5b,f6b) {
  $("#frage1Bomberman").val(f1b);
  $("#frage2Bomberman").val(f2b);
  $("#frage3Bomberman").val(f3b);
  $("#frage4Bomberman").val(f4b);
  $("#frage5Bomberman").val(f5b);
  $("#frage6Bomberman").val(f6b);
}
// Frage 7 - 12
function werteLaden2(f7b,f8b,f9b,f10b,f11b,f12b) {
  $("#frage7Bomberman").val(f7b);
  $("#frage8Bomberman").val(f8b);
  $("#frage9Bomberman").val(f9b);
  $("#frage10Bomberman").val(f10b);
  $("#frage11Bomberman").val(f11b);
  $("#verbesserung").val(f12b);

}
