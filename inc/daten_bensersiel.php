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
						"19.03.2016"
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
						"01.11.2016"
						),
		'datum_bis' => array(
						"18.03.2017"
						),
		'faehrt_nicht' => $faehrt_nicht_am,
	);


	// Fähre um 8:20
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"18.06.2016",
						"02.04.2016",	//Sonderfahrt
						"09.04.2016",	//Sonderfahrt
						"23.04.2016",	//Sonderfahrt
						"30.04.2016",	//Sonderfahrt
						"08.05.2016"), 	//Sonderfahrt
		'datum_bis' => array(
						"28.08.2016",
						"03.04.2016",	//Sonderfahrt
						"10.04.2016",	//Sonderfahrt
						"24.04.2016",	//Sonderfahrt
						"30.04.2016",	//Sonderfahrt
						"08.05.2016"), 	//Sonderfahrt
		'faehrt_nicht' => "",
	);


	// Fähre um 09:00 Sonderfahrt 1.5/5.5
	$fahrplan[] = array(
		'zeit' => "9:00",
		'tag' => array (
				0,1,2,3,4,5,6
			),
		'datum_von' => array(
						"01.05.2016",
						"05.05.2016"),
		'datum_bis' => array(
						"01.05.2016",
						"07.05.2016"),
		'faehrt_nicht' => "",
	);


	// Fähre um 9:30
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);


	// Fähre um 10:45 Sonderfahrt
	$fahrplan[] = array(
		'zeit' => "10:45",
		'tag' => array (
				0,1,2,3,4,5,6
			),
		'datum_von' => array(
						"02.04.2016",
						"05.05.2016"),
		'datum_bis' => array(
						"03.04.2016",
						"08.05.2016"),
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
						"02.11.2016"),
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
						"02.11.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);

	// SONDERFAHRT 15:30
	$fahrplan[] = array(
		'zeit' => "15:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"25.04.2016"),
		'datum_bis' => array(
						"28.04.2016"),
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


	// Fähre um 19:00
	$fahrplan[] = array(
		'zeit' => "19:00",
		'tag' => array (
				0
			),
		'datum_von' => array(
						"18.06.2016"),
		'datum_bis' => array(
						"28.08.2016"),
		'faehrt_nicht' => "",
	);

	// Fähre um 19:30
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"19.03.2016",
						"24.03.2016",
						"04.05.2016",
						"25.05.2016"),
		'datum_bis' => array(
						"18.03.2017",
						"24.03.2016",
						"04.05.2016",
						"25.05.2016"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

	// Fähre um 19:30 Sonderfahrt
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				0,1,2,3,4,5,6
			),
		'datum_von' => array(
						"24.03.2016",
						"04.05.2016",
						"25.05.2016"),
		'datum_bis' => array(
						"24.03.2016",
						"04.05.2016",
						"25.05.2016"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);


	// Fähre um 21:30 Sonderfahrt
	$fahrplan[] = array(
		'zeit' => "21:30",
		'tag' => array (
				6
			),
		'datum_von' => array(
						"23.07.2016"),
		'datum_bis' => array(
						"23.07.2016"),
		'faehrt_nicht' => "",
	);

?>