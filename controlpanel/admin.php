<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="..\scripts\bootstrap-3.3.7\dist\css\bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="..\scripts\bootstrap-3.3.7\dist\css\bootstrap-theme.min.css">

    <!-- jquery script -->
    <script src="..\scripts\jquery-3.2.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="..\scripts\bootstrap-3.3.7\dist\js\bootstrap.min.js"></script>

    <!-- Stylesheet standard.css -->
    <!-- <link rel="stylesheet" href="../stylesheets/login.css"> -->
</head>
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
            <a class="navbar-brand" href="#">Controlpanel</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                <li class="active"><a href="#">Turnierbaum <span class="sr-only">(current)</span></a></li>
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Akzeptanzanalyse <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="#" id="akzeptanz-starten">starten</a></li>
                        <li><a href="#" id="akzeptanz-beenden">beenden</a></li>
                        <li><a href="#">löschen</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="ButtonTest">Button Test</a></li>
                <li><a href="#" id="fillData">Daten füllen</a></li>
                <li><a href="#" id="saveData">Daten speichern</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<style>
    .spacer-header {
        margin-top: 60px;
    }
    /* Start des CSS für Header */

    .thumbnail {
        width: 1140px;
        height: auto;
    }

    .thumbnail_admin {
        width: 430px;
        height: 500%;
        margin-left: 70%;
        margin-top: -275%;
        padding-bottom: 12%;
        padding-top: -1000px;
    }

    #header-top {
        font-size: 65px;
        margin-bottom: 25px;
    }

    #header {
        font-size: 60px;
        margin-bottom: 25px;
    }
    /* Ende des CSS für Header */
    /* Start des CSS für Header-Bomberman */

    .thumbnail-bomberman {
        height: auto;
    }
    /* Ende des CSS für Header-Bomberman */
    /* Start des CSS für Header-Vorrunde-Bomberman */

    #header-vorrunde {
        font-size: 45px;
        margin-bottom: 25px;
    }
    /* Ende des CSS für Header-Vorrunde-Bomberman */
    /* Start des CSS für Game-Teeworlds */

    .icon_und_spielNummer .glyphicon {
        font-size: 120px;
    }

    .icon_und_spielNummer {
        width: 120px;
    }

    #gameNumber {
        margin-top: -2px;
        text-align: center;
    }

    .teams_und_vs {
        margin-top: 3%;
        text-align: center;
    }

    .teams_und_vs h3 {
        display: inline;
        font-size: 55px;
    }

    .punkte h3 {
        display: inline;
        font-size: 30px;
    }

    #punkteLinks {
        margin-left: 17%;
    }

    #punkteRechts {
        margin-left: 30.5%;
    }

    .start_und_dauer h3 {
        display: inline;
    }
    /* Ende des CSS für Game-Teeworlds */

    .active-game {
        border-color: green;
        border-width: 5px;
    }

    .input_tabelle {
        width: 140px;
    }

    .input_teeworlds {
        width: 140px;
        display: inline;
    }

    .input_tabelle_raum {
        width: 50px;
    }

    .punkteSchieben {
        margin-left: -15%;
    }

    .form-group input[type="checkbox"] {
        display: none;
    }

    .form-group input[type="checkbox"]+.btn-group>label span {
        width: 20px;
    }

    .form-group input[type="checkbox"]+.btn-group>label span:first-child {
        display: none;
    }

    .form-group input[type="checkbox"]+.btn-group>label span:last-child {
        display: inline-block;
    }

    .form-group input[type="checkbox"]:checked+.btn-group>label span:first-child {
        display: inline-block;
    }

    .form-group input[type="checkbox"]:checked+.btn-group>label span:last-child {
        display: none;
    }

    .table1_game1 {
        margin-top: 115%;
    }

    .table2_game2 {
        margin-top: 30%;
    }

    .table3_game3 {
        margin-top: 30%;
    }

    .table4_game4 {
        margin-top: 30%;
    }

    .table5_game5 {
        margin-top: 56%;
    }

    .table6_game6 {
        margin-top: 30%;
    }

    .table7_game7 {
        margin-top: 30%;
    }

    .table8_game8 {
        margin-top: 30%;
    }

    .tw_game .form-group {
        display: inline;
    }

    .tw1 {
        margin-top: 130px;
    }
</style>
<!-- Start des Headers -->
<div class="spacer-header">
    <div class="thumbnail">
        <h1 class="text-center" id="header-top"><strong>Turnierbaum</strong></h1>
        <div class="panel panel-default">
            <div class="panel-body text-center" id="panel-header">
                Hier findest du alle Informationen zu den aktuellen Spielen :) Die Seite aktualisiert sich aller 7 Sekunden automatisch.
            </div>
        </div>
    </div>

    <!-- Ende des Headers -->
    <!-- Start des Headers-Bomberman -->
    <div class="thumbnail thumbnail-bomberman">
        <h1 class="text-center" id="header"><strong>Bomberman</strong></h1>
        <!-- <div class="panel panel-default">
