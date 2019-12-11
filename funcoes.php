<?php

$servicos = [
    [
        "imagem"=>"criando-sites.png",
        "titulo"=>"Site!",
        "descricao"=>"O site do seus sonhos sem ter que por a mão na massa. Estamos protos pra te entregá-lo pra você com tudo o que precisa no minimo de tempo."
    ],
    [
        "imagem"=>"ecommerce.png",
        "titulo"=>"Lojas vituais!",
        "descricao"=>"Quer vender seus produtos e serviços on-line e não sabe por onde começar? Deixa com a gente."
    ],
    [
        "imagem"=>"blog.png",
        "titulo"=>"Blogs!",
        "descricao"=>"A base de tudo o que se fala on-line. Criamoso seu canal de comunicação com o mundo. Comuniquese com seu público."
    ]
];
         
function listarServicos(){
    global $servicos;
    foreach ($servicos as $servico) {
        echo "<div class='col-4'>
        <div class='card'>
            <img src='images/".$servico['imagem']."' class='card-img-top' alt='Sites!'>
            <div class='card-body'>
                <h5 class='card-title'>".$servico['titulo']."</h5>
                <p class='card-text'>".$servico['descricao']."</p>
                <a href='#' class='btn btn-primary'>Sim, eu quero!</a>
            </div>
        </div>
    </div>";
    }
}