<?php

class MainCurriculum {

	private $title = "";

	public function __construct($title="", array $subCurriculums) {
		$this->title = $title;
		$this->subCurriculums = $subCurriculums;
	}

	public function getTitle(){

		$html = "<h1>".$this->title."</h1>";
		foreach ($this->subCurriculums as $sub){
			$html .= $sub->getTitle();
		}
		return $html;

	}

}