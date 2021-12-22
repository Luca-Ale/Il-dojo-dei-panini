<section>
    <h2>Prodotti</h2>
    <?php if(isset($templateParams["formmsg"])):?>
    <p><?php echo $templateParams["formmsg"]; ?></p>
    <?php endif; ?>
    <a href="gestisci-prodotti.php?action=1">Inserisci Prodotto</a>
    <table>
        <tr>
            <th>Titolo</th><th>Immagine</th><th>Azione</th>
        </tr>
        <?php foreach($templateParams["prodotti"] as $prodotto): ?>
        <tr>
            <td><?php echo $prodotto["nome"]; ?></td>
            <td><img width="120" height="120" src="<?php echo IMG_DIR.$prodotto["img"]; ?>" alt="" /></td>
            <td>
                <a href="gestisci-prodotti.php?action=2&id=<?php echo $prodotto["codice_prodotto"]; ?>">Modifica</a>
                <a href="gestisci-prodotti.php?action=3&id=<?php echo $prodotto["codice_prodotto"]; ?>">Cancella</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>