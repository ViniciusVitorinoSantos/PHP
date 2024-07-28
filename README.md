
# Introdução ao PHP 🐘🐘🐘
 	PHP (Hypertext Preprocessor) é uma linguagem de script de uso geral que é especialmente adequada para o desenvolvimento web. Ele pode ser embutido no HTML e geralmente é usado em conjunto com um banco de dados MySQL.
***
#### Configuração do Ambiente 👩‍💻🖥️

	Antes de começar a programar em PHP, você precisa de um servidor web que suporte PHP e de um editor de texto. O pacote mais comum para configurar um ambiente PHP é o **XAMPP** ou **WAMP** (para Windows), **MAMP** (para macOS) ou **LAMP** (para Linux). Estes pacotes incluem o Apache (servidor web), MySQL (banco de dados), e PHP.
***
### Sintaxe Básica

Vamos começar com alguns exemplos básicos de PHP. 🚀

#### Hello World

Um exemplo clássico de "Hello World" em PHP:
```
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hello World in PHP</title>
</head>
<body>
    <?php
        echo "Hello, World!";
    ?>
</body>
</html>

```
***
#### Variáveis

Em PHP, variáveis são prefixadas com um `$`:
```
<?php
$name = "John";
$age = 25;
echo "Name: $name, Age: $age";
?>

```
***
#### Arrays

Arrays podem ser indexados ou associativos:
```
<?php
// Array indexado
$fruits = array("Apple", "Banana", "Cherry");
echo $fruits[0]; // Output: Apple

// Array associativo
$person = array("name" => "Alice", "age" => 30);
echo $person["name"]; // Output: Alice
?>

```
***

#### Estruturas de Controle

If-Else
```
<?php
$number = 10;

if ($number > 0) {
    echo "The number is positive.";
} elseif ($number < 0) {
    echo "The number is negative.";
} else {
    echo "The number is zero.";
}
?>

```
***

Loop (While, Do-While, For, Foreach)
```
<?php
// While loop
$i = 0;
while ($i < 5) {
    echo $i;
    $i++;
}

// Do-While loop
$i = 0;
do {
    echo $i;
    $i++;
} while ($i < 5);

// For loop
for ($i = 0; $i < 5; $i++) {
    echo $i;
}

// Foreach loop
$colors = array("Red", "Green", "Blue");
foreach ($colors as $color) {
    echo $color;
}
?>

```
***

### Trabalhando com Formulários

PHP é frequentemente usado para processar dados de formulários. Aqui está um exemplo básico:
```
<!--Formulario HTML-->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <form action="process.php" method="post">
        Name: <input type="text" name="name"><br>
        Age: <input type="text" name="age"><br>
        <input type="submit">
    </form>
</body>
</html>

<!-- process.php -->
<?php
$name = $_POST['name'];
$age = $_POST['age'];
echo "Name: $name, Age: $age";
?>

```

***

### Conexão com Banco de Dados MySQL

Aqui está um exemplo de como conectar-se a um banco de dados MySQL e executar uma consulta:
```
<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "database";

// Criar conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT id, firstname, lastname FROM MyGuests";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output de cada linha
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>

```
***
### Próximos Passos

Agora que cobrimos os fundamentos, você pode começar a explorar mais sobre PHP:

- [ ] Funções ➕➖➗🟰
- [ ]  Manipulação de arquivos 📁📂🗃️
- [ ] Sessões e cookies 🍪🍘
- [ ]  Segurança (como proteger seu código contra injeção SQL, XSS, etc.) 👮👮‍♀️👮‍♂️🚓

