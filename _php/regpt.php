<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>TCM</title>
    <link rel="stylesheet" type="text/css" href="../_css/estilo.css">
    <link rel="stylesheet" type="text/css" href="../_css/dataanime.css">
    <link rel="stylesheet" type="text/css" href="../_css/registros.css">
</head>
<body>
    <nav>
        <ul class="nav">
              
            <li><a href="../pt/index.html">Início</a></li>
            <li><a href="../pt/galeria.html">Galeria</a></li>
            <li><a href="../pt/casos.html">Casos</a></li>
            <li><a href="../pt/denuncie.html">Denuncie</a></li>
            <li><a href="../pt/sobre.html">Sobre Nós</a></li>  
                <li><a href="#">Idioma</a><ul>
                    <li><a href="casos.html">Português</a></li>
                    <li><a href="../en/index.html">English</a></li>
                    </ul>
                </li>
        </ul>
    </nav>
    <div id="interface">
    <table>
        <tr><th>Nome</th><th>Idade</th><th>Gênero</th><th>O que Houve</th></tr>
        <?php
        //conexão
            $conex = mysqli_connect('localhost', 'root', 'usbw', 'tcm') or die ("Error to connect with DataBase<br>Check your internet connection");
            $conex -> set_charset('utf8');
        //contar registros
            $count = "SELECT COUNT('id') AS contar from denum where id > 0";
            $resul = mysqli_query($conex, $count) or die ("erro");
            $str = mysqli_fetch_assoc($resul);
            $regis = $str['contar'];
        //calculo de condições
        for($regis = 1; $regis <= $str['contar']; $regis++){
            $id = "SELECT pais as id from denum where id = $regis";
            $resul1 = mysqli_query($conex, $id) or die ("erro");
            $str1 = mysqli_fetch_assoc($resul1);
            $id1 = $str1['id'];
            //echo "$id1<br>";
            //inserir um registro, cada comentario a partir do "if" é uma coluna
            if($id1 = "br"){
                //nome
                    $nome = "SELECT nome as nom from denum where id = $regis";
                    $nome1 = mysqli_query($conex, $nome) or die ("erro");
                    $nome2 = mysqli_fetch_assoc($nome1);
                    $nome3 = $nome2['nom'];
                    echo "<tr><td>$nome3</td>";
                //idade
                    $idade = "SELECT idade as idd from denum where id = $regis";
                    $idade1 = mysqli_query($conex, $idade) or die ("erro");
                    $idade2 = mysqli_fetch_assoc($idade1);
                    $idade3 = $idade2['idd'];
                    echo "<td>$idade3</td>";
                //genero
                    $genero = "SELECT genero as gen from denum where id = $regis";
                    $genero1 = mysqli_query($conex, $genero) or die ("erro");
                    $genero2 = mysqli_fetch_assoc($genero1);
                    $genero3 = $genero2['gen'];
                    echo "<td>$genero3</td>";
                //oq houve
                    $oqhouve = "SELECT oqhouve as oqh from denum where id = $regis";
                    $oqhouve1 = mysqli_query($conex, $oqhouve) or die ("erro");
                    $oqhouve2 = mysqli_fetch_assoc($oqhouve1);
                    $oqhouve3 = $oqhouve2['oqh'];
                    echo "<td class='oqhouve'>$oqhouve3</td></tr>";
            }
        }

        //fechar mysql
            mysqli_close($conex);
        ?>
        
    </table>
    </div>
</body>