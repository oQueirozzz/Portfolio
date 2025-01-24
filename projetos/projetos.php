<?php

$projetos = [
    [
        "title" => "Rimac",
        "description" => "Este projeto foi desenvolvido como uma réplica inspirada no site oficial da Rimac, adaptado para oferecer uma experiência completa de compra de veículos e apresentação da história da marca. O site combina um design sofisticado com informações detalhadas sobre a inovação e o legado da Rimac.",
        "link" => "https://guimenn.github.io/Rimac/",
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
        "link" => "https://oqueirozzz.github.io/site_tenis/q",
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
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="projetos.css">
    <title>Projetos</title>
</head>

<body>
    <header>
    <nav class="social">
            <ul>
                <li><a href="https://www.linkedin.com/in/renan-queiroz-a2a844338/" target="_blank" >Linkedin <img src="../imgs/367593_linkedin_business_network_social_icon.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/oqueiroz._/" target="_blank">Instagram <img src="../imgs/1161953_instagram_icon.png" alt=""></a></li>
                <li><a href="https://github.com/oQueirozzz" target="_blank">GitHub <img src="../imgs/1378045_circle_git_github_hovytech_media_icon.png" alt=""></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5511966300691&text=Ol%C3%A1%20vim%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20seus%20servi%C3%A7os!" target="_blank">Whatsapp <img src="../imgs/5305166_call_chat_mobile_whatsapp_whatsapp logo_icon.png" alt=""> </a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1 class="title">
            Projetos
        </h1>
       
        <a href="../index.php">
            <button class="button">
              <div class="button-box">
                <span class="button-elem">
                  <svg viewBox="0 0 46 40" xmlns="http://www.w3.org/2000/svg">
            <path
              d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"
            ></path>
                  </svg>
                </span>
                <span class="button-elem">
                  <svg viewBox="0 0 46 40">
            <path
              d="M46 20.038c0-.7-.3-1.5-.8-2.1l-16-17c-1.1-1-3.2-1.4-4.4-.3-1.2 1.1-1.2 3.3 0 4.4l11.3 11.9H3c-1.7 0-3 1.3-3 3s1.3 3 3 3h33.1l-11.3 11.9c-1 1-1.2 3.3 0 4.4 1.2 1.1 3.3.8 4.4-.3l16-17c.5-.5.8-1.1.8-1.9z"
            ></path>
                  </svg>
                </span>
              </div>
            </button>
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
                            
     <a class="btn" href="' . $projeto["link"] . '" target="_blank" style="--clr:#00ccff; --i:1">
          <span>Ver mais</span>
        </a> 
                        </div>
                    </div>
                   
                    <div class="row"></div>
                </section>';
            }

            ?>
        </div>
    </main>
    <footer>
      <p>Renan Queiroz &copy; 2025</p>
    </footer>
</body>

</html>