<?php

include_once('silnikInterface.php');

class Silnik implements silnikInterface{

	private $moc;

	public function __construct($moc){
		$this->moc=$moc;
	}

	public function getMoc(){
		return $this->moc;
	}
}

?>