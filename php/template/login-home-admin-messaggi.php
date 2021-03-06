<section>
    <h2>Messaggi</h2>
    <?php if(isset($templateParams["formmsg"])):?>
    <p><?php echo $templateParams["formmsg"]; ?></p>
    <?php endif; ?>
    <a href="gestisci-messaggi.php?action=1" class="btn btn-danger">Cancella tutti i messaggi</a>
	<a href="login-admin.php" class="btn btn-success">Area Prodotti</a>
    <table class="table table-responsive-sm table-striped table-dark table-hover fw-light text-center">
        <tr>
            <th>Titolo</th><th>Testo</th><th>Azione</th>
        </tr>
        <?php foreach($templateParams["messaggi"] as $messaggio): ?>
        <tr>
            <td class="text-white"><?php echo $messaggio["oggetto"]; ?></td>
            <td><textarea class="form-control" rows="3" cols="20" readonly><?php echo $messaggio["testo"]; ?></textarea></td>
            <td>
                <a class="btn btn-danger" href="gestisci-messaggi.php?action=2&id=<?php echo $messaggio["codice_messaggio"]; ?>">Cancella</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>