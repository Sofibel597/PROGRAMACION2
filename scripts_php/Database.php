<?php
class Database {
    private $pdo;

    public function __construct() {
        $host = 'localhost';
        $db = 'tienda';
        $user = 'usuario_php';
        $pass = 'clave_segura';
        $charset = 'utf8mb4';

        try {
            $this->pdo = new PDO("mysql:host=$host;dbname=$db;charset=$charset", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Conexión fallida: ". $e->getMessage());
        }
   }


   public function createUser($email, $estado) {
   $stmt = $this->pdo->prepare("INSERT INTO usuarios (email, estado) VALUES (:email, :estado)");
   $stmt->execute(['email' => $email, 'estado' => $estado]);
 }
   public function getUserById($id) {
       $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
       $stmt->execute(['id' => $id]);
       return $stmt->fetch(PDO::FETCH_ASSOC);
 } 
   public function updateUserEstado($id, $estado) {
       $stmt = $this->pdo->prepare("UPDATE usuarios SET estado = :estado WHERE id = :id");
       $stmt->execute(['estado' => $estado, 'id' => $id]);
   }
}
?>
