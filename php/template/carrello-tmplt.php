
<section class="table-responsive-sm">
    <h1 class="text-center fw-bold font-monospace">Carrello</h1>
    <table class="table table-responsive table-striped table-dark table-hover fw-light font-monospace">
        <thead>
            <tr class="fst-italic">
                <th id="product">Prodotto</th><th id="quantita">Quantita'</th><th id="costo">Costo(per unità)</th><th colspan="2">Modifica</th>
            <?php foreach($templateParams["product"] as $prod): ?>
            </tr>
        </thead>
        <tbody>
            <tr class="text-lowercase">
                <td id="<?php echo $prod["nome"]; ?>"><?php echo $prod["nome"]; ?></td>
                <td id="<?php echo $prod["quantita"]; ?>"><?php echo $prod["quantita"]; ?></td>
                <td id="<?php echo $prod["prezzo"]; ?>"><?php echo $prod["prezzo"]; ?>€</td>
                <td><a href="aggiungiSingoloProdotto.php?id=<?php echo $prod["codice_prodotto"]; ?>" class="btn btn-success btn-sm">+</a><a href="rimuoviSingoloProdotto.php?id=<?php echo $prod["codice_prodotto"]; ?>" class="btn btn-danger btn-sm">-</a></td>
                <td><a href="rimozione.php?id=<?php echo $prod["codice_prodotto"]; ?>" class="btn btn-danger btn-sm">rimuovi</a></td>
            <?php endforeach; ?>
            </tr>
            <tr>
                <td colspan="6"><?php echo "Totale: "; echo $templateParams["total"][0]["totale"];?>€</td>
            </tr>
            <tr>
                <td colspan="3"><a href="svuota_carrello.php" class="btn btn-danger btn-md">svuota il carrello</a></td>
                <td colspan="3"><a href="pagamento.php" class="btn btn-success btn-md">esegui l'ordine</a></td>
            </tr>
        </tbody>
    </table>
</section>
<div>
        <h2 class="text-center fw-bold font-monospace">Area notifiche</h2>
        <table class="table table-sm table-responsive-sm table-striped table-dark table-hover fw-light text-center font-monospace">
            <thead>
                <tr class="fst-italic bg-light">
                    <th id="idOrdine">Numero ordine</th><th id="data">Data ricezione</th><th id="oggetto">Oggetto</th><th id="testo">Testo</th>
                <?php foreach($templateParams["notifiche"] as $notifica): ?>            </tr>
            </thead>
            <tbody>
                <tr class="text-lowercase">
                    <td><?php echo $notifica["codice_ordine"]; ?></td>
                    <td><?php echo $notifica["DataOra"]; ?></td>
                    <td><?php echo $notifica["oggetto"]; ?></td>
                    <td><a href="articolo-completo.php?id=<?php echo $notifica["codice_ordine"]; ?>" class="btn btn-success btn-lg">leggi</a></td>
                <?php endforeach;?>
                </tr>
            </tbody>
        </table>
</div>