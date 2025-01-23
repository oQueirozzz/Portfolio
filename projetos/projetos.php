<?php

$projetos = [
    [
        "title" => "Rimac",
        "description" => "Este projeto foi desenvolvido como uma réplica inspirada no site oficial da Rimac, adaptado para oferecer uma experiência completa de compra de veículos e apresentação da história da marca. O site combina um design sofisticado com informações detalhadas sobre a inovação e o legado da Rimac.",
        "link" => "https://github.com/Guimenn/Rimac",
        "html" => "../sites/rimac.html"
    ],
    [
        "title" => "ExploraCar",
        "description" => "Este projeto foi desenvolvido para oferecer uma experiência digital prática e intuitiva no segmento de aluguel de veículos. O site apresenta um design moderno, responsivo e alinhado às necessidades de diferentes tipos de usuários, desde turistas a empresas.",
        "link" => "https://github.com/oQueirozzz/ExploraCar",
        "html" => "../sites/explora.html"
    ],
    [
        "title" => "Nike",
        "description" => "Este projeto foi desenvolvido como uma réplica adaptada do site oficial da Nike, oferecendo uma experiência dinâmica e moderna para a compra de tênis. O design e a funcionalidade foram cuidadosamente recriados para refletir a identidade visual da marca e destacar seus produtos de maneira impactante.",
        "link" => "https://github.com/oQueirozzz/site_tenis",
        "html" => "../sites/nike.html"
    ],
    [
        "title" => "Sinuca",
        "description" => "Este projeto é um site que apresenta um jogo interativo de bilhar, projetado para proporcionar entretenimento diretamente no navegador. Com gráficos dinâmicos e controles precisos, o jogo permite aos usuários se divertir sozinhos ou competir com amigos em partidas desafiadoras.",
        "link" => "https://github.com/felipez3r0/Sinuca-FirefoxOS",
        "html" => "../sites/Sinuca-FirefoxOS-master/index.html"
    ],
];
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="projetos.css">
    <title>Projetos</title>
</head>

<body>
    <header>

    </header>
    <main>
        <h1 class="title">
            Projetos
        </h1>
        <a class="voltar" href="../index.php">
            <span><img src="../imgs/icons8-back-38.png" alt=""></span>
        </a>
        <div class="container">
            <?php
            foreach ($projetos as $projeto) {
                echo '<section>
                    <div class="container-card">
                    <div class="card">
                    <iframe src="' . $projeto["html"] . '" frameborder="0"></iframe>
                        </div>
                    
                        <div class="text-content">
                            <h1>' . $projeto["title"] . '</h1>
                            <p>' . $projeto["description"] . '</p>
                            
     <a class="btn" href="' . $projeto["link"] . '" style="--clr:#00ccff; --i:1">
          <span>Ver mais</span>
        </a> 
                        </div>
                    </div>
                </section>';
            }

            ?>
        </div>
    </main>
</body>

</html>