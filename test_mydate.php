<?php

require_once('application/MyDate.php');

$the_date =  new application\backend\MyDate();
$the_date->setDay(15);

echo $the_date->getDay();
