<?php 

function in_day_range($tag, $tage) {
	if (in_array($tag, $tage)) {
		return true;}
	else {
		return false;
	}
}

function in_date_range($von, $enddatum, $datum) {
	foreach($von as $id => $startdatum){
        if(
            strtotime($startdatum) <= strtotime($datum) and 
            strtotime($enddatum[$id]) >= strtotime($datum)
           ){
            return true;
            exit;
            }
    }
}

function faehrt_nicht($tage, $datum){
    if($tage != null){
        foreach($tage as $tag) {
            if (strtotime($tag) == strtotime($datum)) {
                return true;
                exit;
            }
        }
    }   
}

function wochentag($tag){
    switch ($tag) {
    case "1":
        return "Montag";
    break;
    case "2":
        return "Dienstag";
    break;
    case "3":
        return "Mittwoch";
    break;
    case "4":
        return "Donnerstag";
    break;
    case "5":
        return "Freitag";
    break;
    case "6":
        return "Samstag";
    break;
    case "0":
        return "Sonntag";
    break;
    }
}

function datepicker_hafen($hafen, $datum){
    echo "

        <script>

        $(function(){


          $.datepicker.setDefaults( $.datepicker.regional[ 'de' ] );

          $('#datepicker').datepicker({
              dateFormat: 'dd.mm.yy',
              defaultDate: '" . $datum . "',
              minDate: 0,
              maxDate: '27.10.2019',
              firstDay: 1,
              onSelect: function(dateText) {
                $(this).change();
              }
            })
            .change(function() {
              window.location.href = '" . $hafen . ".php?datum=' + this.value;
            });

        });

        </script>
        ";
}

function adsense_top(){
    echo '
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Fahrplan Langeoog Top -->
    <ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-8741291600421705"
    data-ad-slot="9791188180"
    data-ad-format="auto"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}

function adsense_bottom(){
    echo '
    <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Fahrplan Langeoog Buttom -->
    <ins class="adsbygoogle"
    style="display:block"
    data-ad-client="ca-pub-8741291600421705"
    data-ad-slot="3810629386"
    data-ad-format="auto">
    </ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>';
}

function adsense_right(){
    echo '
    
    <!-- Fahrplan Langeoog Rechts -->
    <ins class="adsbygoogle center-block"
         style="display:block;
         width:300px;
         height:600px"
         data-ad-client="ca-pub-8741291600421705"
         data-ad-slot="7339063787">
    </ins>
    <script>
    (adsbygoogle = window.adsbygoogle || []).push({});
    </script>

    ';
}

function ausfluege($num = NULL){

    $data = file_get_contents("inc/ausflug.json");
    $json = json_decode($data, true);
    $counter = count($json);

    if (isset($num)) {
        $numcount = $num;
    } else {
        $numcount = $counter;
    }

    echo '
        <div class="table-responsive">
         <table class="table table-striped">
          <thead>
            <tr class="table-striped">
              <th>Titel</th>
              <th>Datum</th>
              <th>Zeit</th>
              
            </tr>
          </thead>
          <tbody>
    ';

    for ($i=0; $i < $counter; $i++) {
        if ($json[$i] != NULL) {
            if (strtotime($json[$i]['Datum']) > strtotime(date("d.m.Y")) && $numcount > 0) {
                $numcount--;
                echo '<tr>';
                echo '<th scope="row">' . $json[$i]['Titel'] . '</th>';
                echo '<td>' . $json[$i]['Datum'] . '</th>';
                echo '<td>' . $json[$i]['Uhrzeit'] . '</th>';
/*                if ($json[$i]['Ticket'] != "") {
                    echo '<td>' . '<a href="' . $json[$i]['Ticket'] . '" target="_blank" class="btn btn-success btn-sm">Ticket kaufen</a>' . '</th>';
                } else {
                    echo '<td></th>';
                }*/
                echo '</tr>';
            }

        } 
    }

    echo '</tbody></table></div>';
}

function linieFreimuth($hafen, $datum) {
    $data = file_get_contents("inc/freimuth_" . $hafen . ".json");
    $json = json_decode($data, true);
    $counter = count($json);
    $tag = date("w", strtotime($datum));

    $html = "<table class='table table-bordered table-striped'>
              <th><h4 class='text-xs-center'>";
    $html .= $datum; 
    $html .= "</h4></th>";

    for ($i=0; $i < $counter; $i++) { 
        if ($json[$i] != NULL) {
            if (strtotime($json[$i]['datum_von']) <= strtotime($datum) && strtotime($json[$i]['datum_bis']) >= strtotime($datum)) {
                foreach ($json[$i]["fahrten"] as $fahrt) {
                    if (in_day_range($tag, $fahrt["tag"])) {
                        foreach ($fahrt["zeit"] as $fahrzeit) {
                            $html .= "<tr><td class='text-xs-center'>" . $fahrzeit . "</td></tr>";
                        }

                    }
                }

            }
        }
    }

    $html .= "</table>";
                
    echo $html;  
}

function linieDamwerth($hafen, $datum) {
    $data = file_get_contents("inc/damwerth_" . $hafen . ".json");
    $json = json_decode($data, true);
    $counter = count($json);
    $tag = date("w", strtotime($datum));

    $html = "<table class='table table-bordered table-striped'>
              <th><h4 class='text-xs-center'>";
    $html .= $datum; 
    $html .= "</h4></th>";

    for ($i=0; $i < $counter; $i++) { 
        if ($json[$i] != NULL) {
            if (strtotime($json[$i]['datum_von']) <= strtotime($datum) && strtotime($json[$i]['datum_bis']) >= strtotime($datum)) {
                foreach ($json[$i]["fahrten"] as $fahrt) {
                    if (in_day_range($tag, $fahrt["tag"]) && ($fahrt["faehrt_nicht"] !== $datum)) {
                        $count = 0;
                        foreach ($fahrt["zeit"] as $fahrzeit) {
                            $html .= "<tr><td class='text-xs-center'>" . $fahrzeit . " " . $fahrt["hafen"][$count] . "</td></tr>";
                            $count += 1;
                        }

                    }
                }

            }
        }
    }

    $html .= "</table>";
                
    echo $html;  
}

?>