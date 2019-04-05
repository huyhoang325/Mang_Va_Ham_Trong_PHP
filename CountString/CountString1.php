<?php
$string1 = "This is an example string";
$string = explode(" ",$string1);
$count = 0;
$value = "is";
for ($i = 0; $i < count($string); $i++) {
    if ($string[$i] == $value ) {
        $count++;
    }
}
echo "Có ".$count." phần tử ".$value." trong mảng";