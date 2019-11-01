<?php

//
//  Functions.php
//  Functions example in php
//
//  Created by Mazen Hrazi on 02/11/19 (Twitter: @iMaz1n).
//  Copyright © 2019 iZONA. All rights reserved.
//

function sayHello($name) {
	return "Hello $name\n";
}

function showMessage($name,$age) {
	echo "Welcome $name, your age is: $age\n";
}

function multiplication($num1 = 1,$num2 = 1,$num3 = 1) {
	return $num1 * $num2 * $num3;
}

showMessage("Mazen",22);

$helloStr =  sayHello("Mike");
echo $helloStr;

echo sayHello("Steve");

echo multiplication(2,2,2);
echo "\n";
echo multiplication(10,4);

?>