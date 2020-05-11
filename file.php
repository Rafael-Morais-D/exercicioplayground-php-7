<?php

//var_dump ($_FILES);

$extensoesValidas = ['image/jpeg', 'image/png', 'image/jpg'];

if($_FILES['imagem']['error'] == 0){
    if(array_search($_FILES['imagem']['type'], $extensoesValidas) === false){
        echo "Extensão do arquivo invalida!";
        exit;
    }
    if(move_uploaded_file($_FILES['imagem']['tmp_name'], './img/'.$_FILES['imagem']['name'])){
        echo "Arquivo enviado com sucesso!";
    } else {
        echo "Erro na hora de salvar seu arquivo!";
    }
} else {
    echo "Erro no envio do arquivo!";
}

?>