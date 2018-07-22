<?php

	$time = time();
	$time_now = date('d m Y @ H:i:s',$time);
	$time_modified = date('d m Y @ H:i:s', $time-(7*24*30*30));
	echo 'The current date/time is '.$time_now.'<br> The time modified is: ' .$time_modified.'<br>';

	//strtotime

?>