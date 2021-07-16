# :elephant: Curso de PHP!
 
<img src="./assets/logo.png" width="100%">

:thinking: Atualmente comecei a estudar a linguagem PHP, e percebi que é muito fácil de aprender, uma simples linguagem que era utilizada para template, agora virou uma das linguagens mais usadas na internet. Comecei a ver a Playlist do [Curso em Vídeo](https://www.youtube.com/channel/UCrWvhVmt0Qac3HgsjQK62FQ).

## :tv: Dia `15/07/2021`:

Aprendi sobre a definição de variáveis, como envia-las para o corpo de website, concatenar uma variável com uma frase e os tipos de variáreis. O PHP já realiza a tipagem das variáveis de forma geral, mais caso você queira forçar essa tipagem, você pode ver os exemplos abaixo:

```php
<?php
    $NomeDaVariavel = valor;

    // Exemplo

    $nome = "Tiago";
    $idade = 15;
    
    // Tipagem de variáveis
    // Após o sinal de =, você poderá abrir um () e definir o tipo da variável, como string se for uma String ou int se for um valor numérico.

    $nome1 = (string) "Tiago";
    $idade1 = (int) 15;
    
    // Enviar as variáveis para o corpo do site

    echo $nome;

    // Dois meios de concatenação

    // Podemos fazer a concatenação das variáveis usando o . para realizar a separação de uma variável com uma String no PHP
    echo $nome. " tem ". $idade " anos!"; 

    // Para meios mais simples, podemos usar as "" duplas para enviar as variáveis sem precisar usar os .

    echo "$nome tem $idade anos!";

    // Lembrando que '' não conseguem enviar variáveis em uma String!
?>
``` 