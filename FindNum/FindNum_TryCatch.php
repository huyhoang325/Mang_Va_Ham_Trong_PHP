<html>
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <title>Find Number</title>
</head>
<body>
<form method='post'>
    <input type='number' name='index'></br>
    <input type="submit" name="submit" value='Find Value'></form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['submit'])) {
        $index = (int)$_POST['index'];
        $array = [];
		$check = "";
        for ($i = 0; $i <=100; $i++) {
            $array[$i] = rand(0,100);
        }
        try {
            if ($index < 0 || $index > 100 ) {
                throw new Exception("Chỉ số vượt quá giới hạn của mảng");
            }
            for ($i = 0; $i <=100; $i++) {
                if ($array[$i] === $index) {
					$check = "";
                    echo "Input: " . $index . " . Giá trị của phần tử có chỉ số".$index." là: " . $i."<br>";
                }else {
					$check = "Chỉ số vượt quá giới hạn của mảng";
				}
            }
            echo '<a href="'.$_SERVER['PHP_SELF'].'">Thử lại</a>';
        }catch (Exception $e) {
            echo "Output Exception: ".$e->getMessage();
        }
    }
}
?>
</body>
</html>