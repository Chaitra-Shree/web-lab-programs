<?php
	print "<h3><center> Welcome to my Blog!</center><h3>";

	$fname="counter.txt";
	$file=fopen($fname, "r");
	$hits=fscanf($file, "%d");
	fclose($file);

	$hits[0]++;
	$file=fopen($fname, "w");
	fprintf($file, "%d", $hits[0]);
	fclose($file);

	print "Total number of views : ".$hits[0];
?>