 <?php

//
//  forLoop.php
//  for loop example in php
//
//  Created by Mazen Hrazi on 01/11/19 (Twitter: @iMaz1n).
//  Copyright © 2019 iZONA. All rights reserved.
//

for ($x = 0; $x < 5; $x++) {
	echo "Hello ", $x+1 , "\n";
	printf("Welcome %u\n",$x+1);
}
?>
<!-- loop with html -->
<?php for ($x = 0; $x < 5; $x++) { ?>
<p>Loop<?=$x+1?></p>
<button type="button">Click <?=$x+1?></button>
<?php }?>