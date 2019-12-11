<?php
    include_once('funcoes.php');
    include_once('head.php');
?>

    <section id="banner">
        <h2>Compre nossos produtos! =)</h2>
    </section>
    <section id="servico" class="container mt-5">
        <div class="row">
            <?php echo listarServicos(); ?>
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
<?php
    include_once('footer.php');
?>
