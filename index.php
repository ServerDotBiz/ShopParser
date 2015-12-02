<?php

/* get configuration */
require_once 'config.inc.php';

$shop_test_url_array = array(
	'http://www.bartsmit.com/nl/bsnl/bart-smit-1/sint-knallers/lego-duplo-basisstenen-deluxe-6176-1',
	'http://www.intertoys.nl/zoomer-kitty',
	'http://www.blokker.nl/nl/blknl/philips-lumea-essential-ipl-sc1983-00',
	'http://www.speelgoedindeton.nl/houten_winkeltje/pinolino-shopt-lucy.html',
	// add more valid shop urls to test all rules
);

foreach ($shop_test_url_array as $url){
	$parser = new parseSite($url,$parserules,$debug);
	$metadata_array = $parser->retrieve_metadata();
	var_dump($metadata_array);
}