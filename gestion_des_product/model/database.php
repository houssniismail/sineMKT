

<?php
 
session_start();

class dataB{
    private $root = 'root';
    private $pass = '';
    private $host = "mysql:host=localhost;dbname=sinemkt";

    protected function connect(){
        $pdo = new PDO($this->host, $this->root, $this->pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

        return $pdo;
    }

}




