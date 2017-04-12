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

    <!-- Stylesheet standard.css -->
    <link rel="stylesheet" href="stylesheets/login.css">
</head>
<?php
  include ("scripts/login.php");

 ?>
<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-11">
                <div class="thumbnail">
                    <div class="row">
                        <div class="col-md-5">
                            <span class="glyphicon glyphicon-log-in" aria-hidden="true"></span>
                            <div class="caption">
                                <h3></h3>
                            </div>
                        </div>
                        <div class="login-feld">
                            <div class="col-md-7">
                              <form method="post">
                                <div class="form-group">
                                  <div class="input-group input-group-lg username">
                                      <input id="input" name="username" type="text" class="form-control" placeholder="Nutzernummer" value="<?php if (isset($_POST['username'])) {echo addslashes($_POST['username']);} ?>">
                                  </div>
                                  <div class="input-group input-group-lg password">
                                      <input id="input" name="password" type="password" class="form-control" placeholder="Passwort">
                                  </div>
                                  <input type="submit" class="btn btn-success" id="einloggen" value="Einloggen" name="LogIn">
                                </div>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
