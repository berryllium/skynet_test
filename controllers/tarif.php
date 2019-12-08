<?php
$url = 'https://www.sknt.ru/job/frontend/data.json';

require_once('../model/functions.php');

if (isset($_GET['id']) && isset($_GET['group'])) {
  $groupID = $_GET['group'];
  $id = $_GET['id'];
}
else die('Такого тарифа не существует');

$tarif = getTarif($url, $groupID, $id);
$date = $tarif->new_payday;

$UTC = (int)substr($date, -5, 3);
$time = (int)substr($date, 0 ,-5);

$date = $time+$UTC*3600;
$date = date("d.m.Y", $date);

echo template('../views/tarif.php', array('tarif' => $tarif, 'groupID' => $groupID, 'date' => $date));
