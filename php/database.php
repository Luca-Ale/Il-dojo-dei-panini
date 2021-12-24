<?php
class DatabaseHelper{
    private $db;

    public function __construct($servername, $username, $password, $dbname, $port){
        $this->db = new mysqli($servername, $username, $password, $dbname, $port);
        if($this->db->connect_error){
            //die("Connection failed: " . $db->connect_error);
        }
    }

    public function getMenuByPriceOrder() {
        $stmt = $this -> db -> prepare("SELECT * FROM prodotti ORDER BY prezzo ASC");
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function insertProductOnMenu($nome, $prezzo, $quantitaDisponibile, $ingredienti, $img) { // Ho rimosso il $codice come parametro
        $stmt = $this -> db -> prepare("INSERT INTO prodotti VALUES (NULL, ?, ?, ?, ?, ?)");
        $stmt -> bind_param('siiss', $nome, $prezzo, $quantitaDisponibile, $ingredienti, $img);
        return $stmt->execute();
        //$result = $stmt->get_result();
        //return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductById($codProdotto){
        $query = "SELECT codice_prodotto, nome, prezzo, quantita_disponibile, ingredienti, img FROM prodotti WHERE codice_prodotto = ? GROUP BY codice_prodotto";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('i', $codProdotto);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getProductByIdFromShoppingCart($cod_prodotto, $cod_utente) {
        $query = "SELECT * FROM carrello WHERE cod_prodotto = ? GROUP BY cod_utente = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('ii', $cod_prodotto, $cod_utente);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getAllProducts(){
        $query = "SELECT codice_prodotto, nome, prezzo, quantita_disponibile, ingredienti, img FROM prodotti";
        $stmt = $this->db->prepare($query);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function updateProduct($codProdotto, $nome, $prezzo, $quantita, $ingredienti, $img){
        $query = "UPDATE prodotti SET nome = ?, prezzo = ?, quantita_disponibile = ?, ingredienti = ?, img = ?  WHERE codice_prodotto = ?";
        $stmt = $this->db->prepare($query);
        $stmt->bind_param('siissi',$nome, $prezzo, $quantita, $ingredienti, $img, $codProdotto);
        
        return $stmt->execute();
    }

    public function deleteProductOnMenuByCode($codice) {
        $stmt = $this -> db -> prepare("DELETE FROM prodotti WHERE codice_prodotto = ?");
        $stmt->bind_param('i', $codice);
        return $stmt->execute();
        //$result = $stmt->get_result();
        //return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getShoppingCartProducts($userID) {
        $stmt = $this -> db -> prepare("SELECT * FROM carrello AS c, prodotti AS p WHERE p.codice_prodotto = c.cod_prodotto AND c.cod_utente = ?;"); // serve il ; nella query ? Nelle altre non serve. Non è obbligatorio, serve in caso si debbano fare query a cascata. Diciamo che è una buona abitudine metterlo ma non è indispensabile.
        $stmt->bind_param('i', $userID);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function login($username, $password){ //TODO: remove? ah boh
        if(substr("admin", 0) === $username){
            $table = "admin";
        } else {
            $table = "users";
        }
        $stmt = $this->db->prepare("SELECT * FROM ? WHERE username = ? OR email = ? AND password = ? AND attivo = 0");
        $stmt->bind_param("ssss", $table, $username, $username, $password); // metto username due volte perchè posso usare sia la username che l'email per loggare. (però c'è solo un campo nel login sia per uno che per l'altro)
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);

    }

    public function checkUserLogin($username, $password){
        $stmt = $this->db->prepare("SELECT * FROM users WHERE attivo = 1 AND username = ? AND password=?"); 
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function checkAdminLogin($username, $password){
        $stmt = $this->db->prepare("SELECT * FROM admin WHERE attivo = 1 AND username = ? AND password=?"); 
        $stmt->bind_param("ss", $username, $password);
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

    public function registerNewUser($username, $email, $password) {
        $stmt = $this->db->prepare("INSERT INTO users (UserID, username, email, password, attivo) VALUES (NULL, ?, ?, ?, 1)");
        $stmt->bind_param("sss", $username, $email, $password);
        return $stmt->execute(); 
    }

    public function getShoppingCartTotal($userID) {
        $stmt = $this -> db -> prepare("SELECT SUM(p.prezzo * c.quantita) as totale from carrello as c, prodotti as p where p.codice_prodotto = c.cod_prodotto AND c.cod_utente = ?;");
        $stmt -> bind_param('i', $userID);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function deleteAllFromShoppingCart($userID) {
        $stmt = $this -> db -> prepare("DELETE from carrello WHERE cod_utente=?");
        $stmt -> bind_param('i', $userID);
        $stmt->execute();
    }

    public function addToShoppingCart($cod_prodotto, $userID, $quantity) {
        $stmt = $this->db->prepare("INSERT INTO carrello VALUES (?, ?, ?)");
        $stmt->bind_param("iii", $cod_prodotto, $userID, $quantity);
        $stmt->execute(); 
    }

    public function addQuantityToShoppingCart($cod_prodotto, $userID) {
        $stmt = $this->db->prepare("UPDATE carrello SET quantita = (quantita + 1) WHERE cod_prodotto=? AND cod_utente=?");
        $stmt->bind_param("ii", $cod_prodotto, $userID);
        $stmt->execute(); 
    }

    public function decreaseQuantityToShoppingCart($cod_prodotto, $userID) {
        $stmt = $this->db->prepare("UPDATE carrello SET quantita = (quantita - 1) WHERE cod_prodotto=? AND cod_utente=?");
        $stmt->bind_param("ii", $cod_prodotto, $userID);
        $stmt->execute(); 
    }

    public function deleteFromShoppingCart($cod_prodotto, $userID) {
        $stmt = $this->db->prepare("DELETE from carrello WHERE cod_prodotto=? AND cod_utente=?");
        $stmt->bind_param("ii", $cod_prodotto, $userID);
        $stmt->execute(); 
    }

    public function isProductAlreadyOnShoppingCart($cod_prodotto, $cod_utente) {
        $stmt = $this -> db -> prepare("SELECT * from carrello WHERE cod_prodotto=? AND cod_utente=?");
        $stmt->bind_param('ii', $cod_prodotto, $cod_utente);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function createOrder($orderID, $UserID) {
        $stmt = $this->db->prepare("INSERT INTO ordini VALUES(?, ?, CURRENT_TIMESTAMP)");
        $stmt->bind_param("ii", $orderID, $UserID);
        $stmt->execute(); 
    }

    public function getLastOrderID() {
        $stmt = $this -> db -> prepare("SELECT MAX(codice_ordine) as lastOrder from ordini");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function addProductToOrder($codice_prodotto, $codice_ordine, $quantita_ordine) {
        $stmt = $this->db->prepare("INSERT INTO `prod-ordine` VALUES(?, ?, ?)");
        $stmt->bind_param("iii", $codice_prodotto, $codice_ordine, $quantita_ordine);
        $stmt->execute();
    }

    // MESSAGES

    public function deleteAllMessages($UserID){
        $stmt = $this->db->prepare("DELETE from messaggi WHERE UserID = ?"); // qui mi serve UserID perchè devo cancellare tutti i messaggi di un utente.
        $stmt->bind_param("i", $UserID);
        $stmt->execute();
    }

    public function deleteMessageById($codice_messaggio, $UserID){
        $stmt = $this->db->prepare("DELETE from messaggi WHERE codice_messaggio = ? AND UserID = ?"); 
        $stmt->bind_param("ii", $codice_messaggio, $UserID);
        $stmt->execute(); 
    }

    public function getAllMessages($UserID){
        $stmt = $this->db->prepare("SELECT codice_messaggio, titolo, testo, UserID FROM messaggi WHERE UserID = ?");
        $stmt->bind_param("i", $UserID);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    /*
    public function insertNewMessageForUser($titolo, $testo, $UserID){
        $stmt = $this->db->prepare("INSERT INTO messaggi VALUES (NULL, ?, ?, ?)");
        $stmt->bind_param('ssi', $titolo, $testo, $UserID);
        return $stmt->execute();
    }
    */

    public function insertNewUserNotification($codice_notifica, $oggetto, $testo_articolo, $codice_ordine) {
        $stmt = $this->db->prepare("INSERT INTO notifiche VALUES(?, ?, ?, ?)"); 
        $stmt->bind_param("issi", $codice_notifica, $oggetto, $testo_articolo, $codice_ordine);
        $stmt->execute();
    }

    public function getNotificationFromUser($UserID) {
        $stmt = $this->db->prepare("SELECT n.codice_ordine, n.oggetto, n.testo, o.DataOra FROM users as u, ordini as o, notifiche as n WHERE n.codice_ordine = o.codice_ordine AND o.UserID = ? AND o.UserID = u.UserID");
        $stmt->bind_param("i", $UserID);
        $stmt->execute();
        $result = $stmt->get_result();

        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getLastNotificationID() {
        $stmt = $this -> db -> prepare("SELECT MAX(codice_notifica) as lastNotification from notifiche");
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
    
    public function getOrderWithID($orderID) {
        $stmt = $this -> db -> prepare("SELECT * FROM ordini where codice_ordine = ?");
        $stmt->bind_param('i', $orderID);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserNameByID($UserID) {
        $stmt = $this -> db -> prepare("SELECT * from users where UserID = ?");
        $stmt->bind_param('i', $UserID);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    public function getOrderProducts($orderID) {
        $stmt = $this -> db -> prepare("select nome from `prod-ordine` as po, ordini as o, prodotti as p where po.codice_ordine = o.codice_ordine and o.codice_ordine=? and p.codice_prodotto = po.codice_prodotto");
        $stmt->bind_param('i', $orderID);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_all(MYSQLI_ASSOC);
    }
}
?>