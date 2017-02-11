<?php
    $site_title = "Abfahrtszeiten Fähre Langeoog";
    $site_id = 2;
    $site_description = "Abfahrtszeiten der Fähre Langeoog ab Bahnhof Langeoog. Aktuelle Fahrzeiten der Fähre";

    include("inc/header.php");
    include("inc/fahrplan.php");

    date_default_timezone_set("Europe/Berlin");
    if (isset($_GET["datum"]) && $_GET["datum"] != null){
        $datum = $_GET["datum"];
    }else {
        $datum = date("d.m.Y");
    }  
    $tag = date("w", strtotime($datum));
?>

        <!-- Content -->
      <div class="col col-lg-8 col-lg-pull-4">

          <div class="row">
            <h1 class="text-xs-center p-y-2">Fahrplan Langeoog</h3>
            <p class="text-xs-center p-b-1">Abfahrtszeiten der Fähre Langeoog am <?php echo wochentag($tag) .", den " . $datum ?>.</p>
            <div class="row">
              <div class="col-xs-12">
                 <div class="m-x-auto" style="width:270px;">
                  <h3 class="text-xs-center">Datum wählen</h3>
                  <div id="datepicker">
                      <?php datepicker_hafen("langeoog", $datum); ?>  
                  </div>
              </div>
              </div>
            </div>
              <div class="col-md-6">
                <h3 class="text-xs-center m-t-2">Schiffahrt Langeoog</h3>
                <?php 
                  $fahrplan = new fahrplan();
                  $fahrplan->fahrplan_html("Langeoog", $datum);
                ?>
              </div>
              <div class="col-md-6">
                
                <h3 class="text-xs-center m-t-2">Reederei Freimuth</h3> 
                <?php
                  linieFreimuth("langeoog", $datum);
                ?>
                <div class="alert alert-danger" role="alert">
                  <strong>Achtung!</strong><br /> Wichtige <a href="reederei-freimuth.php#linie" class="alert-link">Informationen</a> zur Reederei Freimuth.
                </div>
              </div>   
          </div>          

        <div class="alert alert-info m-t-2 m-b-3" role="alert">
          <?php include("inc/fahrplan_hinweis.php") ?>
        </div>
      </div>

      <!-- END Content -->

  <?php include('inc/footer.php') ?>