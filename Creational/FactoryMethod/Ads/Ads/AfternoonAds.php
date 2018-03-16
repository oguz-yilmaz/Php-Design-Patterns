<?php


class AfternoonAds implements InterfaceAds {
	public function name() {
		return "Afternoon Adds";
	}

	public function ads() {
		return array("Afternoonadd1", "Afternoonadd2", "Afternoonadd3");
	}


	public function __toString()
	{
		return $this->name()."<br>".implode(", ",$this->ads())."<br>";
	}
}