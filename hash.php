<?php

    $senha = "curso123";
    $senhaC = password_hash($senha, PASSWORD_DEFAULT);
    $digitado = $_POST['senha'];

    if(password_verify($digitado, $senhaC)){
        echo "Senha correta";
    } else {
        echo "Senha incorreta";
    }

    /* echo $senha."<br>";
    echo $senhaC."<br>";

    var_dump(password_verify($senha, $senhaC)); */

?>