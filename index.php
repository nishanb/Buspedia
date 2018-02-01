<?php 

require 'bootstrap.php';

$sql = $pdo->prepare('
	Select 
	(SELECT group_concat(DISTINCT source) FROM routes) as source,
	(SELECT group_concat(DISTINCT destination) FROM routes) as destination'
);

$sql->execute();

$routes = $sql->fetchAll(PDO::FETCH_OBJ);

$source = explode(',',$routes[0]->source);
$dest = explode(',',$routes[0]->destination);

require 'views/select.view.php';
