<?php


class NightAds implements InterfaceAds {
	public function name() {
		return "Night Adds";
	}

	public function ads() {
		return array("Nightadd1", "Nightadd2", "Nightadd3");
	}

	function __toString() {
		return $this->name()."<br>".implode(",",$this->ads())."<br>";
	}

}