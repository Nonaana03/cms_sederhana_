<?php
class Model {
    protected $db;
    public function __construct() {
        $this->db = new mysqli('localhost', 'root', '', 'cms_sederhana');
        if ($this->db->connect_error) {
            die('Database connection error: ' . $this->db->connect_error);
        }
    }
} 