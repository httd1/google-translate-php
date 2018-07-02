# google-translate-php

Classe de tradução grátis e ilimitada com o Google Tradutor.

## Uso da Classe

Incluindo a classe.

```php
include 'Tradutor.php';
```
Instanciando a classe e passando parâmetros.

```php
$tradutor=new Tradutor ('en', 'pt');
// Defina o primeiro parâmetro como `null` para detecção automática do idioma.
```

Traduzindo texto do Inglês para o Português.

```php
echo $tradutor->traduzir ('My name is John From, and I am the god of the box!');
```

Identificando idioma do texto.

```php
echo $tradutor->detectaIdioma ('My name is John From, and I am the god of the box!');
// return Inglês

// Defina o segundo parâmetro para `true` para retornar o id do idioma.
```

Idiomas suportados

```php
// Retorna um array com todos os idiomas suportados pelo Google Tradutor.
$tradutor->listaIdiomas ();
```

## Usando Proxy

Após muitas requisições o Google pode bloquear o seu ip,esse bloqueio pode ser ultrapassado usando proxy.

```php
$tradutor=new Tradutor ('pt', 'en', '183.89.8.79:8080');

echo $tradutor->traduzir ('Meu nome é John From, e eu sou o deus da caixa!');
```

## Uso básico e mais simples.

```php
$tradutor=new Tradutor ();

// Traduz do Inglês para o Português.

echo $tradutor->traduzirLang ('en', 'pt', 'My name is John From, and I am the god of the box!');
```
