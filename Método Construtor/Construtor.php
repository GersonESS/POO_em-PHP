<?php

class Livro
{
    // Atributos - variáveis
    var $titulo;
    var $anoPublicacao;
    var $preco;
    var $nota;

    // Métodos   - Funçoes
    function __construct($titulo, $anoPublicacao, $preco, $nota)
    {
        $this->titulo = $titulo;
        $this->anoPublicacao = $anoPublicacao;
        $this->preco = $preco;
        $this->nota = $nota;
    }
   
    function listarLivro()
    {
        // faz algo
        echo 'Título:'.$this->titulo.', Ano: '.$this->anoPublicacao.', Preço: '.$this->preco.', Nota:' .$this->nota;
    }
    function atualizarNota($nota)
    {
        // faz algo
        return 1;
    }
}

?>