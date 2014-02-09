<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>KKU Elektrik Elektronik Bitirme Projesi</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/cerulean.min.css" rel="stylesheet">
    <link href="starter-template.css" rel="stylesheet">
  </head>

<?php
	$service_port = $_POST["port"];   
	$address = $_POST["ip"];

echo $address;
echo $service_port;

	$_SESSION["ip"] = $address;  
	$_SESSION["port"] = $service_port; 
?>
  
  
  
  <body>

<div class="navbar navbar-default navbar-fixed-top">
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                  <a class="navbar-brand" href="#">Ev Kontrol Projesi</a>
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse">
                  <ul class="nav navbar-nav">
                    <li><a href="index.html">Anasayfa</a></li>
                    <li><a href="hakkinda.html">Hakkında</a></li>
                    <li><a href="network.html">Network Ayarları</a></li>
                    <li class="active"><a href="kontrol.html">Kontrol</a></li>
                    </li>
                  </ul>
                </div><!-- /.nav-collapse -->
              </div>

<form role="form" class="col-sm-4 col-sm-offset-4 col-md-4 col-md-offset-4 col-lg-4 col-lg-offset-4 spacer">

<button type="button" class="btn btn-success btn-lg">Aç</button>
<button type="button" class="btn btn-danger btn-lg">Kapat</button>

</form>

    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
