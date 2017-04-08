<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changes test</title>
    <!-- Latest compiled and minified CSS -->
    <!-- <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap.min.css"> -->

    <!-- Optional theme -->
    <!-- <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap-theme.min.css"> -->

    <!-- jquery script -->
    <script src="scripts\jquery-3.2.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <!-- <script src="scripts\bootstrap-3.3.7\dist\js\bootstrap.min.js"></script> -->

    <!-- Stylesheet standard.css -->
    <link rel="stylesheet" type="text/css" href="stylesheets/rangestyle.css?t=< ?= time(); ?">
    <link rel="stylesheet" type="text/css" href="stylesheets/akzeptanz.css?t=< ?= time(); ?" />

</head>

<body>

  <form method="get">
    <div class="block" id="blockheadline">
      <p id="headline"> Akzeptanzanalye </p>
    </div>
<!-- Block für Frage 1-->
    <div class="block" id="blockanfang">
      <p> Frage 1: Ist die Steuerung Bomberman/ Teeworld intuitiv und einfach?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage1Bomberman" class="sliderBomberman" name="sliderFrage1Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage1Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage1Teeworld" class="slider" name="sliderFrage1Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage1Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 2-->
    <div class="block">
      <p> Frage 2: Liefen die Spiele flüssig und reibungslos?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage2Bomberman" class="sliderBomberman" name="sliderFrage2Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage2Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage2Teeworld" class="slider" name="sliderFrage2Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage2Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 3-->
    <div class="block">
      <p> Frage 3: War die Spielzeit pro Match ausreichend?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage3Bomberman" class="sliderBomberman" name="sliderFrage3Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage3Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage3Teeworld" class="slider" name="sliderFrage3Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage3Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 4-->
    <div class="block">
      <p> Frage 4: Ist das Turniersystem gut gewählt worden?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage4Bomberman" class="sliderBomberman" name="sliderFrage4Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage4Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage4Teeworld" class="slider" name="sliderFrage4Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage4Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 5-->
    <div class="block">
      <p> Frage 5: Hattet ihr Spaß beim spielen?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage5Bomberman" class="sliderBomberman" name="sliderFrage5Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage5Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage5Teeworld" class="slider" name="sliderFrage5Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage5Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 6-->
    <div class="block">
      <p> Frage 6: Sind die Regeln angemessen und fair gewesen?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage6Bomberman" class="sliderBomberman" name="sliderFrage6Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage6Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage6Teeworld" class="slider" name="sliderFrage6Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage6Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 7-->
    <div class="block">
      <p> Frage 7: Wurde das Potenzial des Spieles vollkommen ausgenutzt?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage7Bomberman" class="sliderBomberman" name="sliderFrage7Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage7Teeworld" class="slider" name="sliderFrage7Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 8-->
    <div class="block">
      <p> Frage 8: Sind die Team fair verteilt und gleich stark gewesen?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage8Bomberman" class="sliderBomberman" name="sliderFrage8Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage8Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage8Teeworld" class="slider" name="sliderFrage8Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage8Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 9-->
    <div class="block">
      <p> Frage 9: War der Ablauf koordiniert und nachvollziehbar? </p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage9Bomberman" class="sliderBomberman" name="sliderFrage9Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage9Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage7Teeworld" class="slider" name="sliderFrage9Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 10-->
    <div class="block">
      <p> Frage 10: Seid ihr eine ausreichende Zeit beschäftigt gewesen oder gab es zu lange Wartepausen?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage7Bomberman" class="sliderBomberman" name="sliderFrage10Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage7Teeworld" class="slider" name="sliderFrage10Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 11-->
    <div class="block">
      <p> Frage 11:	Haben die Spiele euch überfordert oder wurde alles erklärt.</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage7Bomberman" class="sliderBomberman" name="sliderFrage11Bomberman "min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage7Teeworld" class="slider" min="0" name="sliderFrage11Teeworld" max="10" value="5" step="1"/>
        <span id="wertFrage7Teeworld"> 5  </span>
      </div>
    </div>
<!-- Block für Frage 12-->
    <div class="block">
      <p> Frage 12: Gibt es Verbesserungsvorschläge?</p>
      <div class="sliderbox">
        <span class="schriftSlider">Bomberman </span>
        <input type="range" id="frage7Bomberman" class="sliderBomberman" name="sliderFrage12Bomberman" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Bomberman"> 5  </span>
      </div>
      <div class="sliderbox">
        <span class="schriftSlider">Teeworld </span>
        <input type="range" id="frage7Teeworld" class="slider" name="sliderFrage12Teeworld" min="0" max="10" value="5" step="1"/>
        <span id="wertFrage7Teeworld"> 5  </span>
      </div>
    </div>
<!-- Submitbox -->
    <div>
      <input type="submit" name="ergebis" class="btn-success"  value="Absenden">
    </div>


  </form>

</body>

<script src="scripts\akzeptanz.js"></script>  <!-- Nciht an den Anfang da sonst nciht ausgefürht wird -->

</html>
