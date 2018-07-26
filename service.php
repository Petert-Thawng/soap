<?php
include './client.php';
$id_array = array('id' => 1);
$client = new Client;
$client->getName($id_array);
?>