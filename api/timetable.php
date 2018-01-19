<?php
header('Content-type: application/json');

include('../inc/functions.php');

// get the date for the timetable
date_default_timezone_set("Europe/Berlin");
if (isset($_GET["date"]) && $_GET["date"] != null){
    $date = $_GET["date"];
}else {
    $date = date("d.m.Y");
}  
$day = date("w", strtotime($date));

// get the location for the timetable
if (isset($_GET["location"]) && $_GET["location"] != null){
  $location = $_GET["location"];
}else {
  $location = 'Langeoog';
}

// get the Schiffahrt Langeoog trips
function fahrplan_json($hafen, $datum) {
    if($hafen == "Langeoog"){
      include("../inc/daten_langeoog.php");
    } else {
      include("../inc/daten_bensersiel.php");
    }
    $tag = date("w", strtotime($datum));

    $trips = [];

    //loop through the whole array and get trips for the given date
		foreach($fahrplan as $fahrt) {
      if (in_day_range($tag, $fahrt["tag"] ) && 
          in_date_range($fahrt["datum_von"], $fahrt["datum_bis"],$datum) &&
          !faehrt_nicht($fahrt["faehrt_nicht"], $datum)){
            $trip = $fahrt["zeit"];
          if (strlen($fahrt["zeit"]) == 4) {
             $trip = '0' . $trip;
          }     
          array_push($trips, $trip );           
      }   
    }

    //remove duplicate trips
    $trips = array_unique($trips);
    
    //convert each trip to trip object
    $result = [];
    $key = 1;
    foreach ($trips as $trip) {
      $trip_object = array(
        'key' => $trip . 'SL',
        'time' => $trip,
        'company' => 'SL'
      );
      $key = $key + 1;
      array_push($result, $trip_object);
    }

  return $result;
}

//get the MS Flinthörn Trips
function getTripsFlinthoern($hafen, $datum) {
    if ($hafen === 'Langeoog') {
      $hafen = 'langeoog';
    } else {
      $hafen = 'bensersiel';
    }
    $data = file_get_contents("../inc/damwerth_" . $hafen . ".json");
    $json = json_decode($data, true);
    $counter = count($json);
    $tag = date("w", strtotime($datum));
  
    $trips = [];
    
    for ($i=0; $i < $counter; $i++) { 
        if ($json[$i] != NULL) {
            if (strtotime($json[$i]['datum_von']) <= strtotime($datum) && strtotime($json[$i]['datum_bis']) >= strtotime($datum)) {
                foreach ($json[$i]["fahrten"] as $fahrt) {
                    if (in_day_range($tag, $fahrt["tag"])) {
                        $count = 0;
                        foreach ($fahrt["zeit"] as $fahrzeit) {
                            array_push($trips, $fahrzeit );
                            $count += 1;
                        }
  
                    }
                }
  
            }
        }
    }

    //convert each trip to trip object
    $result = [];
    $key = 1;
    foreach ($trips as $trip) {
      $trip_object = array(
        'key' => $trip . 'MS',
        'time' => $trip,
        'company' => 'MS'
      );
      $key = $key + 1;
      array_push($result, $trip_object);
    }
    return $result;  
  }


$timeTable_SL = fahrplan_json($location, $date);
$timeTable_MS = getTripsFlinthoern($location, $date);

// merge both company trips
$result = array_merge($timeTable_SL, $timeTable_MS);

//sort trips by time
usort($result, function($a, $b)
{
    return strcmp($a["key"], $b["key"]);;
});

// echo json_encode($timeTable_SL);
echo json_encode($result);

?>