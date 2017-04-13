<?php

include ROOT.'/models/RealEstate.php';
class SiteController
{
    public function actionIndex()
    {
        $estatesList = array();
        $estatesList = RealEstate::getAllEstates();
        require_once(ROOT.'/views/site/index.php');

        return true;
    }

}
