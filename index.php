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
  if (!isset($_SESSION['username']))
    {
      header("Location:login.php");
    }
	echo $_SESSION['username'];
?>

<body>
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

			<div class="col-md-2">
				<input type="button" class="btn btn-danger" id="logout" value="Ausloggen" name="LogOut">
				<input type="button" class="btn btn-danger" id="logout1" value="Ausloggen" name="LogOut">
			</div>

        </div>
    </div>
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
