<?php
class Contact{
    private $db;

    public function __construct(Database $database){
        $this->db = $database->getConnection();
    }

    public function index() {
        $stmt = $this->db->prepare("SELECT * FROM contact");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function destroy($id) {
        $stmt = $this->db->prepare("DELETE FROM contact WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT); 
        return $stmt->execute();
    }

    public function create($full_name, $email, $message){
        $stmt = $this->db->prepare("INSERT INTO contact (full_name, email, message) VALUES (:full_name, :email, :message)");
        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        return $stmt->execute();
    }

    public function show($id){
        $stmt = $this->db->prepare("SELECT * FROM contact WHERE id = :id");
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $full_name, $email, $message) {
        $stmt = $this->db->prepare("UPDATE contact SET full_name = :full_name, email = :email, 
        message = :message WHERE id = :id");
        
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->bindParam(':full_name', $full_name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':message', $message, PDO::PARAM_STR);
        return $stmt->execute();
    }
}
?>