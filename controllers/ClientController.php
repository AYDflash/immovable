<?php


class ClientController
{
    public function actionLogin()
    {
        $phone = '';
        $password = '';

        if (isset($_POST['submit'])) {
            $phone = $_POST['phone'];
            $password = $_POST['password'];

            $errors = false;

            if (!Client::checkPhone($phone)) {
                $errors[] = 'Неправильный телефон';
            }

            if (!Client::checkPassword($password)) {
                $errors[] = 'Неправильный пароль';
            }

            $clientId = Client::checkClientData($phone, $password);

            echo $clientId;
            if ($clientId == false) {
                $errors[] = 'Неверные данные для входа на сайт';
            } else {
                Client::auth($clientId);

                header("Location: /account/");
            }

        }


        require_once ROOT . '/views/client/login.php';

        return true;
    }

    public function actionLogout()
    {
        unset($_SESSION['client']);

        header("Location: /");
    }

}