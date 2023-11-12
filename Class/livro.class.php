<?php

class Livro
{
    // Atributos - variáveis
    var $titulo;
    var $anoPublicacao;
    var $preco;
    var $nota;

    // Métodos   - Funçoes

    function listarLivro()
    {
        // faz algo
        echo $this->titulo;
    }
    function atualizarNota($nota)
    {
        // faz algo
        return 1;
    }
}
/*$meulivro = new Livro();
$meulivro->titulo = 'ABC';
$meulivro->listarLivro();
echo  "<br>";
echo $meulivro->titulo;
echo  "<br>";
$outrolivro = new Livro();
$outrolivro->titulo = 'BBB';
echo $outrolivro->titulo;
echo  "<br>";
var_dump($meulivro);
echo  "<br>";
//var_dump($outrolivro);*/
?>