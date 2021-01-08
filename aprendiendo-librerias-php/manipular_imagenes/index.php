<?php

require_once '../vendor/autoload.php';

$foto_original = 'ogatas.jpg';

$guardar_en = 'ogatakenichi.jpg';

//$thumb = new PHPThumb\GD($foto_original);
//$thumb = PhpThumbFactory::create($foto_original);
//$thumb->resize(150, 155);
//$thumb->show();
//$thumb->save($guardar_en);
$thumb = new PHPThumb\GD($foto_original);
$thumb->resize(100, 100);
$thumb->show();
