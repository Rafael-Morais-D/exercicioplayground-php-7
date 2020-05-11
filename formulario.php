<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
        form{
            border:1px solid black;
            height: 330px;
            display: flex;
            flex-flow: column;
            align-items: center;
            justify-content: center;
            width: 50%;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center">
            <form action="file.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="nomeCompleto">Nome Completo</label>
                    <input type="text" class="form-control" id="nomeCompleto" placeholder="Rafael Morais">
                </div>
                <div class="form-group">
                    <label for="email">E-mail</label>
                    <input type="email" class="form-control" id="email" placeholder="email@exemplo.com">
                </div>
                <div class="form-group">
                    <label for="">Imagem do usuário</label>
                    <input type="file" name="imagem" value="">
                </div>
                <div class="form-group">
                    <button class="btn btn-primary" type="submit" name="button">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</body>
</html>