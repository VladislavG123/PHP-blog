<?php

use Klein\Klein;

$router->get('/', function (){

    return controller('SiteController@index');

});
