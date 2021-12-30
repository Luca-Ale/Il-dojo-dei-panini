<?php 
$prodotto = $templateParams["prodotto"]; 
$azione = getAction($templateParams["azione"])
?>
<form action="processa-prodotto.php" method="POST" enctype="multipart/form-data">
    <h2>Gestisci Prodotto</h2>
    <?php if($prodotto==null): ?>
    <p>Prodotto non trovato</p>
    <?php else: ?>
    <ul class="list-group list-group-flush d-flex">
        <li class="list-group-item list-group-item-action">
            <label for="nomeprodotto">Nome:</label><input class="d-flex" type="text" id="nomeprodotto" name="nome" value="<?php echo $prodotto["nome"]; ?>" /> 
        </li>
        <li class="list-group-item list-group-item-action">
            <label  for="prezzoprodotto">Prezzo:</label><input class="d-flex" type="text" id="prezzoprodotto" name="prezzo" value="<?php echo $prodotto["prezzo"]; ?>" /> 
        </li>
        <li class="list-group-item list-group-item-action">
            <label for="quantitaprodotto">Quantità:</label><input class="d-flex" type="text" id="quantitaprodotto" name="quantita_disponibile" value="<?php echo $prodotto["quantita_disponibile"]; ?>">
        </li>
        <li class="list-group-item list-group-item-action">
            <label for="ingredientiprodotto">Ingredienti:</label><textarea class="d-flex" id="ingredientiprodotto" name="ingredienti"><?php echo $prodotto["ingredienti"]; ?></textarea>
        </li>
        <li class="list-group-item list-group-item-action">
            <?php if($templateParams["azione"]!=3): ?>
            <label for="imgprodotto">Immagine Prodotto</label><input class="d-flex" type="file" class="btn btn-primary" name="img" id="imgprodotto" />
            <?php endif; ?>
            <?php if($templateParams["azione"]!=1): ?>
            <img width="360" height="360" src="<?php echo IMG_DIR.$prodotto["img"]; ?>" alt="" />
            <?php endif; ?>
        </li>
        <li class="list-group-item">
            <input type="submit" name="submit" class="btn btn-success" value="<?php echo $azione; ?> Prodotto" />
            <a href="login.php" class="btn btn-secondary">Annulla</a>
        </li>
    </ul class="form-control-file">
        <?php if($templateParams["azione"]!=1): ?>
        <input type="hidden" name="codice_prodotto" value="<?php echo $prodotto["codice_prodotto"]; ?>" />
        <input type="hidden" name="oldimg" value="<?php echo $prodotto["img"]; ?>" />
        <?php endif;?>

        <input type="hidden" name="action" value="<?php echo $templateParams["azione"]; ?>" />
    <?php endif;?>
</form>