<?php

require_once 'db.php';

$post = $_POST;

$sql = "INSERT INTO anggota (nama,email) VALUES ('".$post['nama']."','".$post['email']."')";

$db->exec($sql);

$result = $db->query("SELECT * FROM anggota Order by id desc LIMIT 1");

$data = $result->fetchAll(PDO::FETCH_ASSOC);

//echo json_encode($data);
header("location: ../index.php");

?>