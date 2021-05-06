<?php
require_once 'config.php';

$term = $_GET['term'];
$query = $bdd->prepare('SELECT nom_fr_fr FROM pays WHERE nom_fr_fr LIKE :term');
$query->execute(array('term' => $term . '%'));
$array = array();

while ($result = $query->fetch()) {
	$name = $result['nom_fr_fr'];
	array_push($array, $name);
}

echo json_encode($array);
