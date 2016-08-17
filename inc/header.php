<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $site_title ?></title>
    <meta name="description" content="<?php if($site_description != null) {echo $site_description;}?>">
    <meta name="author" content="Sven Harder | I-modich.de Internetdienstleistungen">
    <!--<meta http-equiv="refresh" content="3" >-->
    <title><?php if($site_title != null) {echo $site_description;} else {echo "Fahrplan Langeoog";}?></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="jquery/jquery-ui.css">
        <script src="jquery/external/jquery/jquery.js"></script>
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
    <?php include_once("inc/functions.php"); ?>

  </head>
  <body> 
    <!-- Navigation -->    
    <nav class="navbar navbar-dark navbar-fixed-top">
      <div class="container">
        <button class="navbar-toggler hidden-sm-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar2">
          &#9776;
        </button>
        <div class="collapse navbar-toggleable-xs" id="exCollapsingNavbar2">
          <a class="navbar-brand" href="/">Fahrplan Langeoog</a>
          <ul class="nav navbar-nav pull-sm-right">
            <li class="nav-item dropdown <?php if ($site_id > 1 & $site_id < 5) {echo 'active';}; ?>">
              <a class="nav-link dropdown-toggle <?php if ($site_id > 1 & $site_id < 5) {echo 'active';}; ?>" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Linie</a>
              <div class="dropdown-menu">
                <a <?php if ($site_id == 2) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="langeoog.php">Langeoog</a>
                <a <?php if ($site_id == 3) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="bensersiel.php">Bensersiel</a>
                <a <?php if ($site_id == 4) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="preise-faehre-langeoog.php">Preise</a>

              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Charter</a>
              <div class="dropdown-menu">
                <a <?php if ($site_id == 5) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="reederei-freimuth.php">Reederei Freimuth</a>
                <!--<a <?php if ($site_id == 6) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="reederei-damwerth.php">Reederei Damwerth</a>
                <a <?php if ($site_id == 7) {echo "class='dropdown-item active'";} else {echo "class='dropdown-item'";}?> href="inseltaxi-langeoog.php">Inseltaxi Langeoog</a> -->
              </div>
            </li>
            <li class="nav-item">
              <a <?php if ($site_id == 8) {echo "class='nav-link active'";} else {echo "class='nav-link'";}?> href="ausfluege-langeoog.php">Ausflüge</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="http://my-langeoog.de" target="_blank">My-Langeoog</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <!-- Bild Startseite -->
    <div class="jumbotron" id="jumbostart">
      <div class="container">
      </div>
    </div>

     <!-- Add Top -->
    <div class="container">
      <div class="row">
        <div class="col col-sm-12 center-block m-b-2">
          <?php adsense_top(); ?>
        </div>  
      </div>
    </div>
      
    <div class="container m-b-2" id="main-content">
      <div class="row">

      <!-- Grid Startseite -->

      <!-- Add right -->
    <div class="col col-lg-4 col-lg-push-8 m-t-3 m-b-2 hidden-md-down" id="right-ad-container">  
      <div id="right-ad">
        <?php adsense_right(); ?>      
      </div> 

      <!--<div id="own-add">
      <h3> Tagesaktueller Fahrplan auf Ihrer Webseite?</h3>
      <button class="btn btn-primary"> Kontakt </button>
      </div>-->
    </div>