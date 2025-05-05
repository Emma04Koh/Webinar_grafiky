<?php
class Services {
    private $db;

    public function __construct($database) {
        $this->db = $database->getConnection();
    }

    public function getServices() {
        $stmt = $this->db->prepare("SELECT * FROM services");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>