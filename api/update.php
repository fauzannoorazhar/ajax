<?php

require_once 'db.php';

$id  = $_POST["id"];
$post = $_POST;

$sql = "UPDATE anggota SET nama = '".$post['nama']."',email = '".$post['email']."'WHERE id = '".$id."'";

$db->exec($sql);

$result = $db->query("SELECT * FROM anggota WHERE id ='".$id."'");

$row = $result->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);

?>