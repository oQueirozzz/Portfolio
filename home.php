<php
session_start();

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Portifólio</title>
</head>

<body>
    <header>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid" >
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown" >
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="">Habilidades</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">características</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="projetos/projetos.php">Portfólio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Contato</a>
        </li>
        
        <li class="nav-item dropdown" id="dropdown-language">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Português
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Português</a></li>
            <li><a class="dropdown-item" href="#">Inglês</a></li>
            <li><a class="dropdown-item" href="#">Espanhol</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>

    </header>
     
    <main>
      <div class="social">
        <ul>
            <li><a href="#">Instagram <i class="imgs/icons8-instagram.gif"></i></a></li>
            <li><a href="#">Linkedin <i class="fa fa-facebook"></i></a></li>
            <li><a href="#">Github <i class="fa fa-dribbble"></i></a></li>
            <li><a href="#">Whatsapp <i class="fa fa-behance"></i></a></li>
        </ul>
      </div>
        
        <section class="wall">

          <div class="container-geral">
              <div class="description">
                <img src="img/OIP.jfif" alt="" width="48px" height="48px">
                  <div class="name">
                    <h1>Renan Queiroz</h1>
                    <p>@oqueiroz._</p>
                  </div>
                </div>
              <div class="text-content">
                    <p>
                    Aspirante a desenvolvedor full stack, com foco em soluções eficientes e inovadoras. Confira meus projetos e portfólios que destacam minha experiência em desenvolvimento web, aplicativos e sistemas personalizados.
                    </p>
                  </div>
              <div></div>
          
          </div>
        </section>

        
          
    </main>
<svg class="svg-curve" viewBox="0 0 1440 79" xmlns="http://www.w3.org/2000/svg">
          <path d="M-100 0C-100 0 218.416 55.835 693.5 55.835C1168.58 55.835 1487 0 1487 0V79H-100V0Z"></path>
        </svg>
    <footer>
        
        </footer>
        
        
        <link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <script>

          let social = document.querySelector(".social");
        social.addEventListener("mouseenter",) () => {
          social.style.transformX = "100px";
        }
          

        
       
        </script>
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>


</html>