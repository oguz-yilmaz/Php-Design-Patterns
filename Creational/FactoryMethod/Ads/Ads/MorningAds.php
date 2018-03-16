<?php
class MorningAds implements InterfaceAds {
	public function name() {
		return "Morning Adds";
	}

	public function ads() {
		return array("Morningadd1", "Morningadd2", "Morningadd3");
	}

	public function __toString()
	{
		return $this->name()."<br>".implode(", ",$this->ads())."<br>";
	}
}