<?php

class SubCurriculum {

	private $title = "";

	public function __construct($title="") {
		$this->title = $title;
	}

	public function getTitle(){
		return "<li>".$this->title."</li>";
	}
}