<?php
return array(
        'client/logout' => 'client/logout',
    'account' => 'account/index',
    'client/login' => 'client/login', //ClientController / actionLogin
    'page-([0-9]+)' => 'site/index/$1', //siteController / action Index
    '' => 'site/index', //SiteController / actionIndex

);
