<section>
    <table>
        <tr>
            <th id="product">Prodotto</th><th id="quantita">Quantita'</th><th id="costo">Costo(per unità)</th><th id="remove"></th>
        </tr>
        <?php foreach($templateParams["product"] as $prod): ?>
        <tr>
            <th id="<?php echo $prod["nome"]; ?>"><?php echo $prod["nome"]; ?><th id="<?php echo $prod["quantità"]; ?>"><?php echo $prod["quantità"]; ?><th id="<?php echo $prod["prezzo"]; ?>"><?php echo $prod["prezzo"]; ?><th>Rimuovi dal carrello</th></td>
        </tr>
        <?php endforeach; ?>
    </table>
    <?php echo "totale carrello: "; echo $templateParams["total"][0]["totale"];?>
</section>