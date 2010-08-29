<?php

class ModelException extends Exception {
	
}

class ArticlesModel extends Nette\Object {

	static function getBest() {
		try {
			return dibi::fetchAll('SELECT * FROM [articles] ORDER BY [rank] LIMIT 5');
		} catch (DibiException $e) {
			throw new ModelException;
		}
	}

	static function getSingle($id) {
		try {
			return dibi::fetch('SELECT * FROM [articles] WHERE [id] = %d', $id);
		} catch (DibiException $e) {
			throw new ModelException;
		}
	}

}