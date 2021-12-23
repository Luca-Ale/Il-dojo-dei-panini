
<section class="table-responsive-sm">
    <table class="table table-sm table-striped table-dark table-hover fw-light text-center">
        <tr class="fst-italic">
            <th id="product">Prodotto</th><th id="quantita">Quantita'</th><th id="costo">Costo(per unità)</th><th></th><th></th><th></th>
        <?php foreach($templateParams["product"] as $prod): ?>
        </tr>
        <tr class="text-lowercase">
            <td id="<?php echo $prod["nome"]; ?>"><?php echo $prod["nome"]; ?></td>
            <td id="<?php echo $prod["quantita"]; ?>"><?php echo $prod["quantita"]; ?></td>
            <td id="<?php echo $prod["prezzo"]; ?>"><?php echo $prod["prezzo"]; ?>€</td>
            <td><a href="aggiungiSingoloProdotto.php?id=<?php echo $prod["codice_prodotto"]; ?>"><input type="button" class="btn btn-success btn-lg" value="+" /></a></td>
            <td><a href="rimuoviSingoloProdotto.php?id=<?php echo $prod["codice_prodotto"]; ?>"><input type="button" class="btn btn-danger btn-lg" value="-" /></a></td>
            <td><a href="rimozione.php?id=<?php echo $prod["codice_prodotto"]; ?>"><input type="button" class="btn btn-danger btn-lg" value="rimuovi dal carrello" /></a></td>
        <?php endforeach; ?>
        </tr>
        <tr>
            <td><?php echo "Totale: "; echo $templateParams["total"][0]["totale"];?>€</td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
        <tr>
            <td><a href="svuota_carrello.php"><input type="button" class="btn btn-danger btn-lg" value="svuota il carrello" /></a></td>
            <td><a href="ordine.php"><input type="button" class="btn btn-success btn-lg" value="esegui l'ordine" /></a></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>
</section>