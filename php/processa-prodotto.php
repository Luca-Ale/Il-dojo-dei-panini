<?php
require_once 'bootstrap.php';

if(!isAdminLoggedIn() || !isset($_POST["action"])){
    header("location: login.php");
}
// INSERIMENTO
if($_POST["action"] == 1){
    $nomeProdotto = htmlspecialchars($_POST["nome"]); // htmlspecialchars è per le lettere accentate, altrimenti scrivere soltanto $_POST["nome"];
    $prezzoProdotto = htmlspecialchars($_POST["prezzo"]);
    $quantitaProdotto = htmlspecialchars($_POST["quantita_disponibile"]);
    $ingredientiProdotto = htmlspecialchars($_POST["ingredienti"]);

    list($result, $msg) = uploadImage(IMG_DIR, $_FILES["img"]);
    if($result != 0){
        $imgprodotto = $msg;
        $id = $dbh->insertProductOnMenu($nomeProdotto, $prezzoProdotto, $quantitaProdotto, $ingredientiProdotto, $imgprodotto); //TODO: rename id
    }
    
    $oggetto = "Inserimento";
	$testo_messaggio = "Il prodotto: ". "$nomeProdotto". " al prezzo di ". "$prezzoProdotto €, alla quantità: "."$quantitaProdotto". " con gli ingredienti: "."$ingredientiProdotto è stato inserito correttamente! dal admin ". $_SESSION["AdminID"] . " : " . $_SESSION["username"];
	$dbh->insertNewMessageForAdmin($oggetto, $testo_messaggio);

    header("location: login.php?formmsg=".$msg);
}
// MODIFICA
if($_POST["action"] == 2){
    $codiceProdotto = htmlspecialchars($_POST["codice_prodotto"]);
    $nomeProdotto = htmlspecialchars($_POST["nome"]);
    $prezzoProdotto = htmlspecialchars($_POST["prezzo"]);
    $quantitaProdotto = htmlspecialchars($_POST["quantita_disponibile"]);
    $ingredientiProdotto = htmlspecialchars($_POST["ingredienti"]);

    if(isset($_FILES["img"]) && strlen($_FILES["img"]["name"])>0){
        list($result, $msg) = uploadImage(IMG_DIR, $_FILES["img"]);
        if($result == 0){
            header("location: login.php?formmsg=".$msg);
        }
        $imgProdotto = $msg;

    }
    else{
        $imgProdotto = $_POST["oldimg"];
    }
    $dbh->updateProduct($codiceProdotto, $nomeProdotto, $prezzoProdotto, $quantitaProdotto, $ingredientiProdotto,$imgProdotto);

    $oggetto = "Modifica";
	$testo_messaggio = "Il prodotto: ". "$nomeProdotto". " al prezzo di ". "$prezzoProdotto €, alla quantità: "."$quantitaProdotto". " con gli ingredienti: "."$ingredientiProdotto è stato modificato correttamente! dal admin ". $_SESSION["AdminID"] . " : " . $_SESSION["username"];
	$dbh->insertNewMessageForAdmin($oggetto, $testo_messaggio);

    $msg = "Modifica completata correttamente!";
    header("location: login.php?formmsg=".$msg);
}

// CANCELLAZIONE
if($_POST["action"] == 3){
    echo "entro";
    $codiceProdotto = $_POST["codice_prodotto"];
    $dbh->deleteProductOnMenuByCode($codiceProdotto);

    $oggetto = "Rimozione";
	$testo_messaggio = "Il prodotto: ". "$codiceProdotto ". htmlspecialchars($_POST["nome"]) . " di prezzo " . htmlspecialchars($_POST["prezzo"]) . " €, quantità: " . htmlspecialchars($_POST["quantita_disponibile"]) . " ed ingredienti: " . htmlspecialchars($_POST["ingredienti"]) . " è stato cancellato correttamente dall'admin " . $_SESSION["AdminID"] . " : " . $_SESSION["username"];
	$dbh->insertNewMessageForAdmin($oggetto, $testo_messaggio);
    
    $msg = "Cancellazione completata correttamente!";
    header("location: login.php?formmsg=".$msg);
}

?>