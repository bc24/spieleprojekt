<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Changes test</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap-theme.min.css">

    <!-- jquery script -->
    <script src="scripts\jquery-3.2.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="scripts\bootstrap-3.3.7\dist\js\bootstrap.min.js"></script>

    <!-- Stylesheet standard.css -->
    <link rel="stylesheet" href="stylesheets/akzeptanz.css">
    <link rel="stylesheet" href="stylesheets/rangestyle.css">


    <!-- Slider -->
    <script src="scripts\ion.rangeSlider-2.1.7\js\ion-rangeSlider\ion.rangeSlider.js"></script>
    <link rel="stylesheet" href="scripts\ion.rangeSlider-2.1.7\css\ion.rangeSlider.skinHTML5.css">
    <link rel="stylesheet" href="scripts\ion.rangeSlider-2.1.7\css\ion.rangeSlider.css">

    <!-- <script src="scripts\Slider\js\app.js"></script>
    <link rel="stylesheet" href="scripts\Slider\css\foundation.min.css"> -->
    <!-- <link rel="stylesheet" href="scripts\ion.rangeSlider-2.1.7\css\ion.rangeSlider.css"> -->



</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-12">
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 1</h3>
                    </div>
                    <div >
                        <h4> Ist die Steuerung Bomberman/ Teeworld intuitiv und einfach?  </h4>
                        <input type="range" id="sliderFrage1" class="sliderFAQ" name="sliderF1" min="1" max ="10" value="5"/>
                        <input type="range" id="sliderFrage2" class="sliderFAQ" name="sliderF2" min="1" max ="10" value="5" />
                    </div>

                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 2</h3>
                    </div>
                    <div>
                        <h4>Liefen die Spiele flüssig und reibungslos? </h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 3</h3>
                    </div>
                    <div>
                        <h4>War die Spielzeit pro Match ausreichend?</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 4</h3>
                    </div>
                    <div>
                        <h4> Ist das Turniersystem gut gewählt worden? </h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 5</h3>
                    </div>
                    <div>
                        <h4>Hattet ihr Spaß beim spielen?</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 6</h3>
                    </div>
                    <div>
                        <h4>Sind die Regeln angemessen und fair gewesen?</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 7</h3>
                    </div>
                    <div>
                        <h4>Wurde das Potenzial des Spieles vollkommen ausgenutzt?</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 8</h3>
                    </div>
                    <div>
                        <h4> Sind die Team fair verteilt und gleich stark gewesen?</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 9</h3>
                    </div>
                    <div>
                        <h4>War der Ablauf koordiniert und nachvollziehbar? </h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 10</h3>
                    </div>
                    <div>
                        <h4>Seid ihr eine ausreichende Zeit beschäftigt gewesen oder gab es zu lange Wartepausen?</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 11</h3>
                    </div>
                    <div>
                        <h4> Haben die Spiele euch überfordert oder wurde alles erklärt.</h4>
                    </div>
                </div>
                <div class="thumbnail">
                    <div class="caption">
                        <h3>Frage 12</h3>
                    </div>
                    <div>
                        <h4>Gibt es Verbesserungsvorschläge?</h4>
                        <br>
                        <textarea id="verbesserung"> </textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>

    // $("#sliderFrage1").ionRangeSlider({
    //   min:0, max:10, from:5 , grid:true
    // });
    // $("#sliderFrage2").ionRangeSlider({
    //   min:0, max:10, from:5 , grid:true
    // });

    </script>


</body>

</html>
