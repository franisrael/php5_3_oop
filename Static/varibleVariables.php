<?php
/*
* You can use the string value to specify the name of another varible
*/

$x = 'y';
$$x = 'z';
echo "$x<br>";
echo "$y<br>";
echo $$x; 
