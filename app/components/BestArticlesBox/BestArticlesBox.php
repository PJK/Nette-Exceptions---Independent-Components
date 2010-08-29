<?php

class BestArticlesBox extends BaseControl {

	function render() {
		try {
			$this->template->setFile(__DIR__ . '/templates/default.phtml');
			$this->template->articles = ArticlesModel::getBest();
		} catch (ModelException $e) {
			$this->template->setFile(__DIR__ . '/templates/error.phtml');
		}
		$this->template->render();
	}

}