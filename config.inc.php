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

	'fonq.nl' => array(
		'image' => array(
			'rule' => 'meta[name=twitter:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[name=twitter:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[name=twitter:data1]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'leenbakker.nl' => array(
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

	'conrad.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'section.ccpProductDetail div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.ccpProductDetailInfo__cell__price__default span',
			'attribute' => 'data-price-without-warranty',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'degrotespeelgoedwinkel.nl' => array(
		'image' => array(
			'rule' => 'div#content div.detail a img.artikel',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#content meta[itemprop=name]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div#content div meta[itemprop=price]',
			'attribute' => 'content'
		),
	),

	'vtwonen.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[property=og:price:amount]',
			'attribute' => 'content'
		),
	),

	'greenjump.nl' => array(
		'image' => array(
			'rule' => '#mainPic',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'article h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => '#productPrice',
			'attribute' => 'data-price',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'bax-shop.nl' => array(
		'image' => array(
			'rule' => 'a#mainPhoto0 img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#productDetail h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.voor-prijs span[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'decathlon.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => '#real_price[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),
	
	'scapino.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'ikenik.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'span[itemprop="price"]',
			'attribute' => 'plaintext'
		),
	),

	'travelbags.nl' => array(
		'image' => array(
			'rule' => 'div#product-detail div figure img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#product-detail h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),
			
	'liesjeshoutenspeelgoed.nl' => array(
		'image' => array(
			'rule' => 'table#template tbody tr td table tbody tr td table tbody tr td img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'h1.CPprodDescDet',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'b.CPprodPriceV',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'presentsathome.nl' => array(
		'image' => array(
			'rule' => '#image-main',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-shop div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-info div.price-box p.special-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'megagadgets.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.price_detail h2',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[property=product:price:amount]',
			'attribute' => 'content'
		),
	),

	'bakker-hillegom.nl' => array(
		'image' => array(
			'rule' => 'div.productImage a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#productDetails h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.info div.popUpPrice div.price div span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'vivara.nl' => array(
		'image' => array(
			'rule' => 'div.multimedia a img',
			'attribute' => 'src'
		),
		'title' => array(			
			'rule' => 'div.product_view_details div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => '#product_buying_lines form table tbody tr td div.product_price ins',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'meesterslijpers.nl' => array(
		'image' => array(
			'rule' => 'meta[itemprop="image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[itemprop="name"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'knuffelparadijs.nl' => array(
		'image' => array(
			'rule' => 'div#product-container div.product-image-zoom a',
			'attribute' => 'href'
		),
		'title' => array(
			'rule' => 'div#product-detail-container h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.detail-container-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'boumanonline.nl' => array(
		'image' => array(
			'rule' => '',
			'attribute' => ''
		),
		'title' => array(
			'rule' => 'div.product-details div.info div.product-title h2',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-details div.price-wrapper span',
			'attribute' => 'plaintext'
		),
	),
	
	'prijsvergelijk.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.proddetail div.descr h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.proddetail div.descr div',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'meerdanlicht.nl' => array(
		'image' => array(
			'rule' => 'img.big_image',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.omschrijvingHolder h1 span',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.voor_prijs span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'internet-sportclubs.com' => array(
		'image' => array(
			'rule' => '#image',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.ptext h2',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.pprijsmiddle span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'yoursurprise.nl' => array(
		'image' => array(
			'rule' => '#gallery_1',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'h2.product_title',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.articleprice',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'geboortexpress.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'span.pricetag',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'allekabels.nl' => array(
		'image' => array(
			'rule' => 'div.detail-content div div img.img-center',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.container div div div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.old_price',
			'attribute' => 'plaintext'
		),
	),

	'all4running.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.price-box p.special-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'drogisterij.net' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.product-detail-top-inner h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.product-price span[itemprop=price]',
			'attribute' => 'content'
		),
	),

	'jachensen.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'kijkshop.nl' => array(
		'image' => array(
			'rule' => 'div.product-detail-image div a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-header h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.prijs table tbody tr td',
			'attribute' => 'plaintext'
		),
	),

	'decopleinxxl.nl' => array(
		'image' => array(
			'rule' => '#main-image img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.regular-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'gadgethouse.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.product__title h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.product__price span meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'cosmox.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),


	'baby-schoenen.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div#center_column div div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => '#our_price_display',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'dolcis.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'section.product-info h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),


	'nedgame.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.producttile',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.currentprice',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'bobshop.nl' => array(
			'image' => array(
				'rule' => 'meta[property=og:image]',
				'attribute' => 'content'
			),
			'title' => array(
				'rule' => 'div.heading h1',
				'attribute' => 'plaintext'
			),
			'price' => array(
				'rule' => 'span.price',
				'attribute' => 'plaintext',
				'filter' => '/([0-9]*)\,([0-9]*)/'
			),
	),

	'athleteshop.nl' => array(
		'image' => array(
			'rule' => 'meta[itemprop=image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[itemprop=name]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'kunstspiegel.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.prijzenpp span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'vidaxl.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.special-price span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'tui.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'section.accomodation header h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.pricelabel a span',
			'attribute' => 'plaintext'
		),
	),

	'modern.nl' => array(
		'image' => array(
			'rule' => 'div#product-gallery div a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.page-heading h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop=price]',
			'attribute' => 'content'
		),
	),


	'coolgift.com' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'vindiqoffice.com' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'h1.pagetitle',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.p_productpage_newprice',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'kidsfavorites.nl' => array(
		'image' => array(
			'rule' => '#productImageZoomContainer img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.contentContainer h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.bigprice',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'score.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'superwinkel.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.da_bestelknop form input[name="price"]',
			'attribute' => 'value',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'stoerekindjes.nl' => array(
		'image' => array(
			'rule' => 'div#image-block img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#pb-left-column h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span#our_price_display',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'cameranu.nl' => array(
		'image' => array(
			'rule' => 'meta[name="twitter:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.product-h1-title h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'strong[itemprop="price"]',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'gestrikt.nl' => array(
		'image' => array(
			'rule' => '#image',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.regular-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),


	'everybodycare.com' => array(
		'image' => array(
			'rule' => 'meta[name="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => '',
			'attribute' => '',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'persempretoys.nl' => array(
		'image' => array(
			'rule' => 'div#content div.clearfix a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-essential h1.page-title',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-box span.regular-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'ali express' => array(
		'image' => array(
			'rule' => '',
			'attribute' => ''
		),
		'title' => array(
			'rule' => '',
			'attribute' => ''
		),
		'price' => array(
			'rule' => '',
			'attribute' => '',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'vanbeeklederwaren.nl' => array(
		'image' => array(
			'rule' => 'div.MagicToolboxContainer a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div[property="gr:hasCurrencyValue"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'ajaxshop.nl' => array(
		'image' => array(
			'rule' => 'a.big-image img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'h1.article-title',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => '#articlePrice',
			'attribute' => 'value',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'cadeau.nl' => array(
		'image' => array(
			'rule' => 'a#zoom1 img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-box span.regular-price span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'intreza.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'centralpoint.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[name=twitter:data1]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'coolsound.nl' => array(
		'image' => array(
			'rule' => 'div#product_fotogroot a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#product_titel h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'span.prijsdik',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'albelli.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div#top-content-intro h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'dl.current-price dd span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'scheerenfoppen.nl' => array(
		'image' => array(
			'rule' => 'div#product_image a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'article#productInfo form h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.productPrice',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'topvintage.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[property="product:price:amount"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'blockstore.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'h3.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	
	'gezelschapsspellenshop.nl' => array(
			'image' => array(
				'rule' => 'meta[property=og:image]',
				'attribute' => 'content'
			),
			'title' => array(
				'rule' => 'meta[property=og:title]',
				'attribute' => 'content'
			),
			'price' => array(
				'rule' => 'div.ordiv p span',
				'attribute' => 'plaintext',
				'filter' => '/([0-9]*)\.([0-9]*)/'
			),
	),

	'gyzs.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'span.price-including-tax span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'livera.nl' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.price span.new',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'beddengoed.com' => array(
		'image' => array(
			'rule' => '#image-main',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'duketoys.nl' => array(
		'image' => array(
			'rule' => '#image',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div#content div table tbody tr td h1 span',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.product-info div div.price div span.price-new',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'invito.com' => array(
		'image' => array(
			'rule' => 'meta[property=og:image]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property=og:title]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop=price]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'nicebeauty.com' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.single-product div div form div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[property=product:price:amount]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'maxwell.nl' => array(
		'image' => array(
			'rule' => '----',
			'attribute' => '----'
		),
		'title' => array(
			'rule' => 'title',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => '#extension_price div.price div.salePrice',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),	

	'verkleedklerenonline.nl' => array(
		'image' => array(
			'rule' => 'div.piGall a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.page-header h1 a span',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price_info span.price span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'bellatio.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div#product-detail-container h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.detail-container-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'bagageonline.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.price-stock div.price-box p.special-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'posters.nl' => array(
		'image' => array(
			'rule' => '#main-image img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-box span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'bestel.nl' => array(
		'image' => array(
			'rule' => 'div.product-image-container a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-detail div div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-box p.special-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),


	'alternate.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[itemprop="name"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.productShort div.price span[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'voetbalshop.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.product-shop div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.priceview div.price-box span.regular-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'draagdoek.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.summary div p',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'ako.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => '#productdetail h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => '#productprijsgegevens p.prijs span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'ditverzinjeniet.nl' => array(
		'image' => array(
			'rule' => '#image-main',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'ffshoppen.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'	
		),
		'title' => array(
			'rule' => 'div.productdesc h2',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'form.naarwinkelwagen span.prijs',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),


	'bestekeus.nl' => array(
		'image' => array(
			'rule' => '#prodimg',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'a.block_header',
			'attribute' => 'plaintext'
		),
		'price' => array(	
			'rule' => '----',
			'attribute' => '----',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),


	'medion.com' => array(
		'image' => array(
			'rule' => '#productDetailImage',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.wrapper div div h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),


	'replacedirect.nl' => array(
		'image' => array(
			'rule' => '#bigImg',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => '#productInfoBox h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'kinderlampenwinkel.nl' => array(
		'image' => array(
			'rule' => '#img_big',
			'attribute' => 'href'
		),
		'title' => array(
			'rule' => 'div.content_mid h2',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.googlesnippet div p span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'bresser-online.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[itemprop="name"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => '#Price2',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),


	'vandale.nl' => array(
		'image' => array(
			'rule' => 'div.product-img-box p.product-image a img',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-box span.regular-price span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'mamzel.eu' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'section.cta form div span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),


	'ultragadgets.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'title',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'tuinadvies.nl' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[itemprop="name"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => '#sectionholder div div span[itemprop="price"]',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'trendhopper.nl' => array(
		'image' => array(
			'rule' => '#image-main',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.product-name h1',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.price-box p.special-price span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'magicshop.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => '#PageTitle',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'schattigebabykleertjes.nl' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'div.page-title div h1[itemprop=name]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[itemprop="price"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),


	'bewustspeelgoed.nl' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[property="product:price:amount"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'bjornborg.com' => array(
		'image' => array(	
			'rule' => 'div.nosto_product span.image_url',
			'attribute' => 'plaintext'
		),
		'title' => array(
			'rule' => 'div.nosto_product span.name',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.nosto_product span.price',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		)
	),


	'vivolanda.nl' => array(
		'image' => array(
			'rule' => '----',
			'attribute' => '----'
		),
		'title' => array(
			'rule' => '---',
			'attribute' => '----'
		),
		'price' => array(
			'rule' => '----',
			'attribute' => '----',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),

	'kayasieraden.nl' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.productInfo div.price span[itemprop="price"]',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),
	
	'thee-voor-thuis.nl' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'meta[property="og:price:amount"]',
			'attribute' => 'content',
			'filter' => '/([0-9]*)\.([0-9]*)/'
		),
	),
    
    'paktuit.oxfamnovib.nl' => array(
		'image' => array(	
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => 'div.price-box span.regular-price span.price',
			'attribute' => 'plaintext'
		),
	),

	'internet-bikes.com' => array(
		'image' => array(
			'rule' => '#image',
			'attribute' => 'src'
		),
		'title' => array(
			'rule' => 'div.cproduct div.ptext h2',
			'attribute' => 'plaintext'
		),
		'price' => array(
			'rule' => 'div.cproduct div.pprijs div.pprijsmiddle span',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

	'prachtigkado.nl' => array(
		'image' => array(
			'rule' => 'meta[property="og:image"]',
			'attribute' => 'content'
		),
		'title' => array(
			'rule' => 'meta[property="og:title"]',
			'attribute' => 'content'
		),
		'price' => array(
			'rule' => '#Price1',
			'attribute' => 'plaintext',
			'filter' => '/([0-9]*)\,([0-9]*)/'
		),
	),

);

require_once 'back/parseSiteClass.php';
