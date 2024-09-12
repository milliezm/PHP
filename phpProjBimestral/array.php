<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php
    //$frutas = array("Laranja", "Banana", "Maçã", "Uva");
    // print_r($frutas);

    $materias = array("história", "português", "física", "ed. física", "geografia", "filosofia");

    //remove o primeiro elemento do array
    /*$menosUm = array_shift($materias);
    print_r($menosUm);
    print_r($materias);*/

    //remove o ultimo elemento do array
    /*$materiaRemovida = array_pop($materias);
    print_r($materias);*/

    //adicionar um elemento no inicio do array
    /*array_unshift($materias, "sociologia");
    print_r($materias);*/

    //adicionar elemento no final do array
    /*array_push($materias, "química");
    print_r($materias);*/

    //criar array com 7 elementos, todos preenchidos com a mesma coisa
    /*$fill = array_fill(0, 7, "matemática");
    print_r($fill);*/

    //junta todos os elementos em uma string, separando-os por virgula
    /*$implode = implode(",", $materias);
    print($implode);*/

    //corta e remove um pedaço do array; neste caso: 'física'
    /*array_splice($materias, 2, 1);
    print_r($materias);*/

    //mostra o numero de elementos em um array
    /*$tamanho = count($materias);
    echo($tamanho);*/

    //cria um novo array usando uma função + um array ja existente
    function addNumero($materia){
        return $materia . "2";
    }

    $materias2 = array_map("addNumero", $materias);
    print_r($materias2);

    //adicionar img
    ?>
</body>
</html>