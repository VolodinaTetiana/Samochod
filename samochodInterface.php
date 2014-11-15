<?php 

interface SamochodInterface{

	public function helloSamochod();
	public function getModel();
	public function setModel($model);
	public function getMarka();
	public function setMarka($marka);
	public function getKolor();
	public function setKolor($kolor);
	public function getTyp();
	public function setTyp($typ);
}

?>
