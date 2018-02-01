<?php 

require_once 'db.php';

$result = $db->query("SELECT * FROM anggota");

$row = $result->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);

?>