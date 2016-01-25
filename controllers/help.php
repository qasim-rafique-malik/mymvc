<?php
class help {
	public function __construct() {
		echo"i am in help";
	}
	public function other($parm = false, $parm2 = false){
		echo "i am in other function "; 
		echo "pram = ".$parm;
		echo "pram2 = ".$parm2;
	}
}