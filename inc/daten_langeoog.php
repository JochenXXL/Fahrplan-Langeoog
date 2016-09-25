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

	$feiertage = array(
			"01.05.2016",
			"05.05.2016",
			"16.05.2016",
			"03.10.2016",
			"25.12.2016",
			"26.12.2016",
			"01.01.2017"
		);

	//----------------------------
	// Fahrzeiten
	//----------------------------


	// Fähre um 7:10 
	$fahrplan[] = array(
		'zeit' => "7:10",
		'tag' => array (
				1, 2, 3, 4, 5, 6
			),
		'datum_von' => array(
						"19.03.2016",
						),
		'datum_bis' => array(
						"30.10.2016"
						),
		'faehrt_nicht' => array (
						"01.05.2016",
						"05.05.2016",
						"09.05.2016",
						"16.05.2016",
						"03.10.2016",
						"24.12.2016",
						"25.12.2016",
						"26.12.2016",
						"31.12.2016",
						),
	);

		// Fähre um 7:10 Winter
	$fahrplan[] = array(
		'zeit' => "7:10",
		'tag' => array (
				1, 2, 3, 4, 5
			),
		'datum_von' => array(
						"31.10.2016",
						),
		'datum_bis' => array(
						"18.03.2016"
						),
		'faehrt_nicht' => array (
						"24.12.2016",
						"25.12.2016",
						"26.12.2016",
						"31.12.2016",
						"01.01.2017"
						),
	);


	// Fähre um 8:20
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016"),
		'datum_bis' => array(
						"30.10.2016"),
		'faehrt_nicht' => array (
						"11.04.2016",
						"09.05.2016",
						"10.05.2016"
						),
	);

	// Fähre um 8:20 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				6, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);

		// Fähre um 8:20 WINTERFAHRPLAN SONDERFAHRT 26.12
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"26.12.2016"),
		'datum_bis' => array(
						"26.12.2016"),
		'faehrt_nicht' => "",
	);

	// Fähre um 9:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016",
						"29.08.2016",
						"01.05.2016",
						"05.05.2016",
						"16.05.2016",
						"03.10.2016",),
		'datum_bis' => array(
						"17.06.2016",
						"30.10.2016",
						"01.05.2016",
						"05.05.2016",
						"16.05.2016",
						"03.10.2016",),
		'faehrt_nicht' => "",
	);

	// Fähre um 9:30 SOMMERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"09.05.2016",
						"18.06.2016"),
		'datum_bis' => array(
						"09.05.2016",
						"28.08.2016"),
		'faehrt_nicht' => "",
	);


	// Fähre um 10:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "10:30",
		'tag' => array (
				1, 2, 3, 4
			),
		'datum_von' => array(
						"19.03.2016",
						"29.08.2016"),
		'datum_bis' => array(
						"17.06.2016",
						"30.10.2016"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

	// Fähre um 10:30 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "10:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => ""
	);

	// Fähre um 10:30 Sonderfahrt 5.5.16 - 08.05.16
	$fahrplan[] = array(
		'zeit' => "10:30",
		'tag' => array (
				4, 5, 6, 0
			),
		'datum_von' => array(
						"05.05.2016"),
		'datum_bis' => array(
						"08.05.2016"),
		'faehrt_nicht' => ""
	);


	// Fähre um 11:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016",
						"29.08.2016",
						"01.05.2016",
						"05.05.2016",
						"16.05.2016",
						"03.10.2016",
						"25.12.2016",
						"26.12.2016",
						"01.01.2017"),
		'datum_bis' => array(
						"17.06.2016",
						"30.10.2016",
						"01.05.2016",
						"05.05.2016",
						"16.05.2016",
						"03.10.2016",
						"25.12.2016",
						"26.12.2016",
						"01.01.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 11:30 SOMMERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"18.06.2016"),
		'datum_bis' => array(
						"28.08.2016"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

	// Fähre um 13:30 SOMMERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "13:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"18.06.2016"),
		'datum_bis' => array(
						"28.08.2016"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);


	// Fähre um 14:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "14:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.03.2016",
						"29.08.2016"),
		'datum_bis' => array(
						"17.06.2016",
						"30.10.2016"),
		'faehrt_nicht' => "",
	);

	// Fähre um 14:30 WINTERRFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "14:30",
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

	// Fähre um 16:30 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "16:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.11.2016"),
		'datum_bis' => array(
						"18.03.2017"),
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
						"30.10.2016"),
		'faehrt_nicht' => "",
	);

	// Fähre um 18:00 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "18:00",
		'tag' => array (
				1, 2, 3, 4, 5, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"18.03.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 19:00 SONNTAG SOMMERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "17:30",
		'tag' => array (
				0
			),
		'datum_von' => array(
						"18.06.2016"),
		'datum_bis' => array(
						"28.08.2016"),
		'faehrt_nicht' => "",
	);

	// Fähre um 19:30 Sonderfahrt am 13.06.2016
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				1
			),
		'datum_von' => array(
						"13.06.2016"),
		'datum_bis' => array(
						"13.06.2016"),
		'faehrt_nicht' => "",
	);


	// Fähre um 20:00
	$fahrplan[] = array(
		'zeit' => "20:00",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"29.08.2016"),
		'datum_bis' => array(
						"30.10.2016"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

?>