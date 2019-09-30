<?php
    $nomeSistema = "Digital House";
    $usuario = ["nome"=>"Felipe"]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loja E-commerce Curso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <header class= "navbar">
        <h1 id="logo"><?php echo $nomeSistema;?></h1>
        <nav>
            <ul class="nav">
                <?php if(isset($usuario) && $usuario !== "") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Olá <?php echo $usuario["nome"]; ?></a>
                    </li>
                <?php }else { ?>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                        </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Cadastrar</a>
                        </li>
                <?php } ?>
            </ul>
        </nav>
    </header>
    <main>
        <section class = "container mt-4">
            <div class="row justify-content-between">
                <div class="col-lg-3 card text-center">
                    <h2>Curso de Admisnitração</h2>
                    <img class="card-img-top" src="imagens/curso1.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">R$3.000,00</h5>
                            <a href="#" class="btn btn-primary">COMPRAR</a>
                        </div>
                </div>
                <div class="col-lg-3 card text-center">
                    <h2>Curso de Engenharia</h2>
                    <img class="card-img-top" src="imagens/curso2.jpeg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">R$5.000,00</h5>
                            <a href="#" class="btn btn-primary">COMPRAR</a>
                        </div>
                </div>
                <div class="col-lg-3 card text-center">
                    <h2>Curso de Programação</h2>
                    <img class="card-img-top" src="imagens/curso3.jpg" alt="Card image cap">
                        <div class="card-body">
                            <h5 class="card-title">R$10.000,00</h5>
                            <a href="#" class="btn btn-primary">COMPRAR</a>
                        </div>
                </div>
        </section>
    </main>


    </body>
</html>