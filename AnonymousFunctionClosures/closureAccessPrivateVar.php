<?php

/*
 * We can add/inject new behaviour to a php
 * class without modifying is as well
 */

// Closure access private variable

class SimpleClass {
    private $privateData = 5;
}
 
$simpleClosure = function() {
    return $this->privateData;
};
 
$resultClosure = Closure::bind($simpleClosure, new SimpleClass(), 'SimpleClass');
 
echo $resultClosure();