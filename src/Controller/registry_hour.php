<?php

require(dirname(__DIR__, 1)."\Model\RegistryHour.php");

$date = (new DateTime())->setTimezone(new DateTimeZone('America/Bahia'))->format('Y-m-d');
$registryStartRecord = (new DateTime())->setTimezone(new DateTimeZone('America/Bahia'))->format('H:i:s');
$projectId = intval($_POST['projectInput']);

$newHourRegistry = new RegistryHour($date, $registryStartRecord, $projectId);
$newHourRegistry->insertRegistryHour();



