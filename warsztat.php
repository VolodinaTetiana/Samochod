<?php

include_once('samochod.php');
include_once('samochodWyscigowy.php');

//$samochod = new Samochod();
//echo $samochod->helloSamochod();

function otoSamochod(Samochod $s)
{
	return "Witaj! To ja - Twój samochod: ".$s->getKolor()." ".$s->getMarka()." ".$s->getModel()."\n";
}

$mojSamochod = new Samochod("Skoda", "Fabia", "pomaranczowy", "hatchback");
echo $mojSamochod->helloSamochod();

$innySamochod = new Samochod("Ford", "Mondeo", "bialy", "combi");
echo $innySamochod->helloSamochod();

echo $innySamochod->getKolor()."\n";
$innySamochod->setKolor("zielony");
echo $innySamochod->getKolor()."\n";
echo $innySamochod->helloSamochod();

echo otoSamochod($innySamochod);
echo otoSamochod($mojSamochod);

//$siln = new Silnik(25);
//$samwys = new samochodWyscigowy($siln);

$samwys = new samochodWyscigowy(new Silnik(25));

echo $samwys->helloSamochod();
echo otoSamochod($samwys);

echo "Predkosc maksymalna: ".$samwys->getPredkoscMaksymalna()."\n";
echo "Przyspieszenie: ".$samwys->getPrzyspieszenie()."\n";

$samwys->tunning(new Silnik(50));

echo "Predkosc maksymalna: ".$samwys->getPredkoscMaksymalna()."\n";
echo "Przyspieszenie: ".$samwys->getPrzyspieszenie()."\n";

?>
