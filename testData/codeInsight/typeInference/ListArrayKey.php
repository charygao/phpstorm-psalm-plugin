<?php

/**
 * @param list<string> $param
 */
function f($param){
    foreach ($param as $key=>$value){
        return $key;
    }

}

/**
 * @param array<string> $param
 */
function f1($param){
    foreach ($param as $key=>$value){
        return $key;
    }

}

<type value="int">$f</type> = f();
<type value="string|int">$f1</type> = f1();
