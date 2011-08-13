<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Beanstream_Request extends Beanstream
{
    
	public function __construct()
	{
	
	}
	
	/**
	 * Make a new request to API
	 *
	 * @param	array
	 * @return	array
	 */		
	public static function make_request($query)
	{
		// create a new cURL resource
		$curl = curl_init();
		
		// set URL
		curl_setopt($curl, CURLOPT_URL, $query);
		
		// set to return the data as a string
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($curl, CURLOPT_HEADER, 0);
		
		// Run the query and get a response
		$response = curl_exec($curl);
		
		// close cURL resource, and free up system resources
		curl_close($curl);
		
		// Return the response
	
		return $response;	
	}


}