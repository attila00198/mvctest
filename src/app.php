<?php

include 'includes/autoloader.php';
include_once 'src/config/config.php';

$uri = $_SERVER["REQUEST_URI"];
$uri = explode('/', $uri);
$method = $_SERVER["REQUEST_METHOD"];


switch ($uri[1]) {
    case '':
        if (!isset($_SESSION["user"])) {
            header("location: login", 302);
            break;
        }
        include 'views/home.php';
        break;

    case 'register':
        include 'views/register.php';
        if (!isset($_SESSION["user"])) {
            if ($method == "POST") {
                if ($_POST["passoword"] != $_POST["password_repeat"]) {
                    $_SESSION["msg"] = [
                        "category" => "danger",
                        "heading" => "Error",
                        "message" => "A Megadott jelszavak nem egyeznk."
                    ];
                    header("location: register", 302);
                    break;
                }
                
                $name = $_POST["username"];
                $fullname = $_POST["fullname"];
                $email = $_POST["email"];
                $password = $_POST["password"];

                $registerController = new RegisterCotroller();
                $registerController->createUser($name, $fullname, $email, $password);

                header("location: register");
                break;
            }
            break;
        }
        break;

    case 'login':
        if (!isset($_SESSION["user"])) {
            include 'views/login.php';

            if ($method == "POST") {
                $username = $_POST["username"];
                $password = $_POST["password"];

                $loginController = new LoginController();
                $user = $loginController->loginUser($username, $password);

                if ($user) {
                    $_SESSION["user"] = $user;
                }
                header("location: login", 302);
                break;
            }
            break;
        }

        header("location: /", 302);
        break;

    case "logout":
        unset($_SESSION["user"]);
        header("location: /", 302);

    case 'users':
        if (!isset($_SESSION["user"])) {
            header("location: /", 302);
            break;
        }

        if ($_SESSION["user"]["isAdmin"]) {
            $usersController = new UsersController();
            $users = $usersController->getUsers();
            include 'views/users.php';
            break;
        }
        header("location: /", 302);
        break;

    case 'profile':
        unset($_SESSION["msg"]);
        if (!isset($_SESSION["user"])) {
            header("location: /", 302);
            break;
        }
        $id = $_SESSION["user"]["id"];

        $usersController = new UsersController();
        $user = $usersController->getUser($id);
        include 'views/profile.php';
        break;
    default:
        echo "404 Not found!";
        break;
}
