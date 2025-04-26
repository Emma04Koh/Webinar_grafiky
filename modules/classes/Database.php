<?php 
class Database {
    private $host = 'localhost';
    private $port = '3306'; //port pre MySQL
    private $username = '';
    private $password = '';
    private $database_name = 'dotaznik'; //NAPISAT MENO ESTE
    private $charset = "utf8";

    private $pdo;

    public function __construct(){
        $this->pdo = new PDO(
            dsn:    "mysql:host={$this->host};
                    dbname={$this->database_name};
                    port={$this->port};
                    charset={$this->charset}",
        username: $this->username,
        password: $this->password
        );
        $this->pdo->setAttribute(attribute: PDO::ATTR_ERRMODE, value: PDO::ERRMODE_EXCEPTION);
    }

    public function __destruct(){
        $this->pdo = null;
    }

    public function getPDO(){
        return $this->pdo;
    }
}


?>