<?php

class LoginController {

    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function loginUser($username, $password) {
        if(!$this->usersModel->nameExists($username)) {
            $_SESSION["msg"] = [
                "category" => "danger",
                "message" => "No user fond with this name" . $username
            ];
            return false;
        }

        $user = $this->usersModel->getUserByName($username);
        if(!password_verify($password ,$user["passwd"])) {
            $_SESSION["msg"] = [
                "category" => "danger",
                "message" => "Invalid Password"
            ];
            return false;
        }

        return $user;
    }
}