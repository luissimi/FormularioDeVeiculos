<?php
if (!isset($_GET['fdv_nome'])) {
    header("Location: index.php");
    exit;
}

$nome = "%".trim($_GET['fdv_nome'])."%";

$dbh = new PDO('mysql:host=127.0.0.1;dbname=formulariodeveiculos', 'root', '');

$sth = $dbh->prepare('SELECT * FROM ´fdv´ WHERE ´placa´ LIKE :nome');
$sth->bindParam(':nome', $nome, PDO::PARAM_STR);
$sth->execute();

$resultados = $sth->fetchAll(PDO::FETCH-ASSOC);
echo "<pre>";
print_r($resultados);exit;
?>