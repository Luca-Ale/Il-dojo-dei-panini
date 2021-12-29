<!DOCTYPE html>
<html lang="it">
    <head>
        <!-- Bootstrap CSS -->
        <meta name="viewport" content="width=device-width, initial-scale=1" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link href="../css/style.css" id="theme-style" rel="stylesheet" type="text/css"/>
        <!-- Font Awesome -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

        <script src="../js/index/index_theme.js"></script> 

        <title>Il Dojo dei Panini | Homepage</title>
    </head>
    <body> <!-- ordine delle sezioni: NAVBAR, PRESENTAZIONE, ABOUT, PANINI, RECENSIONI, CARTINA, CONTATTI/FOOTER -->
        <!-- NAVIGATION BAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light" id="navbar"> 
            <div class="container-fluid">
              <a class="navbar-brand" href="../html/index.html"><img src="../imgs/logo.png" class="d-inline-block align-top logo-img" alt="" /></a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                  <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="shop.php">Shop</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="contatti.php">Contatti</a>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="shop.php">Menù</a> 
                  </li>
                </ul>

                <ul class="navbar-nav me-auto mb-2 mb-lg-0"> 
                  <li class="nav-item">
                    <a href="carrello.php"><i class="fas fa-shopping-cart"></i><span class="sr-only">Shop</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="login.php"><i class="fas fa-user-circle"></i><span class="sr-only">Account</span></a>
                  </li>
                  <li class="nav-item">
                    <a href="#"><i class="fas fa-lightbulb" id="icon_theme" onclick="swapTheme()"></i><span class="sr-only">Theme</span></a> 
                  </li>
                </ul>
              </div>
            </div>
          </nav>

          <!-- SLIDER IMMAGINI DOJO -->
          <div id="carouselBackground" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselBackground" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="../mockup/img/dojo_4.jpg" class="d-block w-100" alt="">
                <div class="carousel-caption">
                    <h1 class="display-2">Il Dojo dei Panini</h1>
                    <h3>dal 1924</h3> 
                </div>
              </div>
              <div class="carousel-item">
                <img src="../imgs/Dojo/dojo_wallpaper.jpg" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="../imgs/Dojo/samurai_dojo.jpg" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselBackground" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselBackground" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- SECTION PRESENTAZIONE -->
          <section class="section-presentazione">
            <div class="container-fluid padding">
              <div class="row presentazione text-center">
                <div class="col-12">
                  <h2 class="display-4">Il Dojo dei Panini</h2>
                </div>
                <hr>
                <div class="col-12">
                  <p class="lead fs-4">
                    Il dojo dei panini è un fantastico ristorante che opera nel settore dal lontano 1924.
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- ABOUT US SECTION -->
          <section>
            <div class="about-section wrapper">
              <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-7 col-md-12 mb-lg-0 mb-5">
                    <div class="card border-0">
                      <img src="../imgs/Dojo/restaurant2.jpg" alt="" class="img-fluid" />
                      <img src="../imgs/Dojo/restaurant.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                  <div class="col-lg-5 col-md-12 text-section fs-3">
                    <h2>I nostri ristoranti</h2>
                    <p>Sono sparsi per tutta Italia e Giappone!</p>
                    <p>L'idea di fondo è quella di poter dare a tutti la possibilità di assaggiare i panini più buoni di tutto il mondo! Per questo il nostro
                      principale obiettivo è di espanderci ed aprire tantissime catene in tantissime località! 
                    </p>
                  </div>
                </div>
              </div>
              <div class="container about-food">
                <div class="row align-items-center">
                  <div class="col-lg-5 col-md-12 text-section mg-lg-0 mb-5 fs-3">
                    <h2>Le nostre pietanze</h2> 
                      <p>Il dojo ha qualsiasi tipo di pietanza, in modo da andare incontro alle necessità alimentari di chiunque. Si pone molta attenzione
                        alle pietanze plant-based, le quali permettono di avere una fonte proteica superiore rispetto al consumo di carne, in modo da condurre
                        uno stile di vita sano.
                      </p>
                      <h2>I nostri ingredienti speciali: </h2>
                    <ul class="py-1 fs-3">
                      <li class="fs-3">Tanto amore</li>
                      <li class="fs-3">Tanta passione</li>
                      <li class="fs-3">Tanto impegno</li>
                    </ul>
                  </div>
                  <div class="col-lg-7 col-md-12">
                    <div class="card border-0">
                      <img src="../imgs/Food/focaccia_sandwiches.jpg" alt="" class="img-fluid" />
                      <img src="../imgs/Food/sushi.jpg" alt="" class="img-fluid" />
                      <img src="../imgs/Food/toasts.jpg" alt="" class="img-fluid" />
                      <img src="../imgs/Food/pizze_classiche_gourmet.jpg" alt="" class="img-fluid" />
                      <img src="../imgs/Food/contorni_insalate.jpg" alt="" class="img-fluid" />
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SECTION: FOOD CARDS -->
          <section class="food"> 
            <div class="food-card wrapper">
              <div class="container">
                <div class="row">
                  <div class="col-sm-12">
                    <div class="text-content text-center">
                      <h2>I nostri prodotti</h2>
                    </div>
                  </div>
                </div>
                <div class="row pt-3">
                        <?php foreach($templateParams["products"] as $prod):?>
                        <div class="col-lg-4 col-md-8 mb-lg-10 mb-5">
                            <div class="card card-img-top">
                            <img src=<?php echo IMG_DIR.$prod["img"]?> alt="" class="thumbnail img-fluid"/> 
                            <div class="pt-3">
                                <h4><?php echo $prod["nome"]?></h4>
                                <p>Ingredienti : <?php echo $prod["ingredienti"]?></p>
                                <p>Prezzo : <?php echo $prod["prezzo"]?>€</p>
                                <a href="aggiunta_al_carrello.php?id=<?php echo $prod["codice_prodotto"]; ?>"><input type="button" class="btn btn-success" value="Acquista!" /></a>
                            </div>
                            </div>
                        </div>
                      <?php endforeach;?>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- SLIDER RECENSIONI -->
          <div class="jumbotron jumbotron-fluid bg-light" id="jumbotron-recensioni">
            <div class="container text-center">
              <h1 class="display-4 text-danger">Recensioni</h1>
              <p class="lead">Buono</p>
            </div>
          </div>

          <div class="container">
            <div class="row">
              <div class="col-lg-4 mb-3">
                <div class="card border-success">
                  <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="../imgs/Review/testimonial_chef2.png" alt="" class="mr-4" />

                    <div class="review">
                      <p class="font-weight-bold mb-0">Giorgio Menestrelli</p>
                        <p class="text-muted mb-0">Chef pluristellato</p>

                        <ul class="list-inline text-center m-0">
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                  </div>

                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p class="mb-0"><i class="fas fa-quote-left text-success"></i>Il miglior Dojo d'Italia.<i class="fas fa-quote-right text-success"></i></p>
                    </blockquote>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card border-success">
                  <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="../imgs/Review/testimonial_chef.png" alt="" class="mr-4" />

                    <div class="review">
                      <p class="font-weight-bold mb-0">Chiara Pesci</p>
                        <p class="text-muted mb-0">Chef, 2 Stelle Michelin</p>

                        <ul class="list-inline text-center m-0">
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                        </ul>
                    </div>
                  </div>

                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p class="mb-0"><i class="fas fa-quote-left text-success"></i>Buono!<i class="fas fa-quote-right text-success"></i></p>
                    </blockquote>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card border-success">
                  <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="../imgs/Review/testimonial-1.jpg" alt="" class="mr-4" />

                    <div class="review">
                      <p class="font-weight-bold mb-0">Giorgia Rossi</p>
                        <p class="text-muted mb-0">Influencer</p>

                        <ul class="list-inline text-center m-0">
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                  </div>

                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p class="mb-0"><i class="fas fa-quote-left text-success"></i>Buonissimo!<i class="fas fa-quote-right text-success"></i></p>
                    </blockquote>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card border-success">
                  <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="../imgs/Review/testimonial-4.jpg" alt="" class="mr-4" />

                    <div class="review">
                      <p class="font-weight-bold mb-0">Miriam Verdi</p>
                        <p class="text-muted mb-0">Blogger</p>

                        <ul class="list-inline text-center m-0">
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                        </ul>
                    </div>
                  </div>

                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p class="mb-0"><i class="fas fa-quote-left text-success"></i>Superbo!<i class="fas fa-quote-right text-success"></i></p>
                    </blockquote>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card border-success">
                  <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="../imgs/Review/testimonial-2.png" alt="" class="mr-4" />

                    <div class="review">
                      <p class="font-weight-bold mb-0">Maria Bianchi</p>
                        <p class="text-muted mb-0">Critica culinaria</p>

                        <ul class="list-inline text-center m-0">
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                        </ul>
                    </div>
                  </div>

                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p class="mb-0"><i class="fas fa-quote-left text-success"></i>Bono!<i class="fas fa-quote-right text-success"></i></p>
                    </blockquote>
                  </div>
                </div>
              </div>

              <div class="col-lg-4 mb-3">
                <div class="card border-success">
                  <div class="d-flex p-3 just-content-start align-items-center">
                    <img src="../imgs/Review/testimonial-2-gentleman.jpg" alt="" class="mr-4" /> 

                    <div class="review">
                      <p class="font-weight-bold mb-0">Marco Gialli</p>
                        <p class="text-muted mb-0">Giornalista culinario</p>

                        <ul class="list-inline text-center m-0">
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star"></i></li>
                          <li class="list-inline-item"><i class="fas fa-star-half-alt"></i></li>
                        </ul>
                    </div>
                  </div>

                  <div class="card-body">
                    <blockquote class="blockquote">
                      <p class="mb-0"><i class="fas fa-quote-left text-success"></i>Eccellente<i class="fas fa-quote-right text-success"></i></p>
                    </blockquote>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <!-- SECTION CARTINA -->
          <div class="container-fluid"> 
            <section class="map">
              <div class="row">
                <h2>Dove ci troviamo? <i class="fas fa-map-marked-alt"></i></h2>
                <iframe class="well well-sm col-xs-4" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1238.9642814976892!2d12.234307279230064!3d44.14768737363995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x132ca4c8a9e0b5cb%3A0xbbd5902e81162eed!2sUniversit%C3%A0%20di%20Bologna%20-%20Dipartimento%20di%20Informatica%20-%20Ingegneria%20E%20Scienze%20Informatiche!5e0!3m2!1sit!2sit!4v1638652999771!5m2!1sit!2sit" width="680" height="480" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                <div class="col-xs-8">
                </div>
              </div>
            </section>
          </div>

          <!-- FOOTER -->
          <footer class="page-footer bg-dark"> 
            <div class="bg-dark">
              <div class="container">
                <div class="row py-4 d-flex align-items-center">
                </div>
              </div>
            </div>

            <div class="container text-center text-md-left mt-5">
              <div class="row">
                <div class="col-md-3 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">Contattateci</h6>
                  <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />
                  <ul class="list-unstyled">
                    <li class="my-2"><i class="fas fa-home">Via Cesare Pavese, 50, Cesena (Italy)</i></li>
                    <li class="my-2"><i class="fas fa-envelope"> dojopanini@gmail.com</i></li>
                    <li class="my-2"><i class="fas fa-phone">(+39) 333 666 999</i></li>
                    <li class="my-2"><i class="fas fa-fax"></i>1-333-222-6666</li>
                  </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">Menù</h6>
                  <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                  <ul class="list-unstyled">
                    <li class="my-2"><a href="login.php">Panini</a></li>
                    <li class="my-2"><a href="login.php">Bibite</a></li>
                    <li class="my-2"><a href="login.php">Pizze</a></li>
                    <li class="my-2"><a href="login.php">Vegetariano</a></li>
                  </ul>
                </div>

                <div class="col-md-2 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">I nostri social</h6>
                  <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                  <ul class="list-unstyled">
                    <li class="my-2"><a href="https://github.com/Luca-Ale/Il-dojo-dei-panini"><i class="fab fa-github"></i></a></li>
                    <li class="my-2"><a href=""><i class="fab fa-twitter"></i></a></li>
                    <li class="my-2"><a href=""><i class="fab fa-instagram"></i></a></li>
                    <li class="my-2"><a href=""><i class="fab fa-facebook"></i></a></li>
                  </ul>
                </div>

                <div class="col-md-3 mx-auto mb-4">
                  <h6 class="text-uppercase font-weight-bold">Metodi di pagamento</h6>
                  <hr class="bg-danger mb-4 mt-0 d-inline-block mx-auto" />

                  <ul class="list-unstyled">
                    <li class="my-2"><i class="fab fa-paypal"></i></li>
                    <li class="my-2"><i class="fab fa-cc-visa"></i></li>
                    <li class="my-2"><i class="fab fa-cc-mastercard"></i></li>
                    <li class="my-2"><i class="fab fa-bitcoin"></i></li>
                  </ul>
                </div>
              </div>
            </div>

            <div class="footer-copyright text-center py-3">
              <p>&copy; Copyright Il Dojo dei Panini</p>
            </div>

          </footer>

          <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>