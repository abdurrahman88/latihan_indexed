<?php
	$baju = array("gamis","jubah","kaos","koko");
		sort($baju);
	foreach ($baju as $x => $x_value) {
		echo "jenis-jenis baju " .$x . ", value = " . $x_value;
		echo "<br>";

	}
		echo "<hr>";
?>
<?php
	$baju = array("gamis"=>"23", "jubah"=>"43", "kaos"=>"76", "koko"=>"34");
		rsort($baju);
	foreach ($baju as $x => $x_value) {
		echo "jenis-jenis baju " .$x . ", value = " . $x_value;
		echo "<br>";

	}
		echo "<hr>";
?>
