<?php
require_once('livro.class.php');
$meulivro = new Livro();
$meulivro->titulo = 'ABC';
$meulivro->listarLivro();
print("\n");
$outrolivro = new Livro();
$outrolivro->titulo = 'BBB';
echo $outrolivro->titulo;
?>