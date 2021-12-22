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
        $id = $dbh->insertProductOnMenu($nomeprodotto, $prezzoprodotto, $quantitaprodotto, $ingredientiProdotto, $imgprodotto); //TODO: rename id
        
    }
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
        $imgprodotto = $msg;

    }
    else{
        $imgprodotto = $_POST["oldimg"];
    }
    $dbh->updateProduct($codiceProdotto, $nomeProdotto, $prezzoProdotto, $quantitaProdotto, $ingredientiProdotto,$imgProdotto);

    $msg = "Modifica completata correttamente!";
    header("location: login.php?formmsg=".$msg);
}

// CANCELLAZIONE
if($_POST["action"] == 3){
    echo "entro";
    $codiceProdotto = $_POST["codice_prodotto"];
    $dbh->deleteProductOnMenuByCode($codiceProdotto);
    
    $msg = "Cancellazione completata correttamente!";
    header("location: login.php?formmsg=".$msg);
}

?>