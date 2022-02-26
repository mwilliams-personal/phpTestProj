<?php 
  class Database {
    // DB Params
    private $host = getenv('JAWSDB_HOST');
    private $db_name = getenv('JAWSDB_NAME');
    private $username = getenv('JAWSDB_USER');
    private $password = getenv('JAWSDB_PASS');
    private $conn;

    // DB Connect
    public function connect() {
      $this->conn = null;

      try { 
        $this->conn = new PDO('mysql:host=' . $this->host . ';dbname=' . $this->db_name, $this->username, $this->password);
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      } catch(PDOException $e) {
        echo 'Connection Error: ' . $e->getMessage();
      }

      return $this->conn;
    }
  }