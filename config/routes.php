<?php
return array(
    'client/login' => 'client/login', //ClientController / actionLogin
    'page-([0-9]+)' => 'site/index/$1', //siteController / action Index
    '' => 'site/index', //SiteController / actionIndex

);
