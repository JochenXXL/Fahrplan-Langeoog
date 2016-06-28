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

    <div id="wrapper">
    	<section >
	        <div id="top_add">
	              <?php adsense_top(); ?>
	        </div>
	        <div id="langeoog" class="half">
		        <h3 class="center">Fahrplan Langeoog</h3>
		        <p class="center">Abfahrtszeiten für Heute ab Langeoog </p>		        
		        <?php 
		         	$fahrplan = new fahrplan();
		         	$fahrplan->fahrplan_html("Langeoog", $datum);
		        ?>
		        <a href="langeoog.php" class="weitere_abfahrten">Weitere Abfahrten</a>
	        </div>            
	        <div id="langeoog" class="half">
	        	<h3 class="center">Fahrplan Bensersiel</h3>
	        	<p class="center">Abfahrtszeiten für Heute ab Bensersiel </p>
		        <?php 
		         	$fahrplan->fahrplan_html("Bensersiel", $datum);
		        ?>
	            <a href="bensersiel.php" class="weitere_abfahrten">Weitere Abfahrten</a>
	        </div>        
        	<?php include("inc/fahrplan_hinweis.php") ?>
	        <div id="bottom_add">
				<?php adsense_bottom(); ?>
	        </div> 
      	</section>
	<?php
	  include("inc/footer.php");
	?>