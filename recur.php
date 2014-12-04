<?php
/**
 * This function only applies in small number ranges.Don't use it on big ranges,it shall waste your CPU!.
*/
function recur()
{
	$x = rand(3,10);
	if($x != 5)
	{
		echo $x . 'Searching.... <br />';
		recur();
	}
	elseif($x = 5)
	{
		echo 'Found! <br />';
	}
}
recur();
?>
