<?php
function setTimezone($default) {
	$timezone = "";
	if (is_link("/etc/localtime")) {
		$filename = readlink("/etc/localtime");
		$pos = strpos($filename, "zoneinfo");
		if ($pos) {
			$timezone = substr($filename, $pos + strlen("zoneinfo/"));
		} else {
			$timezone = $default;
		}
	}
	else {
		$timezone = file_get_contents("/etc/timezone");
		if (!strlen($timezone)) {
			$timezone = $default;
		}
	}
	date_default_timezone_set($timezone);
}
?>
<?php
	
//
//  ifElse.php
//  ifElse example in php
//
//  Created by Mazen Hrazi on 01/11/19 (Twitter: @iMaz1n).
//  Copyright © 2019 iZONA. All rights reserved.
//

#	date_default_timezone_set('Asia/Riyadh');
	setTimezone('Etc/GMT-3');
	$userTime = date('H');
	printf("Time now is: %u\n",$userTime);
	if($userTime<12){
		echo "Good morning!";
	}
	elseif($userTime >= 12 && $userTime < 22){
		echo "Good evening!";
	}
	else {
		echo "Good night!";
	}
?>