<section>
    <h2>Prodotti</h2>
    <?php if(isset($templateParams["formmsg"])):?>
    <p><?php echo $templateParams["formmsg"]; ?></p>
    <?php endif; ?>
    <a href="gestisci-prodotti.php?action=1" class="btn btn-success">Inserisci Prodotto</a>
    <a href="login-admin-messaggi.php" class="btn btn-success">Area Notifiche</a>
    <table>
        <tr>
            <th>Nome</th><th>Immagine</th><th>Azione</th>
        </tr>
        <?php foreach($templateParams["prodotti"] as $prodotto): ?>
        <tr>
            <td><?php echo $prodotto["nome"]; ?></td>
            <td><img width="120" height="120" src="<?php echo IMG_DIR.$prodotto["img"]; ?>" alt="" /></td>
            <td>
                <a class="btn btn-success" href="gestisci-prodotti.php?action=2&id=<?php echo $prodotto["codice_prodotto"]; ?>">Modifica</a>
                <a class="btn btn-danger" href="gestisci-prodotti.php?action=3&id=<?php echo $prodotto["codice_prodotto"]; ?>">Cancella</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>