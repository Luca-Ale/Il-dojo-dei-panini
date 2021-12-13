<?php
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername, $username, $password, $dbname);
    }

    public function insertNewCostumer($CF_CLIENTE, $nome, $cognome, $username, $mail, $password) {
        $stmt = $this -> db -> prepare("insert into clienti values (?, ?, ?, ?, ?, ?)");
        $stmt -> bind_param('ssssss', $CF_CLIENTE, $nome, $cognome, $username, $mail, $password);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getMenuByPriceOrder() {
        $stmt = $this -> db -> prepare("select * from prodotti order by prezzo asc");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertProductOnMenu($codice, $nome, $prezzo, $quantitaDisponibile, $ingredienti) {
        $stmt = $this -> db -> prepare("insert into prodotti values (?, ?, ?, ?, ?)");
        $stmt -> bind_param('isiis', $codice, $nome, $prezzo, $quantitaDisponibile, $ingredienti);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteProductOnMenuByCode($codice) {
        $stmt = $this -> db -> prepare("delete from prodotti where codice_prodotto=?");
        $stmt->bind_param('i', $codice);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getShoppingCartProducts() {
        $stmt = $this -> db -> prepare("SELECT * from carrello as c, prodotti as p where p.codice_prodotto = c.cod_prod;");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
}
?>