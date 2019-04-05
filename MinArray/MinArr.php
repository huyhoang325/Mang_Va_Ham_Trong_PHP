
<?php
$array = [2,7,3,4,5,6];
$min = $array[0];
for ($i= 0;$i< count($array) ; $i++) {
    if ($array[$i] < $min  )
        $min = $array[$i] ;
}
echo "Giá trị nhỏ nhất trong mảng là: ".$min. " index là: ".$i;
?>