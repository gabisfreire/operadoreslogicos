<!DOCTYPE html>
<html>
<head>
    <title>Verificação de Idade</title>
</head>
<body>
    <style>
        body{
            background-color: lightblue;
           font-family: Arial, sans-serif;
           
            
        }
        </style>

    <h1>Operador Lógico</h1>
    <form method="post" action="">
        <label for="idade">Digite sua idade: </label>
        <input type="text" name="idade" id="idade">
        <input type="submit" value="Verificar">
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $idade = $_POST["idade"];
        
        if ($idade < 16) {
            echo "Não pode votar.";
        } elseif ($idade >= 16 && $idade < 18) {
            echo "Voto facultativo.";
        } elseif ($idade >= 18 && $idade <= 65) {
            echo "O voto é obrigatório.";
        } else {
            echo "O voto é facultativo.";
        }
    }
    ?>
</body>
</html>