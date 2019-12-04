<?php

$servicos = [
    ["imagem"=>"images/criando-sites.png","titulo"=>"Site!","descricao"=>"O site do seus sonhos sem ter que por a mão na massa. Estamos protos pra te entregá-lo pra você com tudo o que precisa no minimo de tempo."],
    ["imagem"=>"images/ecommerce.png","titulo"=>"Lojas vituais!","descricao"=>"Quer vender seus produtos e serviços on-line e não sabe por onde começar? Deixa com a gente."],
    ["imagem"=>"images/blog.png","titulo"=>"Blogs!","descricao"=>"A base de tudo o que se fala on-line. Criamoso seu canal de comunicação com o mundo. Comuniquese com seu público."]
];



?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.0/css/bootstrap.min.css"
        integrity="sha384-SI27wrMjH3ZZ89r4o+fGIJtnzkAnFs3E4qz9DIYioCQ5l9Rd/7UAa8DHcaL8jkWt" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Home</title>
</head>
<body>
    <header>
        <!-- Just an image -->
        <nav class="navbar navbar-light bg-light">
            <a class="navbar-brand" href="#">
                <img src="images/logo.png" width="30" height="30" alt="">
            </a>
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serviços</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Sobre nós</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Contato</a>
                </li>
            </ul>
        </nav>
    </header>
    <section id="banner">
        <h2>Compre nossos produtos! =)</h2>
    </section>
    <section id="servico" class="container mt-5">
        <div class="row">
            <?php foreach($servicos as $servico){ ?>
            <div class="col-4">
                <div class="card">
                    <img src="<?php echo $servico["imagem"]; ?>" class="card-img-top" alt="Sites!">
                    <div class="card-body">
                        <h5 class="card-title">
                            <?php echo $servico["titulo"]; ?></p>
                        </h5>
                        <p class="card-text">
                            <?php echo $servico["descricao"]; ?></p>
                        <a href="#" class="btn btn-primary">Sim, eu quero!</a>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
    </section>
    <section id="sobre" class="container mt-5 mb-5">
        <div class="row border">
                <div class="col-6">
                    <img src="images/about.svg" class="img-fluid">
                </div>
                <div class="col-6 d-flex justify-content-center flex-column">
                    <h2>Sobre nós</h2>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Minima dolore facilis sed voluptatibus aut voluptate nemo, reprehenderit quaerat voluptatum quasi amet odio officiis soluta, eveniet ab quibusdam magnam possimus earum!
                    </p>
                </div>
        </div>
    </section>
</body>

</html>