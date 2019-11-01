<?php

//
//  arrays.php
//  arrays example in php
//
//  Created by Mazen Hrazi on 01/11/19 (Twitter: @iMaz1n).
//  Copyright © 2019 iZONA. All rights reserved.
//

# Indexed array
$users = ["Mazen","Mike","Steve"];
echo $users[0]."\n";

# Associative array
$usersAge = ["Mazen" => 22, "Mike" => 33, "Steve" => [44,55,66]];
echo $usersAge["Steve"][1]."\n";

print_r($users);

print_r($usersAge);

$brands = ["Apple" => 100, "Google" => 200, "Amazon" => 300];

$key = array_search(200, $brands);

if(array_key_exists($key, $brands)){
	echo "$key is exist";
}
else {
	echo "$key does not exist";
}

echo in_array(400, $brands); # null and 1 if exist
?>