<?php
include "A.php";
include "B.php";

use ClassA as ABC;
use ClassB as XYZ;

include 'Human.php';
include 'Card.php';
include "ATMCard.php";
include 'NICATM.php';
include 'SiddarthaATM.php';
echo "<br>";
NICATM::branches();
echo "<br>";
echo NICATM::TYPE;
echo "<br>";
$nic_atm = new NICATM("NIC ATM Card", 50000, 2);
echo "<br> $nic_atm->name";
$nic_atm->info();
echo "<br>";
$nic_atm->pay(40000);
echo "<br>";
SiddarthaATM::branches();
echo "<br>";
echo SiddarthaATM::TYPE;
echo "<br>";
$siddartha_atm = new SiddarthaATM("Siddartha ATM Card", 40000, 1);
echo "<br> $siddartha_atm->name";
$siddartha_atm->info();
echo "<br>";
$siddartha_atm->pay(30000);
echo "<br>";
$a = new \ABC\A();
$a->A_info();
