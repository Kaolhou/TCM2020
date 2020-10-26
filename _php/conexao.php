<?php
    //entrada
        $nome = $_POST["Fnome"];
        $idade = $_POST["idd"];
        $genero = $_POST["Fgen"];
        $oqh = $_POST["relato"];
    //conexão
        $conex = mysqli_connect('localhost', 'root', 'usbw', 'tcm') or die ("Erro ao acessar o Banco de Dados<br>Verifique sua conexão");
        $conex -> set_charset('utf8');
    //inserir dados
        $sql = "INSERT INTO denum (nome, idade, genero, oqhouve) VALUES ('$nome', '$idade', '$genero', '$oqh')";
    //query
        mysqli_query($conex, $sql) or die ("Erro ao cadastrar Registro");
        mysqli_close($conex);
    //Final
        echo "Registro feito com sucesso<br>";
        echo "<a href='denuncie.html'>Clique aqui para voltar</a>"
?>