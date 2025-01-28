<?php

$projects = [
    [
        "title" => "Rimac",
        "description" => "This project was developed as a replica inspired by the official Rimac website, adapted to provide a complete vehicle purchase experience and showcase the brand's history. The site combines a sophisticated design with detailed information about Rimac's innovation and legacy.",
        "link" => "https://guimenn.github.io/Rimac/",
        "html" => "../sites/rimac.html"
    ],
    [
        "title" => "ExploraCar",
        "description" => "This project was developed to offer a practical and intuitive digital experience in the vehicle rental segment. The site features a modern, responsive design aligned with the needs of different types of users, from tourists to businesses.",
        "link" => "https://github.com/oQueirozzz/ExploraCar",
        "html" => "../sites/explora.html"
    ],
    [
        "title" => "Nike",
        "description" => "This project was developed as an adapted replica of the official Nike website, offering a dynamic and modern experience for sneaker shopping. The design and functionality were carefully recreated to reflect the brand's visual identity and highlight its products in an impactful way.",
        "link" => "https://oqueirozzz.github.io/site_tenis/q",
        "html" => "../sites/nike.html"
    ],
    [
        "title" => "Pool",
        "description" => "This project is a website that presents an interactive billiards game, designed to provide entertainment directly in the browser. With dynamic graphics and precise controls, the game allows users to have fun alone or compete with friends in challenging matches.",
        "link" => "https://github.com/felipez3r0/Sinuca-FirefoxOS",
        "html" => "../sites/Sinuca-FirefoxOS-master/index.html"
    ],
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/global.css">
    <link rel="stylesheet" href="../projetos/projetos.css">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200..700&display=swap" rel="stylesheet">
    <title>Projects</title>
</head>

<body>
    <header>
    <nav class="social">
            <ul>
                <li><a href="https://www.linkedin.com/in/renan-queiroz-a2a844338/" target="_blank" >Linkedin <img src="../imgs/367593_linkedin_business_network_social_icon.png" alt=""></a></li>
                <li><a href="https://www.instagram.com/oqueiroz._/" target="_blank">Instagram <img src="../imgs/1161953_instagram_icon.png" alt=""></a></li>
                <li><a href="https://github.com/oQueirozzz" target="_blank">GitHub <img src="../imgs/1378045_circle_git_github_hovytech_media_icon.png" alt=""></a></li>
                <li><a href="https://api.whatsapp.com/send?phone=5511966300691&text=Ol%C3%A1%20vim%20pelo%20site%20e%20gostaria%20de%20saber%20mais%20sobre%20seus%20servi%C3%A7os!" target="_blank">Whatsapp <img src="../imgs/5305166_call_chat_mobile_whatsapp_whatsapp logo_icon.png" alt=""> </a></li>
                <li><a href="../projetos/projetos.php">English <img src="../imgs/usa.webp" alt=""></a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h1 class="title">
            Projects
        </h1>
       
        <a href="home.php">
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
            foreach ($projects as $project) {
                echo '<section>
                    <div class="container-card">
                    <div class="card">
                    <iframe src="' . $project["html"] . '" frameborder="0"></iframe>
                        </div>
                    
                        <div class="text-content">
                            <h1>' . $project["title"] . '</h1>
                            <p>' . $project["description"] . '</p>
                             <a class="btn" href="' . $project["link"] . '" target="_blank" style="--clr:#00ccff; --i:1">
          <span>See more</span>
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
