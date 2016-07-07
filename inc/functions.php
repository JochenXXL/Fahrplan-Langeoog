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


          $.datepicker.setDefaults(

            $.extend($.datepicker.regional['de'])

          );

          $('#datepicker').datepicker({
              dateFormat: 'dd.mm.yy',
              defaultDate: '" . $datum . "',
              minDate: 0,
              maxDate: '30.10.2016',
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
    <ins class="adsbygoogle"
         style="display:inline-block;
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

?>