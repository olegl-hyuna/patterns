<?php

include_once 'Preferences.php';

$pref = Preferences::getInstance();
$pref->setProperty('name', 'Ivan');

unset($pref);

$pref2 = Preferences::getInstance();
print $pref2->getProperty('name') . "\n";