<div class="panel-body text-center" id="panel-header">
  Hier findest du alle Informationen zum Bomberman-Turnier :) Natürlich immer up-to-date
</div> -->
    </div>
</div>
<!-- Ende des Headers-Bomberman -->
<!-- Start des Headers-Vorrunde-Bomberman -->
<div class="thumbnail thumbnail-bomberman">
    <h3 class="text-center" id="header-vorrunde"><strong>Vorrunde</strong></h3>
</div>
<!-- Ende des Headers-Vorrunde-Bomberman -->
<!-- Start des Table-Raum1-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 1</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table1_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table1_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table1_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table1_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table1_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum1-Bomberman -->
<!-- Start des Table-Raum2-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 2</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table2_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table2_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table2_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table2_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table2_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum2-Bomberman -->
<!-- Start des Table-Raum3-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 3</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table3_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table3_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table3_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table3_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table3_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum3-Bomberman -->
<!-- Start des Table-Raum4-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 4</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table4_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table4_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table4_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table4_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table4_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum4-Bomberman -->
<!-- Start des Headers-Finalrunde-Bomberman -->
<div class="thumbnail thumbnail-bomberman">
    <h3 class="text-center" id="header-vorrunde"><strong>Finalrunde</strong></h3>
</div>
<!-- Ende des Headers-Finalrunde-Bomberman -->
<!-- Start des Table-Raum1-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 1</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table5_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table5_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table5_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table5_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table5_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum1-Bomberman -->
<!-- Start des Table-Raum2-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 2</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table6_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table6_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table6_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table6_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table6_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum2-Bomberman -->
<!-- Start des Table-Raum3-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 3</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table7_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table7_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table7_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table7_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table7_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Table-Raum3-Bomberman -->
<!-- Start des Table-Raum4-Bomberman -->
<div class="thumbnail">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th class="input_tabelle_raum">Raum 4</th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1" id="bomberman_table8_playerOne"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2" id="bomberman_table8_playerTwo"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3" id="bomberman_table8_playerThree"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4" id="bomberman_table8_playerFour"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerOne_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerTwo_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerThree_placeOne"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerFour_placeOne"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerOne_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerTwo_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerThree_placeTwo"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerFour_placeTwo"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerOne_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerTwo_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerThree_placeThree"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerFour_placeThree"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerOne_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerTwo_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerThree_placeFour"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerFour_placeFour"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerOne_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerTwo_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerThree_points"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerFour_points"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerOne_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerTwo_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerThree_place"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter" id="bomberman_table8_playerFour_place"></td>
        </tr>
        </thead>
    </table>
</div>
<!-- Ende des Header-Teeworlds -->
<div class="thumbnail thumbnail-bomberman">
    <h1 class="text-center" id="header"><strong>Teeworlds</strong></h1>
</div>
<!-- Ende des Header-Teeworlds -->
<!-- Start des Spiel1-Teeworlds -->
<div class="thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="icon_und_spielNummer">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <h3 id="gameNumber">Spiel 1</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="teams_und_vs">
                    <h3><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 2</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="punkte">
                    <h3><span>Punkte:</span></h3>
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_first_teamLeft"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_first_teamRight"></span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="start_und_dauer">
                    <h3><span>Start:</span><span id="start_zeit">13:59</span></h3>
                    <br />
                    <h3><span id="dauer">Dauer:</span><span>10 min</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ende des Spiel1-Teeworlds -->
<!-- Start des Spiel2-Teeworlds -->
<div class="thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="icon_und_spielNummer">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <h3 id="gameNumber">Spiel 2</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="teams_und_vs">
                    <h3><span>Team 3 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 4</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="punkte">
                    <h3><span>Punkte:</span></h3>
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_second_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_second_teamRight" placeholder="Platzhalter"></span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="start_und_dauer">
                    <h3><span>Start:</span><span id="start_zeit">13:59</span></h3>
                    <br />
                    <h3><span id="dauer">Dauer:</span><span>10 min</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ende des Spiel2-Teeworlds -->
<!-- Start des Spiel3-Teeworlds -->
<div class="thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="icon_und_spielNummer">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <h3 id="gameNumber">Spiel 3</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="teams_und_vs">
                    <h3><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 3</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="punkte">
                    <h3><span>Punkte:</span></h3>
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_third_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_third_teamRight" placeholder="Platzhalter"></span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="start_und_dauer">
                    <h3><span>Start:</span><span id="start_zeit">14:11</span></h3>
                    <br />
                    <h3><span id="dauer">Dauer:</span><span>10 min</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ende des Spiel3-Teeworlds -->
