<?php

require_once 'db.php';

$id  = $_POST["id"];

$sql = "DELETE FROM anggota WHERE id = '".$id."'";

$db->exec($sql);

echo json_encode($id);
 
?>