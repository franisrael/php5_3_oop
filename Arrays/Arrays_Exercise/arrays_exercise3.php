<?php

/*Delete an element from the above PHP array. After deleting the element, integer keys must be normalized.
* Sample Output:
* array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(4) [5]=> int(5)}
* array(5) { [0]=> int(1) [1]=> int(2) [2]=> int(3) [3]=> int(5)}
*/
$x = array(1, 2, 3, 4, 5);

var_dump($x);

unset($x[3]);

echo "<br>";

var_dump($x);