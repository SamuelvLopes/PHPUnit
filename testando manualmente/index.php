<?php
include 'autoloader.php';
$discountCalculator = new DiscountCalculator();
echo $discountCalculator->apply(value:180);

