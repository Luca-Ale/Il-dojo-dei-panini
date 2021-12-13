<section>
    <table>
        <tr>
            <th id="product">Prodotto</th><th id="quantita">Quantita'</th><th id="costo">Costo(per unità)</th><th id="autore">Prodotto</th>
        </tr>
        <?php foreach($templateParams["product"] as $prod): ?>
        <tr>
            <th id="<?php echo $prod["nome"]; ?>"><th id="<?php echo $prod["quantità"]; ?>"><th id="<?php echo $prod["prezzo"]; ?>"></td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>