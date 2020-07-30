<?php 

class ContohStatic {
	public static $angka = 1;
	public $number = 10;

	public static function halo() {
		return "Halo " . self::$angka++ . " kali<br>";
	}
	
	public function helo() {
		return "Halo " . $this->number++ . " kali<br>";
	}


}

$obj = new ContohStatic();
echo $obj->halo();
echo $obj->halo();
echo $obj->halo();
echo "<hr>";
$obj2 = new ContohStatic();
echo $obj2->halo();
echo $obj2->halo();
echo $obj2->halo();
echo "<hr>";
echo "<hr>";

?>