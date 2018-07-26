<?php
class Server
{
	public function __construct()
	{

	}

	public function getStudentName($id_array)
	{
		return 'David Lai';
	}
}

$params = array('uri' => 'localhost/soap/server.php');
$server = new SoapServer(NULL, $params);
$server->setClass('Server');
$server->handle();


?>