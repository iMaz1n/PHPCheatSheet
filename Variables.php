<?php

//
//  Variables.php
//  Variables example in php
//
//  Created by Mazen Hrazi on 01/11/19 (Twitter: @iMaz1n).
//  Copyright © 2019 iZONA. All rights reserved.
//

	$int = 22;
	$str = "Hello from Mazen";
	$isProgrammer = true;
	$pi = 3.14;
	$int = $int-1;
	$int--;
	$phpStr = "PHP";
	$id = 11;
	
	echo "The int is: ". $int . " and bool : " . $isProgrammer . " Pi: " . $pi;
	echo "\n";
	echo "from echo with $pi";
	echo "\n";
	echo "Hello ","I'm using ",$phpStr," 7.X";
	echo "\n";
	printf("$str I'm %u",$int);	
?>

<!-- to print id with html -->
<a href="profile.html?id=<?=$id?>">My Profile</a>
