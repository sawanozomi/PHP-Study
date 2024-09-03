<?php

// Userクラスの読み込み
require 'Gun.php';

$mainWeapon = new Gun("AK47", 30);
$subWeapon = new Gun("Mosin-Nagant", 5);

// 現在の状態を表示
$mainWeapon->setExtendedMagazine(20);
$subWeapon->setExtendedMagazine(5);

$mainWeapon->echoStatus();
$subWeapon->echoStatus();

$mainWeapon->unsetExtendedMagazine();
$subWeapon->unsetExtendedMagazine();

$mainWeapon->echoStatus();
$subWeapon->echoStatus();
