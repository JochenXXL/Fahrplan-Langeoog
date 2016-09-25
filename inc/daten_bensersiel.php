<?php
	
	// Ausnhamen für Feiertage
	$faehrt_nicht_am = array(
			"01.05.2016",
			"05.05.2016",
			"16.05.2016",
			"03.10.2016",
			"24.12.2016",
			"25.12.2016",
			"26.12.2016",
			"31.12.2016",
			"01.01.2017"
		);

	//----------------------------
	// Fahrzeiten
	//----------------------------


	// Fähre um 6:45 
	$fahrplan[] = array(
		'zeit' => "6:45",
		'tag' => array (
				1, 2, 3, 4, 5, 6
			),
		'datum_von' => array(
						"29.08.2016"
						),
		'datum_bis' => array(
						"30.10.2016"
						),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

	// Fähre um 6:45 WINTER
	$fahrplan[] = array(
		'zeit' => "6:45",
		'tag' => array (
				1, 2, 3, 4, 5
			),
		'datum_von' => array(
						"31.10.2016"
						),
		'datum_bis' => array(
						"18.03.2017"
						),
		'faehrt_nicht' => $faehrt_nicht_am,
	);


	// Fähre um 9:30
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"29.08.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);


	// Fähre um 11:30
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016"),
		'datum_bis' => array(
						"30.10.2016"),
		'faehrt_nicht' => "",
	);


	// Fähre um 13:30
	$fahrplan[] = array(
		'zeit' => "13:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 15:30 WINTER
	$fahrplan[] = array(
		'zeit' => "15:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 16:00
	$fahrplan[] = array(
		'zeit' => "16:00",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016"),
		'datum_bis' => array(
						"30.10.2016"),
		'faehrt_nicht' => "",
	);


	// Fähre um 17:30
	$fahrplan[] = array(
		'zeit' => "17:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);



	// Fähre um 19:30
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"29.08.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

?>