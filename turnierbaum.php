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

    <!-- Stylesheet akzeptanz.css -->
    <link rel="stylesheet" href="stylesheets/akzeptanz.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-6 col-md-12">
              <div class="turnierbaum">
                <div class="thumbnail">
                  <div class="row">

                    <div class="col-md-6">
                    <span class="glyphicon glyphicon-time" aria-hidden="true"></span>
                    <div class="caption">
                        <h3>Turnierbaum</h3>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="jumbotron">
                      Random Text hier
                    </div>
                  </div>
                  </div>
                </div>
                <div class="thumbnail">
                    <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                    <div class="caption">
                        <h3>Akzeptanzanalyse</h3>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>
</body>


<script>

  function loadTurnierbaum() {
    $.ajax({
      url: "turnierbaum/turnierbaum.html",
      cache: false,
      success: function(html){
        $('.turnierbaum').html(html);
      },
    });
  }

setInterval (loadTurnierbaum, 3000);
</script>
</html>
