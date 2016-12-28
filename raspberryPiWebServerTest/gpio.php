<?php
//reliaSmartSwitch 2016
//This page is requested by the JavaScript, it updates the pin's status and then print it
//Getting and using values
$val_gpio_no_array = array(26,0,1,2,3,4,5,6);
if (isset ( $_GET["pic"] )) {
	$pic = strip_tags ($_GET["pic"]);
	
	//test if value is a number
	if ( (is_numeric($pic)) && ($pic <= 7) && ($pic >= 0) ) {
		
		//set the gpio's mode to output		
		system("gpio mode ".$val_gpio_no_array[$pic]." out");
		//reading pin's status
		exec ("gpio read ".$val_gpio_no_array[$pic], $status, $return );
		//set the gpio to high/low
		if ($status[0] == "0" ) { $status[0] = "1"; }
		else if ($status[0] == "1" ) { $status[0] = "0"; }
		system("gpio write ".$val_gpio_no_array[$pic]." ".$status[0] );
		//reading pin's status
		exec ("gpio read ".$val_gpio_no_array[$pic], $status, $return );
		//print it to the client on the response
		echo($status[0]);
		
	}
	else { echo ("fail"); }
} //print fail if cannot use values
else { echo ("fail"); }
?>
