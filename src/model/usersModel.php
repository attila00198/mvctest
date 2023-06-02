<?php

class UsersModel
{
    private $database;
    private $conn;

    public function __construct()
    {
        $this->database = new Database();
        $this->conn = $this->database->getConnection();
    }

    public function insertUser($user)
    {
        $query = "INSERT INTO users (name, fullname, email, passwd) VALUES (:name, :fullname, :email, :passwd)";
        $stmt = $this->conn->prepare($query);
        if ($stmt) {
            $stmt->execute(
                [
                    ":name" => $user->name,
                    ":fullname" => $user->fullname,
                    ":email" => $user->email,
                    ":passwd" => $user->passwd,
                ]
            );

            if ($stmt->rowCount() > 0) {
                $_SESSION["msg"] = [
                    "category" => "success",
                    "message" => "Felhasználó sikeresen létrehozva."
                ];
            } else {
                $_SESSION["msg"] = [
                    "category" => "danger",
                    "message" => "Hiba történt a felhasználó létrehozása során."
                ];
            }
        } else {
            $_SESSION["msg"] = [
                "category" => "danger",
                "message" => "Hiba történt a felhasználó létrehozása során."
            ];
        }
    }

    public function getAllUsers()
    {
        $query = 'SELECT * FROM users';
        $stmt = $this->conn->prepare($query);
        $stmt->execute();

        $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $users;
    }

    public function getUserByName($username) {
        $query = "SELECT * FROM users WHERE name = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$username]);

        if($stmt->rowCount() == 0) {
            $user = [];
            return $user;
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function getUserById($id) {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$id]);

        if($stmt->rowCount() == 0) {
            $user = [];
            return $user;
        }

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        return $user;
    }

    public function nameExists($name)
    {
        $query = "SELECT * FROM users WHERE name=?";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([$name]);
        if ($stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }

    public function emailExists($email)
    {
        $query = "SELECT * FROM users WHERE :email=email";
        $stmt = $this->conn->prepare($query);
        $stmt->execute([
            ":email" => $email
        ]);
        if ($stmt->rowCount() > 0) {
            return true;
        }

        return false;
    }
}