<!-- Start des Spiel4-Teeworlds -->
<div class="thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="icon_und_spielNummer">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <h3 id="gameNumber">Spiel 4</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="teams_und_vs">
                    <h3><span>Team 2 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 4</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="punkte">
                    <h3><span>Punkte:</span></h3>
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_fourth_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_fourth_teamRight" placeholder="Platzhalter"></span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="start_und_dauer">
                    <h3><span>Start:</span><span id="start_zeit">14:11</span></h3>
                    <br />
                    <h3><span id="dauer">Dauer:</span><span>10 min</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ende des Spiel4-Teeworlds -->
<!-- Start des Spiel5-Teeworlds -->
<div class="thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="icon_und_spielNummer">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <h3 id="gameNumber">Spiel 5</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="teams_und_vs">
                    <h3><span>Team 1 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 4</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="punkte">
                    <h3><span>Punkte:</span></h3>
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_fifth_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_fifth_teamRight" placeholder="Platzhalter"></span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="start_und_dauer">
                    <h3><span>Start:</span><span id="start_zeit">14:23</span></h3>
                    <br />
                    <h3><span id="dauer">Dauer:</span><span>10 min</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Ende des Spiel5-Teeworlds -->
<!-- Start des Spiel6-Teeworlds -->
<div class="thumbnail">
    <div class="container">
        <div class="row">
            <div class="col-md-2">
                <div class="icon_und_spielNummer">
                    <span class="glyphicon glyphicon-play-circle" aria-hidden="true"></span>
                    <h3 id="gameNumber">Spiel 6</h3>
                </div>
            </div>
            <div class="col-md-9">
                <div class="teams_und_vs">
                    <h3><span>Team 2 </span></h3>
                    <h3><span>VS </span></h3>
                    <h3><span>Team 3</span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="punkte">
                    <h3><span>Punkte:</span></h3>
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_sixth_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="tw_sixth_teamRight" placeholder="Platzhalter"></span></h3>
                </div>
            </div>
            <div class="col-md-9 col-md-offset-1">
                <div class="start_und_dauer">
                    <h3><span>Start:</span><span id="start_zeit">14:23</span></h3>
                    <br />
                    <h3><span id="dauer">Dauer:</span><span>10 min</span></h3>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
<!-- Ende des Spiel6-Teeworlds -->

