<?php
    //entrada
        $nome = $_POST["Fnome"];
        $idade = $_POST["idd"];
        $genero = $_POST["Fgen"];
        $oqh = $_POST["relato"];
    //conexão
        $conex = mysqli_connect('localhost', 'root', 'usbw', 'tcm') or die ("Error to connect with DataBase<br>Check your internet connection");
        $conex -> set_charset('utf8');
    //inserir dados
        $sql = "INSERT INTO denum (pais, nome, idade, genero, oqhouve) VALUES ('en', '$nome', '$idade', '$genero', '$oqh')";
    //query
        mysqli_query($conex, $sql) or die ("Error registering registration");
        mysqli_close($conex);
    //Final
        echo "Registration successful<br>";
        echo "<a href='../denuncie.html'>Click here to return</a>"
?>