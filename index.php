    <?php
      $site_title = "Fahrplan Langeoog | Abfahrtszeiten Fähre Langeoog";
      $site_id = 1;
      $site_description = "Fahrplan Langeoog - einfach und schnell die Abfahrtszeiten der Fähre Langeoog und Fähre Bensersiel erfahren.";

      include("inc/header.php");
      include("inc/fahrplan.php");

      date_default_timezone_set("Europe/Berlin");
      $datum = date("d.m.Y");
      $tag   = date("w", strtotime($datum));
    ?>
        
      <!-- Content -->
      <div class="col col-lg-8 col-lg-pull-4">

        <h1 class="text-xs-center p-t-1 p-b-2">Fahrplan Fähre Langeoog ( Linie )</h1>
        <p>Auf Fahrplan-Langeoog.de finden Sie die aktuellen Abfahrtszeiten der Fähre Langeoog, die Abfahrtszeiten für Ausflugsfahrten sowie Informationen zu Charterfahrten von und nach Langeoog. Soweit nicht anders angegeben, gelten die Abfahrtszeiten der Fähre ab Bensersiel Hafen sowie der Inselbahn ab Langeoog Bahnhof. </p>
        <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title text-xs-center">ab Langeoog</h3>
                <p class="card-text">
                  <?php 
                    $fahrplan = new fahrplan();
                    $fahrplan->fahrplan_html("Langeoog", $datum);
                  ?>
                </p>
                <div class="text-xs-center">
                  <a href="langeoog.php" class="btn btn-primary">Weitere Abfahrten</a> 
                </div>             
              </div>
            </div>
            <div class="card">
              <div class="card-block">
                <h3 class="card-title text-xs-center">ab Bensersiel</h3>
                <p class="card-text">
                  <?php 
                    $fahrplan = new fahrplan();
                    $fahrplan->fahrplan_html("Bensersiel", $datum);
                  ?>
                </p>
                <div class="text-xs-center">                 
                  <a href="bensersiel.php" class="btn btn-primary">Weitere Abfahrten</a>
                </div>                        
              </div>              
            </div>
          </div>
        </div>

        <div class="alert alert-info m-t-2 m-b-3" role="alert">
          <?php include("inc/fahrplan_hinweis.php") ?>
        </div>

        <!-- Linie Damwerth -->
        <h2 class="text-xs-center m-t-2 m-b-1">Fahrplan Fähre MS Flinthörn ( Linie )</h2>
        <p>Ab dem ersten April 2017 werden von der <a href="reederei-damwerth.php">Reederei Damwerth</a> neben Ausflugsfahrten und Charterfahrten auch günstige Linienfahrten mit der Fähre MS Flinthörn von Bensersiel nach Langeoog und zurück angeboten. <a href="reederei-damwerth.php">Mehr Informationen</a></p>

         <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title text-xs-center">ab Langeoog</h3>
                <p class="card-text">
                  <?php 
                    linieDamwerth("langeoog", $datum);
                  ?>
                </p>
                <div class="text-xs-center">
                  <a href="langeoog.php" class="btn btn-primary">Weitere Abfahrten</a> 
                </div>             
              </div>
            </div>
            <div class="card">
              <div class="card-block">
                <h3 class="card-title text-xs-center">ab Bensersiel</h3>
                <p class="card-text">
                  <?php 
                    linieDamwerth("bensersiel", $datum);
                  ?>
                </p>
                <div class="text-xs-center">                 
                  <a href="bensersiel.php" class="btn btn-primary">Weitere Abfahrten</a>
                </div>                        
              </div>              
            </div>
          </div>
        </div>


        <!-- Linie Freimuth 
        <h2 class="text-xs-center m-t-3 m-b-1">Linie Freimuth</h2>
        <p>Seit Anfang 2017 führt die <a href="reederei-freimuth.php">Reederei Freimuth</a>  ebenfalls Linienverkehr auf der Strecke Bensersiel-Langeoog und zurück durch. Da nur 12 Plätze verfügbar sind, wird um rechtzeitige Reservierung unter 0151/23788565 gebeten. <a href="reederei-freimuth.php">Mehr Informationen</a></p>

         <div class="card-deck-wrapper">
          <div class="card-deck">
            <div class="card">
              <div class="card-block">
                <h3 class="card-title text-xs-center">ab Langeoog</h3>
                <p class="card-text">
                  <?php 
                    linieFreimuth("langeoog", $datum);
                  ?>
                </p>
                <div class="text-xs-center">
                  <a href="langeoog.php" class="btn btn-primary">Weitere Abfahrten</a> 
                </div>             
              </div>
            </div>
            <div class="card">
              <div class="card-block">
                <h3 class="card-title text-xs-center">ab Bensersiel</h3>
                <p class="card-text">
                  <?php 
                    linieFreimuth("bensersiel", $datum);
                  ?>
                </p>
                <div class="text-xs-center">                 
                  <a href="bensersiel.php" class="btn btn-primary">Weitere Abfahrten</a>
                </div>                        
              </div>              
            </div>
          </div>
        </div>
        -->

        <h2 class="text-xs-center m-t-3 m-b-1">Charterfahrten</h2>               
        <div class="card-deck-wrapper ">
          <div class="card-deck">
            <div class="col col-md-6">
              <div class="card">
                <img class="card-img-top center-block" src="img/Reederei_Damwerth.jpg" alt="Reederei Freimuth">
                <div class="card-block">
                  <h4 class="card-title">Reederei Damwerth</h4>
                  <p class="card-text">Schiffsausflüge und Erlebnisfahrten in familiärer Atmosphäre mit der MS Flinthörn. </p>
                  <div class="text-xs-center">
                    <a href="bensersiel.php" class="btn btn-primary">mehr erfahren</a>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col col-md-6 m-b-2">
              <div class="card">
                <img class="card-img-top center-block" src="img/Reederei_Freimuth_small.jpg" alt="Reederei Freimuth">
                <div class="card-block">
                  <h4 class="card-title">Reederei Freimuth</h4>
                  <p class="card-text">Individuelle Ausflugsfahrten sowie Inseltaxi nach Langeoog/Bensersiel (240€/Fahrt) für bis zu zwölf Personen.</p>
                  <div class="text-xs-center">
                    <a href="reederei-freimuth.php" class="btn btn-primary">mehr erfahren</a>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>     


        <h2 class="text-xs-center m-t-3 m-b-1">Ausflüge</h2>
        <p>Soweit nicht anders angegeben, gelten die Abfahrtszeiten ab Langeoog Bahnhof.</p>
        <div class="row m-b-2">
          <div class="col col-sm-12">  
            <?php ausfluege(5); ?>          
          </div>
          <div class="text-xs-center">                 
            <a href="ausfluege-langeoog.php" class="btn btn-primary">Weitere Ausflüge</a>
          </div> 

          
        </div> 

      </div>

      <!-- END Content -->

  <?php include('inc/footer.php') ?>