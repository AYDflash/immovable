<?php

/**
 * Created by PhpStorm.
 * User: sic-12
 * Date: 17.04.2017
 * Time: 20:52
 */
class AccountController
{
    public function actionIndex()
    {
        $result = Client::checkLogged();

        require_once ROOT . "/views/account/index.php";
    }
}