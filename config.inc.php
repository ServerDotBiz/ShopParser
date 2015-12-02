<?php
/* set debug in test environment / local dev environment */
$debug = true;

/* show all errors */
if ($debug){
	error_reporting(E_ALL);
	ini_set('display_errors', 1);
} else {
	error_reporting(0);
	ini_set('display_errors', 0);
}

/*set timezone*/
date_default_timezone_set('Europe/Amsterdam');

/* define parse rules per webshop */
$parserules = array(
	'bartsmit.com' => array(
		'image' => array(
			'rule' => '#productMainImage',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#productdetail div div#title h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div#productdetail div meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),
	'intertoys.nl' => array(
		'image' => array(
			'rule' => '#productMainImage',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#productdetail div div#title h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div#productdetail div meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),
	'blokker.nl' => array(
		'image' => array(
			'rule' => '#productMainImage',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#productdetail div div#title h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div#productdetail div meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),
	'speelgoedindeton.nl' => array(
		'image' => array(
			'rule' => 'div.product-info a#zoom1 img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.extra-wrap h1 span',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price span.price-new',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),
);

require_once 'back/parseSiteClass.php';