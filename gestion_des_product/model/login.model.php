<?php
include('../model/database.php');


class UserModel extends dataB {
    public function getUserByEmail($email) {
        $stmt = $this->connect()->prepare("SELECT * FROM `admin` WHERE email = :email LIMIT 1");
        $stmt->bindParam(':email', $email);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}

?>