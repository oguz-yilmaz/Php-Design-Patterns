<?php

class  BaseAdsFactory implements InterfaceAdsFactory {

	private $type;

	public function __construct($type=null) {
		$this->type = $type;
	}

	public function get() {
		if($this->type == "morning")
			return new MorningAds();

		if($this->type == "afternoon")
			return new AfternoonAds();

		if($this->type == "night")
			return new NightAds();

		return null;
	}

}