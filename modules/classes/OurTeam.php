<?php
class OurTeam {
    private $db;

    public function __construct($database) {
        $this->db = $database->getConnection();
    }

    public function getTeamMembers() {
        $stmt = $this->db->prepare("SELECT * FROM OurTeam");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
?>