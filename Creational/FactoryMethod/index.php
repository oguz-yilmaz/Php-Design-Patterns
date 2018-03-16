<?php
require_once "Ads/Ads/InterfaceAds.php";
require_once "Ads/Ads/MorningAds.php";
require_once "Ads/Ads/AfternoonAds.php";
require_once "Ads/Ads/NightAds.php";

require_once "Ads/AdsFactory/InterfaceAdsFactory.php";
require_once "Ads/AdsFactory/BaseAdsFactory.php";
require_once "Ads/AdsFactory/ScheduledAdsFactory.php";

$morningFactory = new BaseAdsFactory("morning");
echo $morningFactory->get();
echo "--------------------------------<br>";

$afternoonFactory = new BaseAdsFactory("afternoon");
echo $afternoonFactory->get();
echo "--------------------------------<br>";

$nightFactory = new BaseAdsFactory("night");
echo $nightFactory->get();
echo "--------------------------------<br><br>";

$scheduledFactory = new ScheduledAdsFactory();
echo $scheduledFactory->get();