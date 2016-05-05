<?php
	$jsonString = '{
		"name":"Timothy Magallanes",
		"major":"CMPE",
		"classes_taken":["CMPE 138", "CMPE 124", "CMPE 131", "MATH 123"],
		"phone_numbers": {
			"home": "123-465-1232",
			"home": "123-465-1232"
		}
	}';
	$timData = array(json_decode($jsonString, true));

	print $timData[0]['name'] . "\n";
?>

{
	"query":"parking spot",
	destination:{
		"lat":"44.1231283",
		"long":"128.974321"
	}
	"price":"20.00",
	"price_compare":"lt",
	"price_time_unit":"daily"
}


{
	/* uniquely identify the parking spot */
	"lat":"9234",
	"long":"23423",
	"name":"parking name"
},
{
	/* uniquely identify the parking spot */
},
{
	/* uniquely identify the parking spot */
},
{
	/* uniquely identify the parking spot */
},
