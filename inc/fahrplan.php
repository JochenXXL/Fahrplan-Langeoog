<?php

class fahrplan {

	function fahrplan_html($hafen, $datum) {
		if($hafen == "Langeoog"){
			include("inc/daten_langeoog.php");
		} else {
			include("inc/daten_bensersiel.php");
		}
		$tag = date("w", strtotime($datum));

		?>
		<table class="table table-bordered table-striped">
              <th> 	<h4 class="text-xs-center">
                  		<?php echo $datum; ?> 
                  	</h4> 
              </th>
    <?php

    $fahrzeiten = [];

		foreach($fahrplan as $fahrt) {
                   if (in_day_range($tag, $fahrt["tag"] ) && 
                       in_date_range($fahrt["datum_von"], $fahrt["datum_bis"],$datum) &&
                       !faehrt_nicht($fahrt["faehrt_nicht"], $datum)){     
                        array_push($fahrzeiten, $fahrt["zeit"] );           
        			}   
       	}
    $fahrzeiten = array_unique($fahrzeiten);           
    foreach($fahrzeiten as $fahrt) {
       echo "<tr> <td class='text-xs-center'>" . $fahrt . "</td> </tr>";
    } 
   	?>
   	</table>
   	<?php
    
	}
	
}
