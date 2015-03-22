<?php

	// Converts array into list n1, n2, ..., and n3
	function humanizedList($array) {
   		

	}


	// List of famous peeps
	$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

	// TODO: Convert the string into an array
	$physicistsArray = explode(', ', $physicistsString);

	$lastItem = array_pop($physicistsArray);
	$physicistsString = implode(', ', $physicistsArray) . " and $lastItem";

	$famousFakePhysicists = humanizedList($physicistsArray);
	echo "Some of the most famous fictional theoretical physicists are $physicistsString .";



