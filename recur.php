<?php
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
