<?php

class RegisterCotroller {

    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function createUser($name, $fullname, $email, $passwd)
    {
        if (strlen($passwd) < 8) {
            $_SESSION["msg"] = [
                "category" => "danger",
                "message" => "A jelszónak legalább 8 karakter hosszúnak kell lennie."
            ];
            return false;
        }
        
        $hashedpasswd = password_hash($passwd, PASSWORD_DEFAULT);

        // Felhasználó létrehozása az adatbázisban
        // Itt lehetőséged van validálni az adatokat és ellenőrizni, hogy a felhasználónév vagy az email már létezik-e az adatbázisban
        // Például:
        if ($this->usersModel->nameExists($name)) {
            $_SESSION["msg"] = [
                "category" => "danger",
                "message" => "A megadott felhasználó név már foglalt."
            ];
            return false;
        }
        if ($this->usersModel->emailExists($email)) {
            $_SESSION["msg"] = [
                "category" => "danger",
                "message" => "A megadott Email cím már foglalt."
            ];
            return false;
        }

        // Adatbázisba történő beszúrás

        $user = [
            "name" => $name,
            "fullname" => $fullname,
            "email" => $email,
            "passwd" => $hashedpasswd
        ];

        $this->usersModel->insertUser($user);
        
    }
}