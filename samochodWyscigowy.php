<?php

include_once('samochodWyscigowyInterface.php');
include_once('samochod.php');
include_once('silnik.php');

class SamochodWyscigowy extends Samochod implements samochodWyscigowyInterface{

	private $silnik;
	// private $predkoscMaksymalna;
	// private $przyspieszenie;

	public function __construct(Silnik $s){
		$this->silnik=$s;
		// $this->predkoscMaksymalna=($s->getMoc()*3)+20;
		// $this->przyspieszenie=$s->getMoc()*0.3;
		//$this->przyspieszenie=$this->silnik->getMoc()*0.3;

		$this->marka="Fiat";
		$this->model="126p";
		$this->kolor="rozowy";
		$this->typ="sedan";
	}
	//setSilnik()
	public function tunning(Silnik $s){
		$this->silnik=$s;
		// $this->predkoscMaksymalna=($s->getMoc()*3)+20;
		// $this->przyspieszenie=$s->getMoc()*0.3;
	}

	public function getPredkoscMaksymalna(){
		return ($this->silnik->getMoc()*3)+20;
	}
	public function getPrzyspieszenie(){
		return $this->silnik->getMoc()*0.3;;
	}

	public function helloSamochod(){
		$opis="Witaj! To ja - Twój samochod: ".$this->kolor." ".$this->marka." ".$this->model."\n";
		return $opis; 
	}

	public function getModel(){
		return $this->model;
	}
    public function setModel($model){
		$this->model=$model;
	}
    public function getMarka(){
		return $this->marka;
	}
    public function setMarka($marka){
		$this->marka=$marka;
	}
    public function getKolor(){
		return $this->kolor;
	}
    public function setKolor($kolor){
		$this->kolor=$kolor;
	}
    public function getTyp(){
		return $this->typ;
	}
    public function setTyp($typ){
		$this->typ=$typ;
	}
}


?>