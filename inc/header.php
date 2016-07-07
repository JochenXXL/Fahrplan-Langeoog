<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title ?></title>
    <meta name="description" content="<?php if($site_description != null) {echo $site_description;}?>">
    <meta name="author" content="Sven Harder | I-modich.de">
    <!--<meta http-equiv="refresh" content="3" >-->
    <title>Fahrplan Langeoog</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main_new.css">
    <link href='http://fonts.googleapis.com/css?family=Raleway:800|Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- Begin Cookie Consent plugin by Silktide - http://silktide.com/cookieconsent -->
    <script type="text/javascript">
      window.cookieconsent_options = {"message":"Diese Webseite verwendet Cookies, um Ihnen ein optimales Surf Erlebnis zu gewährleisten","dismiss":"Ay, ay, Käptn","learnMore":"Mehr Informationen","link":"http://fahrplan-langeoog.de/datenschutz.php","theme":"dark-bottom"};
    </script>

    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/cookieconsent2/1.0.9/cookieconsent.min.js"></script>
    <!-- End Cookie Consent plugin -->

  </head>
  <body> 
    <!-- Google Analytics Tracking Code -->  
    <?php include_once("inc/analyticstracking.php") ?>

    <!-- Navigation -->    
    <nav class="navbar navbar-dark navbar-fixed-top bg-primary">
      <div class="container">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
          &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
          <a class="navbar-brand" href="#">LOGO</a>
          <ul class="nav navbar-nav pull-sm-right">
            <li class="nav-item dropdown active">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Linie</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Bensersiel</a>
                <a <?php if(strstr($site_title, "Fahrplan Langeoog")){echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="#">Langeoog</a>
                <a class="dropdown-item" href="#">Preise</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Charter</a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="#">Freimuth</a>
                <a class="dropdown-item" href="#">Damwerth</a>
                <a class="dropdown-item" href="#">Inseltaxi</a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Ausflüge</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">My-Langeoog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>