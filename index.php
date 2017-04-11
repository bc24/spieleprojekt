<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel index.php</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap-theme.min.css">

    <!-- jquery script -->
    <script src="scripts\jquery-3.2.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="scripts\bootstrap-3.3.7\dist\js\bootstrap.min.js"></script>

    <!-- Stylesheet standard.css -->
    <link rel="stylesheet" href="stylesheets/standard.css">
</head>

<?php
  session_start();
  if (!isset($_SESSION['user']))
    {
      header("Location:login.php");
    }
?>
<!-- http://stackoverflow.com/questions/5210033/using-only-css-show-div-on-hover-over-a -->
<!-- für navbar teamliste -->
<body>
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
        <a class="navbar-brand" href="#">Webanwendung</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class=""><a href="turnierbaum.php">Turnierbaum</a></li>
          <li><a href="akzeptanz.php">Akzeptanzanalyse</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#">Name: <?php echo $_SESSION['username']; ?></a></li>
          <li><a href="#">ID: <?php echo $_SESSION['user']; ?></a></li>
          <li><a href="#">Spieler: <?php echo $_SESSION['player']; ?> </a></li>
          <li><a href="#">Team: <?php echo $_SESSION['team']; ?></a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-5">
                <div class="thumbnail" id="turnierbaum">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    <div class="caption">
                        <h3>Turnierbaum</h3>
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-md-5 col-md-offset-1">
                <div class="thumbnail" id="akzeptanz">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <div class="caption">
                        <h3>Akzeptanzanalyse</h3>
                    </div>
                </div>
            </div>

			<!-- <div class="col-md-2">
				<input type="button" class="btn btn-danger" id="logout" value="Ausloggen" name="LogOut">
				<input type="button" class="btn btn-danger" id="logout1" value="Ausloggen" name="LogOut">
			</div> -->

        </div>
    </div>
    <!-- <div id="teamliste">
      <div class="thumbnail">
        <table class="table table-bordered">
        <thead>
          <tr>
            <th>Raum 1</th>
            <th>Spieler 1</th>
            <th>Spieler 2</th>
            <th>Spieler 3</th>
            <th>Spieler 4</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th>1. Platz</th>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
          </tr>
          <tr>
            <th>2. Platz</th>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
          </tr>
          <tr>
            <th>3. Platz</th>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
          </tr>
          <thead>
          </tbody>
          <tr>
            <th>4. Platz</th>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
          </tr>
          <tr>
            <th>Punkte</th>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
          </tr>
          <tr>
            <th>Platz</th>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
            <td>Platzhalter</td>
          </tr>
        </thead>
      </table>
      </div>
    </div> -->
</body>

<script>

  $('#turnierbaum').click(function() {
    document.location.href='turnierbaum.php';
  });

  $('#akzeptanz').click(function() {
    document.location.href='akzeptanz.php';
  });

  $('#logout').click(function() {
	  $.post('scripts/logout.php', {logout:1});
	  window.location.reload();
  });
</script>

</html>
