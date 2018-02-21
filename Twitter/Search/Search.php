<?php

namespace Twitter\Search;

/**
 * Class Search
 * @package Twitter\Search
 */
class Search extends \Twitter\Base {

	public function search($value)
	{
		try{
			$url = "/search/tweets.json";
			$response = $this->callTwitterAPI("get", $url, $value);
			return $response;
		} catch (RequestException $e) {
			$response = $this->StatusCodeHandling($e);
			return $response;
		}
	}
}