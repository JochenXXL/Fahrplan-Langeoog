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
			"31.12.2017",
			"01.01.2018",
			"30.03.2018",
			"02.04.2018",
			"01.05.2018",
			"10.05.2018",
			"20.05.2018",
			"21.05.2018",
			"03.10.2018",
			"25.12.2018",
			"26.12.2018"
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
			"26.12.2017",
			"01.01.2018",
			"30.03.2018",
			"02.04.2018",
			"01.05.2018",
			"10.05.2018",
			"20.05.2018",
			"21.05.2018",
			"03.10.2018",
			"25.12.2018",
			"26.12.2018"
		);

	// Ausnahme *5
	$faehrt_auch_am = array(
		"13.04.2017",
		"24.05.2017",
		"14.06.2017",
		"29.03.2018",
		"09.05.2018",
		"31.05.2018"
	);

	//----------------------------
	// Fahrzeiten
	//----------------------------


	// Fähre um 7:10 ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "7:10",
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

	// Fähre um 7:10 ZWISCHEN 2018
	$fahrplan[] = array(
		'zeit' => "7:10",
		'tag' => array (
				1, 2, 3, 4, 5
			),
		'datum_von' => array(
						"06.11.2017",
						"09.04.2018",
						"29.10.2018"
						),
		'datum_bis' => array(
						"16.03.2018",
						"04.05.2018",
						"01.01.2019"
						),
		'faehrt_nicht' => $faehrt_nicht_am,
	);

	// Fähre um 7:10 SOMMER
	$fahrplan[] = array(
		'zeit' => "7:10",
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

	// Fähre um 7:10 SOMMER 2018
	$fahrplan[] = array(
		'zeit' => "7:10",
		'tag' => array (
				1, 2, 3, 4, 5, 6
			),
		'datum_von' => array(
						"17.03.2018",
						"05.05.2018"
						),
		'datum_bis' => array(
						"08.04.2018",
						"28.10.2018"
						),
		'faehrt_nicht' => $feiertage,
	);

	// Fähre um 7:10 Winter
	$fahrplan[] = array(
		'zeit' => "7:10",
		'tag' => array (
				1, 2, 3, 4, 5
			),
		'datum_von' => array(
						"31.10.2016",
						"06.11.2017"
						),
		'datum_bis' => array(
						"31.03.2017",
						"16.03.2018"
						),
		'faehrt_nicht' => $faehrt_auch_am,
	);


	// Fähre um 8:20 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				6, 0
			),
		'datum_von' => array(
						"31.10.2016",
						"06.11.2017"),
		'datum_bis' => array(
						"31.03.2017",
						"16.03.2018"),
		'faehrt_nicht' => "",
	);

	// Fähre um 8:20 WINTERFAHRPLAN SONDERFAHRTEN
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => $faehrt_auch_an,
		'datum_bis' => $faehrt_auch_an,
		'faehrt_nicht' => "",
	);

	// Fähre um 8:20 ZWISCHEN, SOMMER 2018
	$fahrplan[] = array(
		'zeit' => "8:20",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017"),
		'datum_bis' => array(
						"05.11.2018"),
		'faehrt_nicht' => "",
	);


	// Fähre um 9:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017",
						"04.09.2017"),
		'datum_bis' => array(
						"16.06.2017",
						"05.11.2017"),
		'faehrt_nicht' => $feiertage,
	);

	// Fähre um 9:30 SOMMERFAHRPLAN 2018
	$fahrplan[] = array(
		'zeit' => "9:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"17.06.2017",
						"12.02.2018",
						"17.03.2018",
						"05.05.2018"
						),
		'datum_bis' => array(
						"03.09.2017",
						"13.02.2018",
						"08.04.2018",
						"28.10.2018"
						),
		'faehrt_nicht' => "",
	);

	// SONDERFAHRT um 10:30 ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "10:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"19.08.2017"),
		'datum_bis' => array(
						"20.08.2017"),
		'faehrt_nicht' => "",
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
						"31.03.2017"),
		'faehrt_nicht' => ""
	);

	// Fähre um 10:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "10:30",
		'tag' => array (
				1, 2, 3, 4
			),
		'datum_von' => array(
						"01.04.2017",
						"04.09.2017"),
		'datum_bis' => array(
						"16.06.2017",
						"05.11.2017"),
		'faehrt_nicht' => $feiertage,
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



	// Fähre um 11:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017",
						"04.09.2017"),
		'datum_bis' => array(
						"16.06.2017",
						"05.11.2017"),
		'faehrt_nicht' => "",
	);

	// Fähre um 11:30 ZWISCHENFAHRPLAN SONDERFAHRTEN
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => $feiertage,
		'datum_bis' => $feiertage,
		'faehrt_nicht' => "",
	);

	// Fähre um 11:30 SOMMERFAHRPLAN 2018
	$fahrplan[] = array(
		'zeit' => "11:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"17.06.2017",
						"06.11.2017"),
		'datum_bis' => array(
						"03.09.2017",
						"01.02.2019"),
		'faehrt_nicht' => "",
	);

