<?php
echo "Hello word <br />";
$number = 12;
$my_name = "yahya";
$is_bad = false;
$is_bad_hm = true;
$my_array = ["test", "sets"];
$my_array_legacy = array("index1", "index2");

unset($my_array[0]);
$my_array[0] = "new";
array_push($my_array, "1", "2");
$rearranged_array = array_values($my_array);

// echo $number;
// echo $my_name;
// echo $is_bad;
// echo $is_bad_hm;
print_r($my_array);
print_r($rearranged_array);

// print_r($my_array_legacy);
?>