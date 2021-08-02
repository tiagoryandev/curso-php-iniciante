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

## :tv: Dia `16/07/2021`:

Nesse dia eu aprendi sobre as funções aritméticas no PHP, que foi algo muito simples:
- Somar: `+`
- Subtrair: `-`
- Multiplicar: `*`
- Dividir: `/`
- Modulo: `%`

Aprendi a como fazer a busca de dados dentro de uma **Query** na **URL**:
```php
<?php
    $numero1 = $_GET["Numero1"];
    $numero2 = $_GET["Numero2"];
    $resultado = $numero1 + $numero2;

    // http://localhost/curso-php/aula5.php?Numero1=10%Numero2=10

    echo "<h1>Resultado é $resultado</h1>";
?>
```

E as funções matemáticas, onde possui meios de pegar valores absolutos, potenciação, aiz quadrada, arredondamento, buscar a parte inteira de um valor real e realizar a formatação de um valor numérico!
```php
<?php
    $absoluto = abs($numero1);
    $potenciacao = pow($numero1, $numero2);
    $raiz = sqrt($numero1);
    $arredondamento = round($numero1); // ceil ou floor

    $inteira = intval($numero1);
    $formatarMoney = number_format($numero1, 2, ",", ".");
?>
```

## :tv: Dia `17/07/2021`:

Nessa aula foi meio chato, pois aprendi apenas os operadores de atribuição, referência de variáveis e variáveis de variáveis. é bem difícil de entender mais irei pegar o jeito.

```php
<?php
    // Atribuição de Variáveis

    $valor = 10;
    $valor = $valor + 10; // Redefine o valor para o Valor + 10
    $valor += 10; // Adiciona + 10
    $valor++; // Adiciona 1

    // Referência de Variáveis

    $a = 10;
    $b = &$a; // Faz referência a a
    $c = $b + 10;

    // Variáveis de Variáveis

    $site = "cursoemvideo";
    $$site = "cursophp";

    echo "$site tem $cursoemvideo"; // Cria uma variável com o nome do valor da primeira variável                                             
?>
```

## :tv: Dia `18/07/2021`:
Aprendi sobre operadores no PHP, aprendi rápido pois a syntax é muito parecida com javascript.

```php
<?php
    $a > $b; // a maior que b
    $a < $b; // a menor que b
    $a >= $b; // a maior ou igual a b
    $a <= $b; // a menor ou igual a b
    $a == $b; // a igual b
    $a === $b; // a com tipo e valor igual a b
?>
```

## :tv: Dia `01/09/2021`:

Depois de muito tempo eu voltei e já assisti mais uma aula do curso de PHP, onde aprendi a enviar dados de um formulário para um arquivo PHP.

Onde você pode criar um formulário e redireciona-se os dados para um arquivo PHP. Onde você pode usar os métodos `$_GET` para requisições GET e `$_POST` para requisições POST.

E por fim, aprendi um pouco sobre condições no PHP, onde usamos o `isset` para verificar se um valor enviado em uma Query da URL está setada.

```php
<?php
    $valor = isset($_GET["v"]) ? $_GET["v"] : "nenhum valor setado";

    echo $valor;
?>
```

# :tv: Dia `02/09/2021`:

Hoje eu aprendi sobre os Operadores Condicionais, os famosos `IF`, `ELSE` e `ELSEIF`. Que é relativamente igual ao JavaScript.

```php
<?php
    if (1 > 2) {
        echo "1 é maior que 2";
    } else {
        echo "2 é maior que 1";
    };

    // imprime 2 é maior que 1
?>
```