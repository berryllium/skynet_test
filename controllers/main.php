<?php
$url = 'https://www.sknt.ru/job/frontend/data.json';

require_once('../model/functions.php');

$tarifs = getTarifs($url);
echo template('../views/main.php', array('tarifs' => $tarifs));
