<?php

class UsersController
{
    private $usersModel;

    public function __construct()
    {
        $this->usersModel = new UsersModel();
    }

    public function getUsers()
    {
        $users = $this->usersModel->getAllUsers();

        return $users;
    }

    public function getUser($id) {
        $user = $this->usersModel->getUserById($id);

        return $user;
    }
}
