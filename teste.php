<?php
include ('Tradutor.php');

$texto='Meu nome é John From, e eu sou o deus da caixa!';

$tradutor=new Tradutor ();

echo $tradutor->traduzLang (null, 'en', $texto); // Detecta idioma e traduz para Inglês.

echo '<br>';

echo $tradutor->detectaIdioma ($texto); // Retorna o idioma do texto.

// Você pode ver uma lista com todos os idiomas suportados pelo Google Tradutor com o método Tradutor::listaIdiomas ()

/*

$tradutor=new Tradutor ('en', 'pt'); // Traduzirá do Inglês para o Português.

echo $tradutor->traduzir ('My name is John From, and I am the god of the box!');

// Usando proxy

$tradutor=new Tradutor (null, null, '183.89.8.79:8080');

echo $tradutor->traduzLang ('en', 'pt', 'My name is John From, and I am the god of the box!');

*/