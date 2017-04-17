<?php

class Client
{
    public static function checkPhone($phone)
    {
        if ($phone) {
            return true;
        }

        return false;
    }

    public static function checkPassword($password)
    {
        if (strlen($password) > 3) {
            return true;
        }

        return false;
    }


    public static function checkClientData($phone, $password)
    {
        $db = Db::getConnection();

        $sql = 'SELECT * FROM schm.clients WHERE phone = :phone AND password = :password';
        $result = $db->prepare($sql);
        $result->bindParam(':phone', $phone, PDO::PARAM_STR);
        $result->bindParam(':password', $password, PDO::PARAM_STR);

        $result->execute();

        $client = $result->fetch();

        if ($client) {
            return $client['c_id'];
        }

        return false;
    }

    public static function auth($clientId)
    {
        $_SESSION['client'] = $clientId;
    }

    public static function checkLogged()
    {
        if (isset($_SESSION['client'])) {
            return $_SESSION['client'];
        }

        header("Location: client/login");
    }
}