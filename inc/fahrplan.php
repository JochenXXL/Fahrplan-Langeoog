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
		<ul class="fahrplan">
              <th> 	<h3 class="center">
                  		<?php echo $datum; ?> 
                  	</h3> 
              </th>
        <?php

		foreach($fahrplan as $fahrt) {
                   if (in_day_range($tag, $fahrt["tag"] ) && 
                       in_date_range($fahrt["datum_von"], $fahrt["datum_bis"],$datum) &&
                       !faehrt_nicht($fahrt["faehrt_nicht"], $datum)){     
                    
                        echo "<tr> <li class='center'>" . $fahrt["zeit"] . "</li> </tr>";           
        			}   
       	} 
       	?>
       	</ul>
       	<?php           
            
	}	
}
