<!DOCTYPE html>
<html lang="de">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap.min.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="scripts\bootstrap-3.3.7\dist\css\bootstrap-theme.min.css">

    <!-- jquery script -->
    <script src="scripts\jquery-3.2.0.min.js"></script>

    <!-- Latest compiled and minified JavaScript -->
    <script src="scripts\bootstrap-3.3.7\dist\js\bootstrap.min.js"></script>

    <!-- Stylesheet turnierbaum.css -->
    <link rel="stylesheet" href="stylesheets/turnierbaum.css">
</head>
<?php
session_start();
?>
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
        <a class="navbar-brand" href="./index.php">Webanwendung</a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">Turnierbaum <span class="sr-only">(current)</span></a></li>
          <li><a href="./akzeptanz.php">Akzeptanzanalyse</a></li>
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
            <div class="col-xs-6 col-md-12">
              <div class="turnierbaum">
            </div>
          </div>
        </div>
    </div>
</body>


<script>

$(document).ready(function(){
  loadTurnierbaum();
});

  function loadTurnierbaum() {
    $.ajax({
      url: "turnierbaum/turnierbaum-test.html",
      cache: false,
      success: function(html){
        $('.turnierbaum').html(html);
      },
    });
  }

setInterval (loadTurnierbaum, 7000);
</script>
</html>
