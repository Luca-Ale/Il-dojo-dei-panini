<?php
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname){
        $this->db = new mysqli($servername, $username, $password, $dbname);
    }

    public function getMenuByPriceOrder() {
        $stmt = $this -> db -> prepare("SELECT * FROM prodotti ORDER BY prezzo ASC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertProductOnMenu($codice, $nome, $prezzo, $quantitaDisponibile, $ingredienti) {
        $stmt = $this -> db -> prepare("INSERT INTO prodotti VALUES (?, ?, ?, ?, ?)");
        $stmt -> bind_param('isiis', $codice, $nome, $prezzo, $quantitaDisponibile, $ingredienti);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteProductOnMenuByCode($codice) {
        $stmt = $this -> db -> prepare("DELETE FROM prodotti WHERE codice_prodotto = ?");
        $stmt->bind_param('i', $codice);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getShoppingCartProducts() {
        $stmt = $this -> db -> prepare("SELECT * FROM carrello AS c, prodotti AS p WHERE p.codice_prodotto = c.cod_prod;"); // serve il ; nella query ? Nelle altre non serve.
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function login($username, $password){
        if(substr("admin", 0) === $username){
            $table = "admin";
        } else {
            $table = "users";
        }

        $stmt = $this->db->prepare("SELECT * FROM ? WHERE username = ? OR email = ? AND password = ? AND ATTIVO = 0");  // ATTIVO = 0 per assicurarci che non era già loggato.
        $stmt->bind_param("ssss", $table, $username, $username, $password); // metto username due volte perchè posso usare sia la username che l'email per loggare. (però c'è solo un campo nel login sia per uno che per l'altro)
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function isUserLoggedIn($username){
        $stmt = $this->db->prepare("SELECT * FROM users WHERE ATTIVO = 1 AND username = ?"); 
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function isAdminLoggedIn($username){
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE ATTIVO = 1 AND username = ?"); 
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
	
	public function updatePassword($username, $email, $newPassword){
        $stmt = $this->db->prepare("UPDATE users SET password = ? WHERE username = ? AND email = ?");
        $stmt->bind_param("sss", $newPassword, $username, $email); 
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
	}

    public function registerNewUser($username, $email, $password, $attivo) { //TODO: attivo forse non serve.
        $stmt = $this->db->prepare("INSERT INTO users (ID, CF_cliente, nome, cognome, username, email, password, ATTIVO) VALUES (NULL, NULL, NULL, NULL, ?, ?, ?, ?)"); //TODO: CF_cliente, nome, cognome sono di default NULL in realtà.
        $stmt->bind_param('sssi', $username, $email, $password, $attivo);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getShoppingCartTotal() {
        $stmt = $this -> db -> prepare("SELECT SUM(p.prezzo) as totale from carrello as c, prodotti as p where p.codice_prodotto = c.cod_prod;");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteFromShoppingCart() {
        $stmt = $this -> db -> prepare("SELECT SUM(p.prezzo) as totale from carrello as c, prodotti as p where p.codice_prodotto = c.cod_prod;");
        $stmt->execute();
    }
    
}
?>