<div class="thumbnail thumbnail_admin">
    <div class="table1_game1">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="container">
            <div class="[ form-group ]">
                <input type="checkbox" name="table1_game1-default" id="table1_game1-default" autocomplete="off" />
                <div class="[ btn-group ]">
                    <label for="table1_game1-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                    <label for="table1_game1-default" class="[ btn btn-default active ]">
                        Default
                    </label>
                </div>
            </div>
            <div class="[ form-group ]">
                <input type="checkbox" name="table1_game1-success" id="table1_game1-success" autocomplete="off" />
                <div class="[ btn-group ]">
                    <label for="table1_game1-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                    <label for="table1_game1-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
                </div>
            </div>
            <div class="[ form-group ]">
                <input type="checkbox" name="table1_game1-danger" id="table1_game1-danger" autocomplete="off" />
                <div class="[ btn-group ]">
                    <label for="table1_game1-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                    <label for="table1_game1-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
                </div>
            </div>
            <div class="[ form-group ]">
                <input type="checkbox" name="table1_game1-info" id="table1_game1-info" autocomplete="off" />
                <div class="[ btn-group ]">
                    <label for="table1_game1-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                    <label for="table1_game1-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
                </div>
            </div>
            <input type="text" class="form-control" id="completly_different">
        </div>
    </div>
    <div class="table2_game2">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table2_game2-default" id="table2_game2-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table2_game2-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table2_game2-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table2_game2-success" id="table2_game2-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table2_game2-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table2_game2-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table2_game2-danger" id="table2_game2-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table2_game2-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table2_game2-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table2_game2-info" id="table2_game2-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table2_game2-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table2_game2-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="table3_game3">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table3_game3-default" id="table3_game3-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table3_game3-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table3_game3-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table3_game3-success" id="table3_game3-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table3_game3-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table3_game3-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table3_game3-danger" id="table3_game3-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table3_game3-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table3_game3-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table3_game3-info" id="table3_game3-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table3_game3-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table3_game3-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="table4_game4">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table4_game4-default" id="table4_game4-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table4_game4-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table4_game4-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table4_game4-success" id="table4_game4-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table4_game4-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table4_game4-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table4_game4-danger" id="table4_game4-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table4_game4-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table4_game4-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table4_game4-info" id="table4_game4-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table4_game4-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table4_game4-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="table5_game5">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table5_game5-default" id="table5_game5-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table5_game5-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table5_game5-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table5_game5-success" id="table5_game5-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table5_game5-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table5_game5-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table5_game5-danger" id="table5_game5-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table5_game5-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table5_game5-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table5_game5-info" id="table5_game5-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table5_game5-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table5_game5-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="table6_game6">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table6_game6-default" id="table6_game6-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table6_game6-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table6_game6-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table6_game6-success" id="table6_game6-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table6_game6-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table6_game6-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table6_game6-danger" id="table6_game6-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table6_game6-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table6_game6-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table6_game6-info" id="table6_game6-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table6_game6-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table6_game6-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="table7_game7">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table7_game7-default" id="table7_game7-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table7_game7-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table7_game7-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table7_game7-success" id="table7_game7-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table7_game7-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table7_game7-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table7_game7-danger" id="table7_game7-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table7_game7-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table7_game7-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table7_game7-info" id="table7_game7-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table7_game7-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table7_game7-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="table8_game8">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="table8_game8-default" id="table8_game8-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table8_game8-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table8_game8-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table8_game8-success" id="table8_game8-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table8_game8-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table8_game8-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table8_game8-danger" id="table8_game8-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table8_game8-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table8_game8-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="table8_game8-info" id="table8_game8-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="table8_game8-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="table8_game8-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="tw_game tw1">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="tw1_game1-default" id="tw1_game1-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw1_game1-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw1_game1-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw1_game1-success" id="tw1_game1-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw1_game1-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw1_game1-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw1_game1-danger" id="tw1_game1-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw1_game1-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw1_game1-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw1_game1-info" id="tw1_game1-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw1_game1-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw1_game1-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw1_game1-winLeft" id="tw1_game1-winLeft" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw1_game1-winLeft" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw1_game1-winLeft" class="[ btn btn-default active ]">
                        Win Links
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw1_game1-winRight" id="tw1_game1-winRight" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw1_game1-winRight" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw1_game1-winRight" class="[ btn btn-default active ]">
                        Win Rechts
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="tw_game">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="tw2_game2-default" id="tw2_game2-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw2_game2-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw2_game2-success" id="tw2_game2-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw2_game2-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw2_game2-danger" id="tw2_game2-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw2_game2-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw2_game2-info" id="tw2_game2-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw2_game2-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw2_game2-winLeft" id="tw2_game2-winLeft" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-winLeft" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw2_game2-winLeft" class="[ btn btn-default active ]">
                        Win Links
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw2_game2-winRight" id="tw2_game2-winRight" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-winRight" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw2_game2-winRight" class="[ btn btn-default active ]">
                        Win Rechts
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="tw_game">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="tw3_game3-default" id="tw3_game3-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw3_game3-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw3_game3-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw3_game3-success" id="tw3_game3-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw3_game3-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw3_game3-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw3_game3-danger" id="tw3_game3-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw3_game3-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw3_game3-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw3_game3-info" id="tw3_game3-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw3_game3-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw3_game3-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw3_game3-winLeft" id="tw3_game3-winLeft" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw3_game3-winLeft" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw3_game3-winLeft" class="[ btn btn-default active ]">
                        Win Links
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw3_game3-winRight" id="tw3_game3-winRight" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw3_game3-winRight" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw3_game3-winRight" class="[ btn btn-default active ]">
                        Win Rechts
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="tw_game">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="tw4_game4-default" id="tw4_game4-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw4_game4-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw4_game4-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw4_game4-success" id="tw4_game4-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw4_game4-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw4_game4-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw4_game4-danger" id="tw4_game4-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw4_game4-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw4_game4-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw4_game4-info" id="tw4_game4-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw4_game4-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw4_game4-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw4_game4-winLeft" id="tw4_game4-winLeft" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw4_game4-winLeft" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw4_game4-winLeft" class="[ btn btn-default active ]">
                        Win Links
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw4_game4-winRight" id="tw4_game4-winRight" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw2_game2-winRight" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw4_game4-winRight" class="[ btn btn-default active ]">
                        Win Rechts
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="tw_game">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="tw5_game5-default" id="tw5_game5-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw5_game5-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw5_game5-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw5_game5-success" id="tw5_game5-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw5_game5-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw5_game5-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw5_game5-danger" id="tw5_game5-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw5_game5-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw5_game5-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw5_game5-info" id="tw5_game5-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw5_game5-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw5_game5-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw5_game5-winLeft" id="tw5_game5-winLeft" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw5_game5-winLeft" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw5_game5-winLeft" class="[ btn btn-default active ]">
                        Win Links
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw5_game5-winRight" id="tw5_game5-winRight" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw5_game5-winRight" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw5_game5-winRight" class="[ btn btn-default active ]">
                        Win Rechts
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
    <div class="tw_game">
        <h3>Spielkontrolle</h3>
        <hr />
        <div class="[ form-group ]">
            <input type="checkbox" name="tw6_game6-default" id="tw6_game6-default" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw6_game6-default" class="[ btn btn-default ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw6_game6-default" class="[ btn btn-default active ]">
                        Default
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw6_game6-success" id="tw6_game6-success" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw6_game6-success" class="[ btn btn-success ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw6_game6-success" class="[ btn btn-default active ]">
                        Spiel gestartet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw6_game6-danger" id="tw6_game6-danger" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw6_game6-danger" class="[ btn btn-danger ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw6_game6-danger" class="[ btn btn-default active ]">
                        Spiel beendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw6_game6-info" id="tw6_game6-info" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw6_game6-info" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw6_game6-info" class="[ btn btn-default active ]">
                        Information eingeblendet
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw6_game6-winLeft" id="tw6_game6-winLeft" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw6_game6-winLeft" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw6_game6-winLeft" class="[ btn btn-default active ]">
                        Win Links
                    </label>
            </div>
        </div>
        <div class="[ form-group ]">
            <input type="checkbox" name="tw6_game6-winRight" id="tw6_game6-winRight" autocomplete="off" />
            <div class="[ btn-group ]">
                <label for="tw6_game6-winRight" class="[ btn btn-info ]">
                        <span class="[ glyphicon glyphicon-ok ]"></span>
                        <span> </span>
                    </label>
                <label for="tw6_game6-winRight" class="[ btn btn-default ]">
                        Win Rechts
                    </label>
            </div>
        </div>
        <input type="text" class="form-control" id="completly_different">
    </div>
</div>
<script>
    $('#fillData').click(function() {
        fillValues();
    });

    $('#ButtonTest').click(function() {
        var test = $('#table2_game2-default').prop('checked');
        alert(test);
    });

    $('#akzeptanz-starten').click(function() {
        var start = "starten";
        $.post("admin-akzeptanz-control.php",{ start: start});
    });

    $('#akzeptanz-beenden').click(function() {
        var beenden = "beenden";
        alert("test");
        $.post("admin-akzeptanz-control.php", {beenden: beenden});
    });

    function fillValues() {
        var value = 1;
        var fields = $(".form-control");
        fields.each(function(i) {
            $(this).val(value++);
        });
    }

    $('#saveData').click(function() {
        var bomberman_table1 = [$('#bomberman_table1_playerOne').val(),
            $('#bomberman_table1_playerTwo').val(),
            $('#bomberman_table1_playerThree').val(),
            $('#bomberman_table1_playerFour').val(),
            $('#bomberman_table1_playerOne_placeOne').val(),
            $('#bomberman_table1_playerTwo_placeOne').val(),
            $('#bomberman_table1_playerThree_placeOne').val(),
            $('#bomberman_table1_playerFour_placeOne').val(),
            $('#bomberman_table1_playerOne_placeTwo').val(),
            $('#bomberman_table1_playerTwo_placeTwo').val(),
            $('#bomberman_table1_playerThree_placeTwo').val(),
            $('#bomberman_table1_playerFour_placeTwo').val(),
            $('#bomberman_table1_playerOne_placeThree').val(),
            $('#bomberman_table1_playerTwo_placeThree').val(),
            $('#bomberman_table1_playerThree_placeThree').val(),
            $('#bomberman_table1_playerFour_placeThree').val(),
            $('#bomberman_table1_playerOne_placeFour').val(),
            $('#bomberman_table1_playerTwo_placeFour').val(),
            $('#bomberman_table1_playerThree_placeFour').val(),
            $('#bomberman_table1_playerFour_placeFour').val(),
            $('#bomberman_table1_playerOne_points').val(),
            $('#bomberman_table1_playerTwo_points').val(),
            $('#bomberman_table1_playerThree_points').val(),
            $('#bomberman_table1_playerFour_points').val(),
            $('#bomberman_table1_playerOne_place').val(),
            $('#bomberman_table1_playerTwo_place').val(),
            $('#bomberman_table1_playerThree_place').val(),
            $('#bomberman_table1_playerFour_place').val()
        ];

        var bomberman_table2 = [$('#bomberman_table2_playerOne').val(),
            $('#bomberman_table2_playerTwo').val(),
            $('#bomberman_table2_playerThree').val(),
            $('#bomberman_table2_playerFour').val(),
            $('#bomberman_table2_playerOne_placeOne').val(),
            $('#bomberman_table2_playerTwo_placeOne').val(),
            $('#bomberman_table2_playerThree_placeOne').val(),
            $('#bomberman_table2_playerFour_placeOne').val(),
            $('#bomberman_table2_playerOne_placeTwo').val(),
            $('#bomberman_table2_playerTwo_placeTwo').val(),
            $('#bomberman_table2_playerThree_placeTwo').val(),
            $('#bomberman_table2_playerFour_placeTwo').val(),
            $('#bomberman_table2_playerOne_placeThree').val(),
            $('#bomberman_table2_playerTwo_placeThree').val(),
            $('#bomberman_table2_playerThree_placeThree').val(),
            $('#bomberman_table2_playerFour_placeThree').val(),
            $('#bomberman_table2_playerOne_placeFour').val(),
            $('#bomberman_table2_playerTwo_placeFour').val(),
            $('#bomberman_table2_playerThree_placeFour').val(),
            $('#bomberman_table2_playerFour_placeFour').val(),
            $('#bomberman_table2_playerOne_points').val(),
            $('#bomberman_table2_playerTwo_points').val(),
            $('#bomberman_table2_playerThree_points').val(),
            $('#bomberman_table2_playerFour_points').val(),
            $('#bomberman_table2_playerOne_place').val(),
            $('#bomberman_table2_playerTwo_place').val(),
            $('#bomberman_table2_playerThree_place').val(),
            $('#bomberman_table2_playerFour_place').val()
        ];

        var bomberman_table3 = [$('#bomberman_table3_playerOne').val(),
            $('#bomberman_table3_playerTwo').val(),
            $('#bomberman_table3_playerThree').val(),
            $('#bomberman_table3_playerFour').val(),
            $('#bomberman_table3_playerOne_placeOne').val(),
            $('#bomberman_table3_playerTwo_placeOne').val(),
            $('#bomberman_table3_playerThree_placeOne').val(),
            $('#bomberman_table3_playerFour_placeOne').val(),
            $('#bomberman_table3_playerOne_placeTwo').val(),
            $('#bomberman_table3_playerTwo_placeTwo').val(),
            $('#bomberman_table3_playerThree_placeTwo').val(),
            $('#bomberman_table3_playerFour_placeTwo').val(),
            $('#bomberman_table3_playerOne_placeThree').val(),
            $('#bomberman_table3_playerTwo_placeThree').val(),
            $('#bomberman_table3_playerThree_placeThree').val(),
            $('#bomberman_table3_playerFour_placeThree').val(),
            $('#bomberman_table3_playerOne_placeFour').val(),
            $('#bomberman_table3_playerTwo_placeFour').val(),
            $('#bomberman_table3_playerThree_placeFour').val(),
            $('#bomberman_table3_playerFour_placeFour').val(),
            $('#bomberman_table3_playerOne_points').val(),
            $('#bomberman_table3_playerTwo_points').val(),
            $('#bomberman_table3_playerThree_points').val(),
            $('#bomberman_table3_playerFour_points').val(),
            $('#bomberman_table3_playerOne_place').val(),
            $('#bomberman_table3_playerTwo_place').val(),
            $('#bomberman_table3_playerThree_place').val(),
            $('#bomberman_table3_playerFour_place').val()
        ];

        var bomberman_table4 = [$('#bomberman_table4_playerOne').val(),
            $('#bomberman_table4_playerTwo').val(),
            $('#bomberman_table4_playerThree').val(),
            $('#bomberman_table4_playerFour').val(),
            $('#bomberman_table4_playerOne_placeOne').val(),
            $('#bomberman_table4_playerTwo_placeOne').val(),
            $('#bomberman_table4_playerThree_placeOne').val(),
            $('#bomberman_table4_playerFour_placeOne').val(),
            $('#bomberman_table4_playerOne_placeTwo').val(),
            $('#bomberman_table4_playerTwo_placeTwo').val(),
            $('#bomberman_table4_playerThree_placeTwo').val(),
            $('#bomberman_table4_playerFour_placeTwo').val(),
            $('#bomberman_table4_playerOne_placeThree').val(),
            $('#bomberman_table4_playerTwo_placeThree').val(),
            $('#bomberman_table4_playerThree_placeThree').val(),
            $('#bomberman_table4_playerFour_placeThree').val(),
            $('#bomberman_table4_playerOne_placeFour').val(),
            $('#bomberman_table4_playerTwo_placeFour').val(),
            $('#bomberman_table4_playerThree_placeFour').val(),
            $('#bomberman_table4_playerFour_placeFour').val(),
            $('#bomberman_table4_playerOne_points').val(),
            $('#bomberman_table4_playerTwo_points').val(),
            $('#bomberman_table4_playerThree_points').val(),
            $('#bomberman_table4_playerFour_points').val(),
            $('#bomberman_table4_playerOne_place').val(),
            $('#bomberman_table4_playerTwo_place').val(),
            $('#bomberman_table4_playerThree_place').val(),
            $('#bomberman_table4_playerFour_place').val()
        ];

        var bomberman_table5 = [$('#bomberman_table5_playerOne').val(),
            $('#bomberman_table5_playerTwo').val(),
            $('#bomberman_table5_playerThree').val(),
            $('#bomberman_table5_playerFour').val(),
            $('#bomberman_table5_playerOne_placeOne').val(),
            $('#bomberman_table5_playerTwo_placeOne').val(),
            $('#bomberman_table5_playerThree_placeOne').val(),
            $('#bomberman_table5_playerFour_placeOne').val(),
            $('#bomberman_table5_playerOne_placeTwo').val(),
            $('#bomberman_table5_playerTwo_placeTwo').val(),
            $('#bomberman_table5_playerThree_placeTwo').val(),
            $('#bomberman_table5_playerFour_placeTwo').val(),
            $('#bomberman_table5_playerOne_placeThree').val(),
            $('#bomberman_table5_playerTwo_placeThree').val(),
            $('#bomberman_table5_playerThree_placeThree').val(),
            $('#bomberman_table5_playerFour_placeThree').val(),
            $('#bomberman_table5_playerOne_placeFour').val(),
            $('#bomberman_table5_playerTwo_placeFour').val(),
            $('#bomberman_table5_playerThree_placeFour').val(),
            $('#bomberman_table5_playerFour_placeFour').val(),
            $('#bomberman_table5_playerOne_points').val(),
            $('#bomberman_table5_playerTwo_points').val(),
            $('#bomberman_table5_playerThree_points').val(),
            $('#bomberman_table5_playerFour_points').val(),
            $('#bomberman_table5_playerOne_place').val(),
            $('#bomberman_table5_playerTwo_place').val(),
            $('#bomberman_table5_playerThree_place').val(),
            $('#bomberman_table5_playerFour_place').val()
        ];

        var bomberman_table6 = [$('#bomberman_table6_playerOne').val(),
            $('#bomberman_table6_playerTwo').val(),
            $('#bomberman_table6_playerThree').val(),
            $('#bomberman_table6_playerFour').val(),
            $('#bomberman_table6_playerOne_placeOne').val(),
            $('#bomberman_table6_playerTwo_placeOne').val(),
            $('#bomberman_table6_playerThree_placeOne').val(),
            $('#bomberman_table6_playerFour_placeOne').val(),
            $('#bomberman_table6_playerOne_placeTwo').val(),
            $('#bomberman_table6_playerTwo_placeTwo').val(),
            $('#bomberman_table6_playerThree_placeTwo').val(),
            $('#bomberman_table6_playerFour_placeTwo').val(),
            $('#bomberman_table6_playerOne_placeThree').val(),
            $('#bomberman_table6_playerTwo_placeThree').val(),
            $('#bomberman_table6_playerThree_placeThree').val(),
            $('#bomberman_table6_playerFour_placeThree').val(),
            $('#bomberman_table6_playerOne_placeFour').val(),
            $('#bomberman_table6_playerTwo_placeFour').val(),
            $('#bomberman_table6_playerThree_placeFour').val(),
            $('#bomberman_table6_playerFour_placeFour').val(),
            $('#bomberman_table6_playerOne_points').val(),
            $('#bomberman_table6_playerTwo_points').val(),
            $('#bomberman_table6_playerThree_points').val(),
            $('#bomberman_table6_playerFour_points').val(),
            $('#bomberman_table6_playerOne_place').val(),
            $('#bomberman_table6_playerTwo_place').val(),
            $('#bomberman_table6_playerThree_place').val(),
            $('#bomberman_table6_playerFour_place').val()
        ];

        var bomberman_table7 = [$('#bomberman_table7_playerOne').val(),
            $('#bomberman_table7_playerTwo').val(),
            $('#bomberman_table7_playerThree').val(),
            $('#bomberman_table7_playerFour').val(),
            $('#bomberman_table7_playerOne_placeOne').val(),
            $('#bomberman_table7_playerTwo_placeOne').val(),
            $('#bomberman_table7_playerThree_placeOne').val(),
            $('#bomberman_table7_playerFour_placeOne').val(),
            $('#bomberman_table7_playerOne_placeTwo').val(),
            $('#bomberman_table7_playerTwo_placeTwo').val(),
            $('#bomberman_table7_playerThree_placeTwo').val(),
            $('#bomberman_table7_playerFour_placeTwo').val(),
            $('#bomberman_table7_playerOne_placeThree').val(),
            $('#bomberman_table7_playerTwo_placeThree').val(),
            $('#bomberman_table7_playerThree_placeThree').val(),
            $('#bomberman_table7_playerFour_placeThree').val(),
            $('#bomberman_table7_playerOne_placeFour').val(),
            $('#bomberman_table7_playerTwo_placeFour').val(),
            $('#bomberman_table7_playerThree_placeFour').val(),
            $('#bomberman_table7_playerFour_placeFour').val(),
            $('#bomberman_table7_playerOne_points').val(),
            $('#bomberman_table7_playerTwo_points').val(),
            $('#bomberman_table7_playerThree_points').val(),
            $('#bomberman_table7_playerFour_points').val(),
            $('#bomberman_table7_playerOne_place').val(),
            $('#bomberman_table7_playerTwo_place').val(),
            $('#bomberman_table7_playerThree_place').val(),
            $('#bomberman_table7_playerFour_place').val()
        ];

        var bomberman_table8 = [$('#bomberman_table8_playerOne').val(),
            $('#bomberman_table8_playerTwo').val(),
            $('#bomberman_table8_playerThree').val(),
            $('#bomberman_table8_playerFour').val(),
            $('#bomberman_table8_playerOne_placeOne').val(),
            $('#bomberman_table8_playerTwo_placeOne').val(),
            $('#bomberman_table8_playerThree_placeOne').val(),
            $('#bomberman_table8_playerFour_placeOne').val(),
            $('#bomberman_table8_playerOne_placeTwo').val(),
            $('#bomberman_table8_playerTwo_placeTwo').val(),
            $('#bomberman_table8_playerThree_placeTwo').val(),
            $('#bomberman_table8_playerFour_placeTwo').val(),
            $('#bomberman_table8_playerOne_placeThree').val(),
            $('#bomberman_table8_playerTwo_placeThree').val(),
            $('#bomberman_table8_playerThree_placeThree').val(),
            $('#bomberman_table8_playerFour_placeThree').val(),
            $('#bomberman_table8_playerOne_placeFour').val(),
            $('#bomberman_table8_playerTwo_placeFour').val(),
            $('#bomberman_table8_playerThree_placeFour').val(),
            $('#bomberman_table8_playerFour_placeFour').val(),
            $('#bomberman_table8_playerOne_points').val(),
            $('#bomberman_table8_playerTwo_points').val(),
            $('#bomberman_table8_playerThree_points').val(),
            $('#bomberman_table8_playerFour_points').val(),
            $('#bomberman_table8_playerOne_place').val(),
            $('#bomberman_table8_playerTwo_place').val(),
            $('#bomberman_table8_playerThree_place').val(),
            $('#bomberman_table8_playerFour_place').val()
        ];

        var tw_firstgame = [$('#tw_first_teamLeft').val(), $('#tw_first_teamRight').val()];
        var tw_secondgame = [$('#tw_second_teamLeft').val(), $('#tw_second_teamRight').val()];
        var tw_thirdgame = [$('#tw_third_teamLeft').val(), $('#tw_third_teamRight').val()];
        var tw_fourthgame = [$('#tw_fourth_teamLeft').val(), $('#tw_fourth_teamRight').val()];
        var tw_fifthgame = [$('#tw_fifth_teamLeft').val(), $('#tw_fifth_teamRight').val()];
        var tw_sixthgame = [$('#tw_sixth_teamLeft').val(), $('#tw_sixth_teamRight').val()];
        var bomberman_table1_button = [$('#table1_game1-default').prop('checked'),
        $('#table1_game1-success').prop('checked'),
        $('#table1_game1-danger').prop('checked'),
        $('#table1_game1-info').prop('checked')];
        var bomberman_table2_button = [$('#table2_game2-default').prop('checked'),
        $('#table2_game2-success').prop('checked'),
        $('#table2_game2-danger').prop('checked'),
        $('#table2_game2-info').prop('checked')];
        var bomberman_table3_button = [$('#table3_game3-default').prop('checked'),
        $('#table3_game3-success').prop('checked'),
        $('#table3_game3-danger').prop('checked'),
        $('#table3_game3-info').prop('checked')];
        var bomberman_table4_button = [$('#table4_game4-default').prop('checked'),
        $('#table4_game4-success').prop('checked'),
        $('#table4_game4-danger').prop('checked'),
        $('#table4_game4-info').prop('checked')];
        var bomberman_table5_button = [$('#table5_game5-default').prop('checked'),
        $('#table5_game5-success').prop('checked'),
        $('#table5_game5-danger').prop('checked'),
        $('#table5_game5-info').prop('checked')];
        var bomberman_table6_button = [$('#table6_game6-default').prop('checked'),
        $('#table6_game6-success').prop('checked'),
        $('#table6_game6-danger').prop('checked'),
        $('#table6_game6-info').prop('checked')];
        var bomberman_table7_button = [$('#table7_game7-default').prop('checked'),
        $('#table7_game7-success').prop('checked'),
        $('#table7_game7-danger').prop('checked'),
        $('#table7_game7-info').prop('checked')];
        var bomberman_table8_button = [$('#table8_game8-default').prop('checked'),
        $('#table8_game8-success').prop('checked'),
        $('#table8_game8-danger').prop('checked'),
        $('#table8_game8-info').prop('checked')];

        $.post("admin-turnierbaum-update.php", {
            bomberman_table1: bomberman_table1,
            bomberman_table2: bomberman_table2,
            bomberman_table3: bomberman_table3,
            bomberman_table4: bomberman_table4,
            bomberman_table5: bomberman_table5,
            bomberman_table6: bomberman_table6,
            bomberman_table7: bomberman_table7,
            bomberman_table8: bomberman_table8,
            tw_firstgame: tw_firstgame,
            tw_secondgame: tw_secondgame,
            tw_thirdgame: tw_thirdgame,
            tw_fourthgame: tw_fourthgame,
            tw_fifthgame: tw_fifthgame,
            tw_sixthgame: tw_sixthgame,
            bomberman_table1_button: bomberman_table1_button,
            bomberman_table2_button: bomberman_table2_button,
            bomberman_table3_button: bomberman_table3_button,
            bomberman_table4_button: bomberman_table4_button,
            bomberman_table5_button: bomberman_table5_button,
            bomberman_table6_button: bomberman_table6_button,
            bomberman_table7_button: bomberman_table7_button,
            bomberman_table8_button: bomberman_table8_button

        });
        return false;
    });
</script>
