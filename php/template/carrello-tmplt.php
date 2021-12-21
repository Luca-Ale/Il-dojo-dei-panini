<section>
    <table>
        <tr>
            <th id="product">Prodotto</th><th id="quantita">Quantita'</th><th id="costo">Costo(per unità)</th><th id="remove"></th>
        </tr>
        <?php foreach($templateParams["product"] as $prod): ?>
        <tr>
            <th id="<?php echo $prod["nome"]; ?>"><?php echo $prod["nome"]; ?><th id="<?php echo $prod["quantita"]; ?>"><?php echo $prod["quantita"]; ?><th id="<?php echo $prod["prezzo"]; ?>"><?php echo $prod["prezzo"]; ?><th><a href="rimozione.php?id=<?php echo $prod["codice_prodotto"]; ?>">Rimuovi dal carrello</th></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php echo "totale carrello: "; echo $templateParams["total"][0]["totale"];?>
    <a href="svuota_carrello.php">svuota il carrello
</section>