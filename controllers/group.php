<?php
require_once('../model/functions.php');
if (isset($_GET['group'])) $groupID = $_GET['group'];
else die('Такого тарифа не существует');

$group = getGroup($url, $groupID);
$title = $group->title;
$tarifs = $group->tarifs;
echo template('../views/group.php', array('title' => $title, 'tarifs' => $tarifs, 'groupID' => $groupID));