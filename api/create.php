<?php

require_once 'db.php';

$post = $_POST;

$sql = "INSERT INTO anggota (nama,email) VALUES ('".$post['nama']."','".$post['email']."')";

$db->exec($sql);

$result = $db->query("SELECT * FROM anggota ORDER BY id DESC LIMIT 1");

$row = $result->fetchAll(PDO::FETCH_ASSOC);

echo json_encode($row);
//header("location: ../index.php");

?>