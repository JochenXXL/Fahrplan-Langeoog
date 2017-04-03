<?php
    $site_title = "Abfahrtszeiten Fähre Bensersiel";
    $site_id = 3;
    $site_description = "Abfahrtszeiten der Fähre Langeoog ab Hafen Bensersiel. Aktuelle Fahrzeiten der Fähre";

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
            <h1 class="text-xs-center p-y-2">Fahrplan Bensersiel</h3>
            <p class="text-xs-center p-b-1">Abfahrtszeiten der Fähre Bensersiel am <?php echo wochentag($tag) .", den " . $datum ?>.</p>
            <div class="row">
              <div class="col-xs-12">
                 <div class="m-x-auto" style="width:270px;">
                  <h3 class="text-xs-center">Datum wählen</h3>
                  <div id="datepicker">
                      <?php datepicker_hafen("bensersiel", $datum); ?>  
                  </div>
              </div>
              </div>
            </div>
              <div class="col-md-6">
                <h3 class="text-xs-center m-t-2">Schiffahrt Langeoog</h3>
                <?php 
                  $fahrplan = new fahrplan();
                  $fahrplan->fahrplan_html("Bensersiel", $datum);
                ?>
              </div>
              <div class="col-md-6">
                
                <h3 class="text-xs-center m-t-2">MS Flinthörn</h3> 
                <?php
                  linieDamwerth("bensersiel", $datum);
                ?>
                <div class="alert alert-danger" role="alert">
                  <strong>Achtung!</strong><br /> Der Liegeplatz der MS Flinthörn befindet sich in Bensersiel hinter dem Sieltor gegenüber der Bushaltestelle.
                </div>
              </div>   
          </div>           

        <div class="alert alert-info m-t-2 m-b-3" role="alert">
          <?php include("inc/fahrplan_hinweis.php") ?>
        </div>
      </div>

      <!-- END Content -->

  <?php include('inc/footer.php') ?>