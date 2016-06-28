<?php
    $site_title = "Fahrplan Langeoog";
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
            <div id="bottom_add">
                <?php adsense_bottom(); ?>
            </div>
        </section>
    <?php
      include("inc/footer.php");
    ?>