<?php
/**
 * 
 */
error_reporting(E_ALL);
ini_set('display_errors', TRUE);
ini_set('display_startup_errors', TRUE);
class Client
{
	
	function __construct()
	{
		$params = array(
			'location' => 'http:://localhost/soap/server.php',
			'uri' => 'urn:://localhost/soap/server.php',
			'trace' =>1
		);

		$client = new SoapClient(NULL, $params);
		$client->__soapCall("getStudentName", array(1));
	}

	// public function getName($id_array)
	// {
	// 	return $this->__soapCall('getStudentName', $id_array); 
	// }
}



?>