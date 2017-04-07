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
      <a class="navbar-brand" href="#">Brand</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">One more separated link</a></li>
          </ul>
        </li>
      </ul>
      <form class="navbar-form navbar-left">
        <div class="form-group">
          <input type="text" class="form-control" placeholder="Search">
        </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Link</a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Action</a></li>
            <li><a href="#">Another action</a></li>
            <li><a href="#">Something else here</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Separated link</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
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
        margin-top: -275.5%;
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
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
                <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>1. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            </tr>
            <tr>
                <th>2. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            </tr>
            <tr>
                <th>3. Platz</th>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
                <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            </tr>
            <thead>
        </tbody>
        <tr>
            <th>4. Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
        </tr>
        <tr>
            <th>Punkte</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
        </tr>
        <tr>
            <th>Platz</th>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
            <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
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
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 1"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 2"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 3"></th>
              <th class="input_tabelle"><input type="text" class="form-control input_tabelle" placeholder="Spieler 4"></th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <th>1. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>2. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <tr>
              <th>3. Platz</th>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
              <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          </tr>
          <thead>
      </tbody>
      <tr>
          <th>4. Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Punkte</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      <tr>
          <th>Platz</th>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
          <td><input type="text" class="form-control input_tabelle" placeholder="Platzhalter"></td>
      </tr>
      </thead>
    </table>
</div>
<!-- Ende des eader-Teeworlds -->
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
              <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
              <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
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
              <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
              <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
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
              <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
              <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
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
              <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
              <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
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
              <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
              <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
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
              <h3><span id="punkteLinks"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
              <h3><span id="punkteRechts"><input type="text" class="form-control input_teeworlds" placeholder="Platzhalter"></span></h3>
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
