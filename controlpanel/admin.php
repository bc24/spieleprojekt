<?php




?>

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
<nav class="navbar navbar-default">
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
                        <li><a href="#">starten</a></li>
                        <li><a href="#">beenden</a></li>
                        <li><a href="#">löschen</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" id="saveData">Daten speichern</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<style>
    /* Start des CSS für Header */

    .thumbnail {
        width: 1140px;
        height: auto;
    }

    .thumbnail_admin {
        width: 430px;
        height: 500%;
        margin-left: 70%;
        margin-top: -318%;
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

    .glyphicon {
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

    .punkteSchieben  {
        margin-left: -15%;
    }
</style>
<!-- Start des Headers -->
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
<div class="thumbnail active-game">
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
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="teeworlds_game1_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="teeworlds_game1_teamRight" placeholder="Platzhalter"></span></h3>
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
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game2_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game2_teamRight" placeholder="Platzhalter"></span></h3>
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
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game3_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game3_teamRight" placeholder="Platzhalter"></span></h3>
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
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game4_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game4_teamRight" placeholder="Platzhalter"></span></h3>
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
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game5_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game5_teamRight" placeholder="Platzhalter"></span></h3>
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
                    <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game6_teamLeft" placeholder="Platzhalter"></span></h3>
                    <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds punkteSchieben" id="game6_teamRight" placeholder="Platzhalter"></span></h3>
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
<!-- Ende des Spiel6-Teeworlds -->

<div class="thumbnail thumbnail_admin">
    asdasd
</div>

<script>
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

        var teeworlds_game1 = [$('#teeworlds_game1_teamLeft').val(),
            $('#teeworlds_game1_teamRight').val()
        ];
        // var teeworlds_game2 = [$('#game2_teamLeft').val(),
        //     $('#game2_teamRight').val()
        // ];
        //
        // var teeworlds_game3 = [$('#game3_teamLeft').val(),
        //     $('#game3_teamRight').val()
        // ];
        //
        // var teeworlds_game4 = [$('#game4_teamLeft').val(),
        //     $('#game4_teamRight').val()
        // ];
        //
        // var teeworlds_game5 = [$('#game5_teamLeft').val(),
        //     $('#game5_teamRight').val()
        // ];
        //
        // var teeworlds_game6 = [$('#game6_teamLeft').val(),
        //     $('#game6_teamRight').val()
        // ];

        $.post("admin-turnierbaum-update.php", {
            // bomberman_table1: bomberman_table1,
            // bomberman_table2: bomberman_table2,
            // bomberman_table3: bomberman_table3,
            // bomberman_table4: bomberman_table4,
            // bomberman_table5: bomberman_table5,
            // bomberman_table6: bomberman_table6,
            // bomberman_table7: bomberman_table7,
            // bomberman_table8: bomberman_table8,
            teeworlds_game1_test: teeworlds_game1
            teeworlds_game1: teeworlds_game1,
            teeworlds_game2: teeworlds_game2,
            teeworlds_game3: teeworlds_game3,
            teeworlds_game4: teeworlds_game4,
            teeworlds_game5: teeworlds_game5,
            teeworlds_game6: teeworlds_game6
        });
        return false;
    });
</script>
