<?php

class SiteController
{

    public function actionIndex($page = 1)
    {
        $estatesList = array();
        $estatesList = RealEstate::getListEstates($page);
        $total = RealEstate::getTotalRealEstates();

        $pagination = new Pagination($total, $page, RealEstate::SHOW_BY_DEFAULT, 'page-');

        require_once(ROOT.'/views/site/index.php');

        return true;
    }

}
