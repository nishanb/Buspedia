<?php
require 'bootstrap.php';

if (empty($_POST['source']) && empty($_POST['dest']))
{
  header('Location: index.php');
  exit; 
} 


$source = $_POST['source'];
$dest = $_POST['dest'];


$sql = $pdo->prepare('
	select r.id,r.source,b.reg_no,b.capacity,r.destination,b.name,bt.name as bus_type,r.rate,r.time 
	from bus_route br,bus b,routes r, bus_type bt
	where br.bus_id = b.id and 
	br.route_id = r.id and
	b.type_id = bt.id and 
	r.source = :source and 
	r.destination = :dest
	order by id ASC'
);


$sql->execute([
	'source' => $source,
	'dest' => $dest
]);

$routes = $sql->fetchAll(PDO::FETCH_OBJ);

require 'views/search.view.php';