/*	// Fähre um 12:30 Sonderfahrt
	$fahrplan[] = array(
		'zeit' => "12:30",
		'tag' => array (
				0, 1, 2
			),
		'datum_von' => array(
						"01.01.2017"),
		'datum_bis' => array(
						"03.01.2017"),
		'faehrt_nicht' => "",
	);*/

	// Fähre um 13:30 SOMMERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "13:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"17.06.2017",
						"17.03.2018",
						"05.05.2018"),
		'datum_bis' => array(
						"03.09.2017",
						"08.04.2018",
						"28.10.2018"),
		'faehrt_nicht' => "",
	);

	// Fähre um 14:30 WINTERRFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "14:30",
		'tag' => array (
				5, 6, 0
			),
		'datum_von' => array(
						"31.10.2016",
						"06.11.2017",
						"09.04.2018",
						"29.10.2018"),
		'datum_bis' => array(
						"31.03.2017",
						"16.03.2018",
						"04.05.2018",
						"01.01.2019"),
		'faehrt_nicht' => "",
	);


	// Fähre um 14:30 ZWISCHENFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "14:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017",
						"04.09.2017"),
		'datum_bis' => array(
						"16.06.2017",
						"05.11.2017"),
		'faehrt_nicht' => "",
	);


	// Fähre um 16:00 ZWISCHEN, SOMMER
	$fahrplan[] = array(
		'zeit' => "16:00",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017",
						"17.03.2018",
						"05.05.2018"),
		'datum_bis' => array(
						"05.11.2017",
						"08.04.2018",
						"28.10.2018"),
		'faehrt_nicht' => "",
	);

	// Fähre um 16:30 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "16:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.11.2016",
						"06.11.2017",
						"09.04.2018",
						"29.10.2018"),
		'datum_bis' => array(
						"31.03.2017",
						"16.03.2018",
						"04.05.2018",
						"01.01.2019"),
		'faehrt_nicht' => array(
						"28.02.2018"
			),
	);


	// Fähre um 17:30 ZWISCHEN, SOMMER
	$fahrplan[] = array(
		'zeit' => "17:30",
		'tag' => array (
				1, 2, 3, 4, 5, 6, 0
			),
		'datum_von' => array(
						"01.04.2017",
						"17.03.2018",
						"05.05.2018"),
		'datum_bis' => array(
						"05.11.2017",
						"08.04.2018",
						"28.10.2018"),
		'faehrt_nicht' => "",
	);

	// Fähre um 18:00 WINTERFAHRPLAN
	$fahrplan[] = array(
		'zeit' => "18:00",
		'tag' => array (
				1, 2, 3, 4, 5, 0
			),
		'datum_von' => array(
						"31.10.2016",
						"06.11.2017",
						"09.04.2018",
						"29.10.2018"),
		'datum_bis' => array(
						"31.03.2017",
						"16.03.2018",
						"04.05.2018",
						"01.01.2019"),
		'faehrt_nicht' => "",
	);

	// Fähre um 19:00 SONNTAG SOMMERFAHRPLAN
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

	// Fähre um 19:30 SONNTAG SOMMERFAHRPLAN 2018
	$fahrplan[] = array(
		'zeit' => "19:30",
		'tag' => array (
				0
			),
		'datum_von' => array(
						"17.06.2017",
						"17.03.2018",
						"05.05.2018"),
		'datum_bis' => array(
						"03.09.2017",
						"08.04.2018",
						"28.10.2018"),
		'faehrt_nicht' => "",
	);


	// Fähre um 20:00 FREITAG 2018
	$fahrplan[] = array(
		'zeit' => "20:00",
		'tag' => array (
				5
			),
		'datum_von' => array(
						"17.06.2017",
						"17.03.2018",
						"05.05.2018"),
		'datum_bis' => array(
						"03.09.2017",
						"08.04.2018",
						"28.10.2018"),
		'faehrt_nicht' => $faehrt_auch_am,
	);

	// Fähre um 20:00 ZWISCHEN
	$fahrplan[] = array(
		'zeit' => "20:00",
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

	// Fähre um 20:00 ZWISCHEN SONDERFAHRTEN FEIRTAGE
	$fahrplan[] = array(
		'zeit' => "20:00",
		'tag' => array (
				0, 1, 2, 3, 4, 5, 6
			),
		'datum_von' => $feiertage,
		'datum_bis' => $feiertage,
		'faehrt_nicht' => "",
	);

	// Fähre um 20:00 ZWISCHEN SONDERFAHRTEN
	$fahrplan[] = array(
		'zeit' => "20:00",
		'tag' => array (
				0, 1, 2, 3, 4, 5, 6
			),
		'datum_von' => array(
						"13.04.2017",
						"17.04.2017",
						"24.05.2017",
						"14.06.2017"
						),
		'datum_bis' => array(
						"13.04.2017",
						"17.04.2017",
						"24.05.2017",
						"14.06.2017"
						),
		'faehrt_nicht' => "",
	);

?>