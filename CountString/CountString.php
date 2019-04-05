<?php
$string = "This is an example string";
$result = substr_count($string, "is");
echo "Ký tự is xuất hiện ".$result." lần, vị trí ".strpos($string,"is");
?>