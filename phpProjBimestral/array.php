<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container px-5 d-flex justify-content-center align-items-center min-vh-100">
        <div class="border p-5 rounded">
            <?php
            $instrumentos = array("guitarra", "bateria", "violino", "baixo", "saxofone", "tambor");

            $comprimento = count($instrumentos);
            echo "Tamanho do array 'instrumentos': $comprimento <hr>";

            $instrumentosString = implode(", ", $instrumentos);
            echo "Array 'instrumentos' transformado em string: $instrumentosString <hr>";

            $reverso = array_reverse($instrumentos);
            echo "Array 'instrumentos' ao contrário: <br>";
            print_r($reverso);
            echo "<br> <hr>";

            $num = array(300, 12, 245, 2, 53, 90);

            $menor = min($num);
            echo "Menor valor do array 'num': $menor <hr>";

            $maior = max($num);
            echo "Maior valor do array 'num': $maior";
            ?>
        </div>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>