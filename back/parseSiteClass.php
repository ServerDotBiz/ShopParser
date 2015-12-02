<?php
require_once 'simple_html_dom.php';

class parseSite {
	private $_url;
	private $_parserules;
	private $_debug;

	public function __construct($url,$parserules,$debug) {
		$this->_url = $url;
		$this->_parserules = $parserules;
		$this->_debug = $debug;
	}

	/**
	 * Initialize cURL
	 * @param string $url
	 * @return array cURL handle
	 */
	private function _initCurl($url) {
		$ch = null;

		if (($ch = curl_init($url)) == false) {
			header("HTTP/1.1 500", true, 500);
			die("Cannot initialize cUrl session, please check if cURL is enabled / installed properly.");
		}

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_ENCODING, 1);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

		if ($this->_debug){
			curl_setopt($ch, CURLOPT_VERBOSE, true);
			$verbose = fopen('curl.log', 'a+');
			curl_setopt($ch, CURLOPT_STDERR, $verbose);
		}

		return($ch);
	}

	/**
	 * retrieve URL
	 * @return array $response_array
	 */
	private function _retrieve_url(){
		$ch = $this->_initCurl($this->_url);

		$response_data = curl_exec($ch);
		if (curl_errno($ch)) {
			$response_array = array(
				'error'=>'cURL error',
				'data' => curl_error($ch)
			);
		} else {
			$response_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if ($response_code == 200){
				$response_array = array(
					'error'=>false,
					'data'=>$response_data
				);
			} else {
				$response_array = array(
					'error'=>$response_code,
					'data'=>$response_data
				);
			}
		}
		return $response_array;
	}

	/**
	 * parse data
	 * @param string $html
	 * @return array $meta_array;
	 */
	private function _parse_data($html){
		$url = $this->_url;
		$parserules = $this->_parserules;

		$rule_array = false;
		$shop = false;
		foreach ($parserules as $domain => $rules){
			if (stristr($url,$domain)){
				$rule_array = $rules;
				$shop = $domain;
				break;
			}
		}

		$metadata_array = array();
		if ($rule_array && $shop){
			$dom = new simple_html_dom();
			$dom->load($html);

			$metadata_array['shop'] = $shop;

			foreach ($rule_array as $name => $rule){
				$element = $dom->find($rule['rule'],0);
				if ($element) {
					$value = trim($element->$rule['attribute']);
					// add price filter
					if (isset($rule['filter']) && $name === 'price'){
						$filter_array = array();
						$match = preg_match($rule['filter'], $value, $filter_array);
						if ($match){
							$metadata_array[$name] = $filter_array[1].','.$filter_array[2];
						}
					} else {
						$metadata_array[$name] = $value;
					}
				} else {
					$metadata_array[$name] = false;
				}
			}
		}

		return $metadata_array;
	}

	/**
	 * retrieve metadata
	 * @return array $metadata_array;
	 */
	public function retrieve_metadata(){
		$response_array = $this->_retrieve_url();

		if ($response_array['error'] === false){
			$response_data = $response_array['data'];
			$metadata_array = $this->_parse_data($response_data);
		} else {
			$metadata_array = false;
		}

		return $metadata_array;
	}
}