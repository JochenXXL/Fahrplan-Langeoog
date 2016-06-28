<?php
    $site_title = "Fahrplan Bensersiel";
    include("inc/header.php");
    include("inc/functions.php");
    include("inc/fahrplan.php");

    date_default_timezone_set("Europe/Berlin");
    if (isset($_GET["datum"]) && $_GET["datum"] != null){
      $datum = $_GET["datum"];
    }else {
      $datum = date("d.m.Y");
    }  
    $tag = date("w", strtotime($datum));
?>
    <div id="wrapper">
        <section>
            <div id="top_add">
                <?php adsense_top(); ?>
            </div>
            <h3 class="center">Fahrplan Bensersiel</h3>
            <p class="center">Abfahrtszeiten der Fähre Bensersiel am <?php echo wochentag($tag) .", den " . $datum ?>.</p>
            <div class="half">
                <div id="datepicker">
                    <?php datepicker_hafen("bensersiel", $datum); ?>  
                </div>
            </div>
            <div class="half">
              <?php 
                $fahrplan = new fahrplan();
                $fahrplan->fahrplan_html("Bensersiel", $datum);
              ?>
            </div>        
            <?php include("inc/fahrplan_hinweis.php") ?>
            <div id="bottom_add">
                <?php adsense_bottom(); ?>
            </div>
        </section>
    <?php
      include("inc/footer.php");
    ?>