<?php
                                
    $result = $_POST['karola'];
    $result = str_replace(' ', '', $result);
    $result = strtoupper($result);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Sandbox</title>
    <meta name="description" content="">
    <meta name="author" content="Karolina Szpera">

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/css/main.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    <div class="container">
      <div class="header clearfix">
        <nav>
          <ul class="nav nav-pills pull-right">
            <li role="presentation"><a href="/">Home</a></li>
          </ul>
        </nav>
        <h3 class="text-muted">Sandbox</h3>
      </div>
        <div class="row">
            <!-- CONTENT START -->
            <h2>Formularz</h2>

            <form method="post">
                <textarea name="karola" class="form-control" rows="3"></textarea>
                <button type="submit" class="btn btn-default">Wyslij</button>
            </form>

            <h2>Wynik</h2>

            <div class="well"><?=$result?></div>

            <!-- CONTENT STOP -->
        </div>
      <footer class="footer">
        <p>&copy; 2018 Karolina Szpera</p>
      </footer>
    </div> <!-- /container -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>
