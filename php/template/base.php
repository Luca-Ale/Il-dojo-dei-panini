<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Bootstrap CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../css/base_style.css" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
        <?php
        if(isset($templateParams["js"])):
            foreach($templateParams["js"] as $script):
        ?>
            <script src="<?php echo $script; ?>"></script>
        <?php
            endforeach;
         endif;
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <title>Title: <?php echo $templateParams["titolo"];?></title>
    </head>
    <body class="d-flex flex-column min-vh-100">
        <header>
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> <!-- TODO: md , bg-dark o bg-light -->
            <div class="container-fluid">
              <a class="navbar-brand" href="index.php"><img src="../imgs/logo.png" class="d-inline-block align-top logo-img" alt="Logo Dojo dei Panini" /></a> <!-- TODO: logo -->
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a> <!-- TODO: add link -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contatti.php">Contatti</a> <!-- TODO: add link -->
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="shop.php">Menù</a> <!-- TODO: add link -->
                  </li>
                </ul>

                <ul class="navbar-nav mb-2 mb-lg-0"> <!-- TODO: metterli sulla destra -->
                  <li class="nav-item">
                    <a href="carrello.php"><span class="fas fa-shopping-cart"></span><span class="sr-only">Shop</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="login.php"><span class="fas fa-user-circle"></span><span class="sr-only">Account</span></a>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
        </header>

        <main>
        <?php
        if(isset($templateParams["nome"])){
            require($templateParams["nome"]);
        }
        ?>
        </main>

        <!-- TODO: FOOTER -->
        <footer class="page-footer bg-dark mt-auto"> <!-- TODO: aggiungere una colonna per delle informazioni generali? -->
            <div class="bg-dark">
            <div class="container">
                <div class="row py-4 d-flex align-items-center">
                </div>
            </div>
            </div>

            <div class="container text-center text-md-left mt-5">
            <div class="row">
                <div class="col-md-3 mx-auto mb-4">
                <p class="text-uppercase font-weight-bold">Contattateci</p>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />
                <ul class="list-unstyled">
                    <li class="my-2"><span class="fas fa-home">Via Cesare Pavese, 50, Cesena (Italy)</span></li>
                    <li class="my-2"><span class="fas fa-envelope"> dojopanini@gmail.com</span></li> <!-- <img src="../icons/envelope-open-solid.svg" width="24" height="24" alt="" /> -->
                    <li class="my-2"><span class="fas fa-phone">(+39) 333 666 999</span></li>
                    <li class="my-2"><span class="fas fa-fax"></span>1-333-222-6666</li>
                </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                <p class="text-uppercase font-weight-bold">Menù</p>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                <ul class="list-unstyled">
                    <li class="my-2"><a href="../html/shop.html">Panini</a></li>
                    <li class="my-2"><a href="../html/shop.html">Bibite</a></li>
                    <li class="my-2"><a href="../html/shop.html">Pizze</a></li>
                    <li class="my-2"><a href="../html/shop.html">Vegetariano</a></li>
                </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                <p class="text-uppercase font-weight-bold">I nostri social</p>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                <ul class="list-unstyled">
                    <li class="my-2"><a href="https://github.com/Luca-Ale/Il-dojo-dei-panini" title="github"><span class="fab fa-github"></span></a></li>
                    <li class="my-2"><span class="fab fa-twitter"></span></li>
                    <li class="my-2"><span class="fab fa-instagram"></span></li>
                    <li class="my-2"><span class="fab fa-facebook"></span></li>
                </ul>
                </div>

                <div class="col-md-3 mx-auto mb-4">
                <p class="text-uppercase font-weight-bold">Metodi di pagamento</p>
                <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                <ul class="list-unstyled">
                    <li class="my-2"><span class="fab fa-paypal"></span></li>
                    <li class="my-2"><span class="fab fa-cc-visa"></span></li>
                    <li class="my-2"><span class="fab fa-cc-mastercard"></span></li>
                    <li class="my-2"><span class="fab fa-bitcoin"></span></li>
                </ul>
                </div>
            </div>
            </div>

            <div class="footer-copyright text-center py-3">
            <p>&copy; Copyright Il Dojo dei Panini</p>
            </div>

        </footer>    
    </body>
</html>