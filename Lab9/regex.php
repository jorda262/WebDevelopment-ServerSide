<?php
 	$cities = "Minneapolis dytonh Duluth minnetonka Mankato Edina Eagan";

  //city that ends with is
	$ptrn1 = "/\b(\w*is)\b/";
	preg_match($ptrn1, $cities, $matches);
	$results[0] = $matches[0];

	//city that begins with m and ends a
	$ptrn2 = "/\b(m\w*a)\b/";
	preg_match($ptrn2, $cities, $matches);
	$results[1] = $matches[0];

	//city begins with D and ends with h
	$ptrn3 = "/\b(D\w*h)\b/";
	preg_match($ptrn3, $cities, $matches);
	$results[2] = $matches[0];

	//city that ends in o.
	$ptrn4 = "/\b(\w*o)\b/";
	preg_match($ptrn4, $cities, $matches);
	$results[3] = $matches[0];

	//output all the matches
	foreach ($results as $matches)
	{
		echo "$matches <br>";
	}
?>
