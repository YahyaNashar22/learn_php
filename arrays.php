<?php

$numbers = [1, 2, 3, 4, 5];
$strings = ["person 1" => "yahya", "person 2" =>  "way", "family 1" => "nashar", "family 2" => "ghannoum"];

$str = "This is a string that is going to be exploded";
$exploded = explode(" ", $str);
$imploded = implode("-", $exploded);

print_r($imploded);

asort($strings);