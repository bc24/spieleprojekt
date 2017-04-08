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

<body>
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
