<?php

/*
*
*
*/

$arr = array("Sophia"=>"31", "Jacob"=>"41", "William"=>"39", "Ramesh"=>"40");
asort($arr);
echo "ascending order sort by Value<br>";

show($arr);

echo "ascending order sort by Key<br>";
ksort($arr);
show($arr);

echo "descending order sort by Value<br>";
arsort($arr);
show($arr);

echo "descending order sort by Key<br>";
krsort($arr);
show($arr);

function show($arr){
	foreach($arr as $key=>$value){
		echo "$key $value<br>";
	}
}