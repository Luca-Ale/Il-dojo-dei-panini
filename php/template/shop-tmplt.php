<section class="food"> 
                <div class="food-card wrapper">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-12">
                        <div class="text-content text-center">
                          <h1><?php echo $templateParams["titolo"]?></h1>
                          <p>Ecco qui la nostra fantastica selezione completa di panini</p>
                        </div>
                      </div>
                    </div>
                    <div class="row pt-5">
                        <?php foreach($templateParams["products"] as $prod):?>
                        <div class="col-lg-4 col-md-6 mb-lg-0 mb-5">
                            <div class="card">
                            <img src=<?php echo IMG_DIR.$prod["img"]?> alt="" class="img-fluid" /> 
                            <div class="pt-3">
                                <h4><?php echo $prod["nome"]?></h4> 
                                <p>Ingredienti : <?php echo $prod["ingredienti"]?></p>
                                <p class="prezzo">Prezzo : <?php echo $prod["prezzo"]?>$</p>
                                <a href="aggiunta_al_carrello.php?id=<?php echo $prod["codice_prodotto"]; ?>"><input type="button" class="btn btn-success" value="Aggiungi al carrello" /></a>
                            </div>
                            </div>
                        </div>
                        <?php endforeach;?>
                    </div>
                  </div>
                </div>
              </section>