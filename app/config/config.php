<?php
//DB params
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', 'hosehead');
define('DB_NAME', 'crudolies');

//APPROOT so we can send data to the views
define('APPROOT', dirname(dirname(__FILE__)));
// echo __FILE__;

//URLROOT good for dynamic links
define('URLROOT', 'localhost:8012/pen-list');
//<a href="URLROOT" />

//SiteName
define('SITENAME', 'Penlogue');
