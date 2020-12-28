<?php
require_once 'configuracion.php';

Configuration::setColor("Red");
Configuration::setEntorno("LocalHost");
Configuration::setNewsletter(true);

echo Configuration::$color."<br/>";
echo Configuration::$entorno."<br/>";
echo Configuration::$newsletter."<br/>";