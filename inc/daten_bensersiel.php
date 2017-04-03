<?php
	
	// Ausnahme *1
	$faehrt_nicht_am = array(
			"14.04.2017",
			"17.04.2017",
			"01.05.2017",
			"25.05.2017",
			"05.06.2017",
			"03.10.2017",
			"31.10.2017",
			"24.12.2017",
			"25.12.2017",
			"26.12.2017",
			"31.12.2017"
		);

	// Ausnahme *2
	$faehrt_auch_an = array(
			"14.04.2017",
			"17.04.2017",
			"01.05.2017",
			"25.05.2017",
			"05.06.2017",
			"03.10.2017",
			"31.10.2017",
			"24.12.2017",
			"25.12.2017",
			"26.12.2017",
			"31.12.2017"
		);

	// Ausnahme *3/*4
	$feiertage = array(
			"14.04.2017",
			"17.04.2017",
			"01.05.2017",
			"25.05.2017",
			"05.06.2017",
			"03.10.2017",
			"31.10.2017",
			"25.12.2017",
			"26.12.2017"
		);

	// Ausnahme *5
	$faehrt_auch_am = array(
		"13.04.2017",
		"24.05.2017",
		"14.06.2017"
	);





	//----------------------------
	// Fahrzeiten
	//----------------------------


	// Fähre um 6:45 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "6:45",
		'tag' => array (
				1, 2, 3, 4, 5
			),
		'datum_von' => array(
						"31.10.2016",
						"06.11.2017"
						),
		'datum_bis' => array(
						"31.03.2017",
						"31.03.2018"
						),
		'faehrt_nicht' => $feiertage,
	);

	// Fähre um 6:45 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "6:45",
		'tag' => array (
				1, 2, 3, 4, 5, 6
			),
		'datum_von' => array(
						"01.04.2017",
						"04.09.2017"
						),
		'datum_bis' => array(
						"16.06.2017",
						"05.11.2017"
						),
		'faehrt_nicht' => $feiertage,
	);

	// Fähre um 6:45 SOMMERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "6:45",
		'tag' => array (
				1, 2, 3, 4, 5, 6
			),
		'datum_von' => array(
						"17.06.2017"
						),
		'datum_bis' => array(
						"03.09.2017"
						),
		'faehrt_nicht' => "",
	);


	// Fähre um 8:20 SOMMER
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"17.06.2017"),
		'datum_bis' => array(
						"03.09.2017"),
		'faehrt_nicht' => "",
	);

	// SONDERFAHRTEN um 8:20 ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"07.04.2017",
						"14.04.2017",
						"16.04.2017",
						"21.04.2017"
						),
		'datum_bis' => array(
						"09.04.2017",
						"15.04.2017",
						"17.04.2017",
						"23.04.2017"
						),
		'faehrt_nicht' => "",
	);


	// Fähre um 9:30 WINTER, ZWISCHEN, SOMMER
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"31.03.2018"),
		'faehrt_nicht' => "",
	);

	// SONDERFAHRT um 10:45 ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "10:45",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"15.04.2017",
						"22.04.2017"),
		'datum_bis' => array(
						"15.04.2017",
						"22.04.2017"),
		'faehrt_nicht' => "",
	);


	// Fähre um 11:30 ZWISCHEN, SOMMER
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017"),
		'datum_bis' => array(
						"05.11.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 11:30 SONDERFHART WEIHNACHTEN
/*	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				1, 2, 3, 4, 5
			),
		'datum_von' => array(
						"26.12.2016"),
		'datum_bis' => array(
						"30.12.2016"),
		'faehrt_nicht' => "",
	);*/


	// Fähre um 13:30 WINTER, SOMMER, ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "13:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"31.03.2018"),
		'faehrt_nicht' => "",
	);

	// Fähre um 15:30 WINTER
	$fahrplan[] = array(
		'zeit' => "15:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"01.02.2017",
						"06.11.2017"
						),
		'datum_bis' => array(
						"31.03.2017",
						"31.03.2018"
						),
		'faehrt_nicht' => "",
	);

/*	// Fähre um 15:30 SONDERFHART WEIHNACHTEN
	$fahrplan[] = array(
		'zeit' => "15:30",
		'tag' => array (
				1, 2, 3, 4
			),
		'datum_von' => array(
						"26.12.2016"),
		'datum_bis' => array(
						"06.01.2017"),
		'faehrt_nicht' => "",
	);*/

	// Fähre um 16:00 WINTER, ZWISCHEN, SOMMER
	$fahrplan[] = array(
		'zeit' => "16:00",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017"),
		'datum_bis' => array(
						"05.11.2017"),
		'faehrt_nicht' => "",
	);


	// Fähre um 17:30 WINTER, ZWISCHEN, SOMMER
	$fahrplan[] = array(
		'zeit' => "17:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"31.10.2016"),
		'datum_bis' => array(
						"31.03.2018"),
		'faehrt_nicht' => "",
	);


	// Fähre um 19:00 SOMMER
	$fahrplan[] = array(
		'zeit' => "19:00",
		'tag' => array (
				0
			),
		'datum_von' => array(
						"17.06.2017"),
		'datum_bis' => array(
						"03.09.2017"),
		'faehrt_nicht' => "",
	);


	// Fähre um 19:30 WINTER
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"31.10.2016",
						"06.11.2017"),
		'datum_bis' => array(
						"31.03.2017",
						"31.03.2018"),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

	// Fähre um 19:30 ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"01.04.2017",
						"04.09.2017"),
		'datum_bis' => array(
						"16.06.2017",
						"05.11.2017"),
		'faehrt_nicht' => $feiertage,
	);

	// Fähre um 19:30 SOMMER
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"17.06.2017"),
		'datum_bis' => array(
						"03.09.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 19:30 ZWISCHEN SONDERFAHRTEN
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => $faehrt_auch_am,
		'datum_bis' => $faehrt_auch_am,
		'faehrt_nicht' =>"",
	);

		// Fähre um 19:30 ZWISCHEN SONDERFAHRTEN
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"13.04.2017",
						"24.05.2017",
						"14.06.2017"),
		'datum_bis' => array(
						"13.04.2017",
						"24.05.2017",
						"14.06.2017"),
		'faehrt_nicht' =>"",
	);

?>