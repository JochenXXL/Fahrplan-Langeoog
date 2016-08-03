<?php
    $site_title = "Ausflüge Langeoog - Für Kinder & Erwachsene";
    $site_id = 8;
    $site_description = "Ausflüge Langeoog - Für Kinder und Erwachsene. Ausflugsfahrten und Erlebnisfahrten von Langeoog.";

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

          
            <h1 class="text-xs-center p-y-2">Ausflüge Langeoog</h3>
              
            <p class="p-b-1">Ausflüge von Langeoog mit der MS-Flinthörn und weiteren Schiffen bieten sowohl Kindern als auch Erwachsenen eine ganz neue Sicht auf die Insel Langeoog und das Weltnaturerbe Wattenmeer.</br>
            <strong>Soweit nicht anders angegeben, gelten die Abfahrtszeiten ab Langeoog Bahnhof!</strong></p>            
        
              <div class="col col-sm-12">  
                <?php ausfluege(); ?>         
              </div>          

                  
      </div>

      <!-- END Content -->

  <?php include('inc/footer.php') ?>