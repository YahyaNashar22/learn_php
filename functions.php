<?php

function php_is_shit($name)
{
    echo "You are right $name Php is SHIT!\n";
}

function i_can_return()
{
    return "This language is stupid\n";
}

function recursion($n)
{
    if ($n !=0 ) return $n + recursion($n- 1);
    return 0;
}

php_is_shit("yahya");
$truth = i_can_return();

$recurred = recursion(3);
echo $recurred;