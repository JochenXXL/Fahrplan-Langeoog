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
            <h3 class="text-xs-center">Fahrplan Langeoog</h3>
            <p class="text-xs-center">Abfahrtszeiten der Fähre Langeoog am <?php echo wochentag($tag) .", den " . $datum ?>.</p>
            <div class="col-md-6">
                <div id="datepicker">
                    broken datepicker
                    <?php datepicker_hafen("langeoog", $datum); ?>  
                </div>
            </div>
            <div class="col-md-6">
              <?php 
                $fahrplan = new fahrplan();
                $fahrplan->fahrplan_html("Langeoog", $datum);
              ?>
            </div>   
          </div>          

        <div class="alert alert-info m-t-2 m-b-3" role="alert">
          <?php include("inc/fahrplan_hinweis.php") ?>
        </div>
      </div>

      <!-- END Content -->

  <?php include('inc/footer.php') ?>



    <div id="wrapper">
        <section>
          
            <h3 class="center">Fahrplan Langeoog</h3>
            <p class="center">Abfahrtszeiten der Fähre Langeoog am <?php echo wochentag($tag) .", den " . $datum ?>.</p>
            <div class="half">
                <div id="datepicker">
                    <?php datepicker_hafen("langeoog", $datum); ?>  
                </div>
            </div>
            <div class="half">
              <?php 
                $fahrplan = new fahrplan();
                $fahrplan->fahrplan_html("Langeoog", $datum);
              ?>
            </div>        
            <?php include("inc/fahrplan_hinweis.php") ?>

        </section>
