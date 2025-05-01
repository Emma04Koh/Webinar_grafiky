 <!-- pojde prec--><?php
require_once 'Database.php';
$pdo = new Database();

class Questionnaire{
    public function __construct($db) {
        $this->db = $db->pdo;
    }

    public function pridajDoDatabazy($name, $email, $message) {
        $sql = "INSERT INTO dotaznik (name, email, message) VALUES (:name, :email, :message)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([
            ':name' => $name,
            ':email' => $email,
            ':message' => $message
        ]);
}
}
?>