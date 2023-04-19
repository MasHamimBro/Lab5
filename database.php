<?php
class Database {
    protected $host;
    protected $user;
    protected $password;
    protected $db_name;
    protected $conn;
    
    public function __construct() {
      $this->getConfig();
      $this->conn = new mysqli($this->host, $this->user, $this->password, $this->db_name);
      
      if ($this->conn->connect_error) {
        die("Connection failed: " . $this->conn->connect_error);
      }
    }
    
    public function update($table, $update_value, $where) {
      $sql = "UPDATE ".$table." SET ".$update_value." WHERE ".$where;
      $result = $this->conn->query($sql);
      
      if ($result) {
        return true;
      } else {
        return false;
      }
    }
    
    public function delete($table, $filter) {
      $sql = "DELETE FROM ".$table." ".$filter;
      $result = $this->conn->query($sql);
      
      if ($result) {
        return true;
      } else {
        return false;
      }
    }
    
    protected function getConfig() {
      $this->host = "localhost";
      $this->user = "username"; // ganti dengan username database Anda
      $this->password = "password"; // ganti dengan password database Anda
      $this->db_name = "database_name"; // ganti dengan nama database Anda
    }
  }
?>