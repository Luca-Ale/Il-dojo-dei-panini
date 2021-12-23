<section>
    <h2>Messaggi</h2>
    <?php if(isset($templateParams["formmsg"])):?>
    <p><?php echo $templateParams["formmsg"]; ?></p>
    <?php endif; ?>
    <a href="gestisci-messaggi.php?action=1">Cancella tutti i messaggi</a>
    <table>
        <tr>
            <th>Titolo</th><th>Testo</th><th>Azione</th>
        </tr>
        <?php foreach($templateParams["messaggi"] as $messaggio): ?>
        <tr>
            <td><?php echo $messaggio["titolo"]; ?></td>
            <td><?php echo $messaggio["testo"]; ?></td>
            <td>
                <a href="gestisci-messaggi.php?action=2&id=<?php echo $messaggio["codice_messaggio"]; ?>">Cancella</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</section>