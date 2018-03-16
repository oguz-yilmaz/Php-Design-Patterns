<?php

class  ScheduledAdsFactory implements InterfaceAdsFactory {

	public function get() {

		$t    = getdate(time());
		$hour =  $t["hours"];

		if($hour <= 12)
			return new MorningAds();

		if($hour > 12 && $hour <= 19)
			return new AfternoonAds();

		if($hour > 19 && $hour <=23)
			return new NightAds();

		return null;
	}

}