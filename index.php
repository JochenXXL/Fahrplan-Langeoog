    <!-- Site Title, Description and Includes -->
    <?php
      $site_title = "Fahrplan Langeoog | Abfahrtszeiten Fähre Langeoog";
      $site_description = "Fahrplan Langeoog - einfach und schnell die Abfahrtszeiten der Fähre Langeoog und Fähre Bensersiel erfahren.";

      include("inc/header.php");
      include("inc/functions.php");
      include("inc/fahrplan.php");

      date_default_timezone_set("Europe/Berlin");
      $datum = date("d.m.Y");
      $tag   = date("w", strtotime($datum));
    ?>
        
    
    <!-- Bild Startseite -->
    <div class="jumbotron" id="jumbostart">
      <div class="container">
      </div>
    </div>
    
    <div class="container" id="main-content">
      <div class="row">

      <!-- Grid Startseite -->

      <!-- Content -->
        <div class="col col-sm-8">

        <h1 class="text-xs-center m-t-1 m-b-2">Aktuelle Abfahrtszeiten ( Linie )</h1>
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
                <a href="langeoog.php" class="text-xs-center btn btn-primary">Weitere Abfahrten</a>              
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
                <a href="bensersiel.php" class="btn btn-primary">Weitere Abfahrten</a>                        
              </div>              
            </div>
          </div>
        </div>

        <div class="alert alert-info col col-sm-10 col-sm-offset-1 m-t-2 m-b-3" role="alert">
          <?php include("inc/fahrplan_hinweis.php") ?>
        </div>

        <h1 class="text-xs-center m-t-2 m-b-1">Charterfahrten</h1>               
        <div class="card-deck-wrapper ">
          <div class="card-deck">
            <div class="col col-md-6">
              <div class="card">
                <img class="card-img-top" src="img/Reederei_Freimuth.jpg" alt="Reederei Freimuth">
                <div class="card-block">
                  <h4 class="card-title">Reederei Freimuth</h4>
                  <p class="card-text">Langeoog Bensersiel 240€ für 12 Personen usw</p>
                  <div class="center">
                    <a href="bensersiel.php" class="btn btn-primary">mehr erfahren</a>
                  </div> 
                </div>
              </div>
            </div>
            <div class="col col-md-6">
              <div class="card">
                <img class="card-img-top" src="img/Reederei_Freimuth.jpg" alt="Reederei Freimuth">
                <div class="card-block">
                  <h4 class="card-title">Reederei Damwerth</h4>
                  <p class="card-text">Hochzeitsfahrten usw und so fort</p>
                  <div class="center">
                    <a href="bensersiel.php" class="btn btn-primary">mehr erfahren</a>
                  </div> 
                </div>
              </div>
            </div>
          </div>
        </div>     

        <h1 class="text-xs-center m-t-3 m-b-1">Ausflüge</h1>
        <div class="row m-b-2">
          <div class="well col col-sm-10 col-sm-offset-1">            
            <table class="table table-striped">
              <thead>
                <tr class="table-striped">
                  <th>Titel</th>
                  <th>Datum</th>
                  <th>Zeit</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <th scope="row">Seeehundsfahrt</th>
                  <td>23.07.16</td>
                  <td>13:00</td>
                </tr>
                <tr>
                  <th scope="row">2</th>
                  <td>Jacob</td>
                  <td>Thornton</td>
                </tr>
                <tr>
                  <th scope="row">3</th>
                  <td>Larry</td>
                  <td>the Bird</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>

        <div class="row">
          <?php adsense_bottom(); ?>
        </div>

      </div>

      <!-- END Content -->

      <!-- Add rechts -->
      <div class="col col-sm-4 m-t-3">
        <?php adsense_right(); ?>
       
      </div>
      <!-- END Add rechts -->
    </div>
  </div>
  
  <?php include('inc/footer.php') ?>