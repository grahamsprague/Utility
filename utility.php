<?php

/**
 * Provides a quick functions to aid with text manipulation
*
 * @package default
 * @author Graham Sprague
 */
class Utility

{

	public $string;
	public $search;

	public $filepath;

	public $label;
	public $item;

	public static function contains ( $string, $search ){
		if ( stristr($string, $search) !== false  ){
			return true;
		}else{
			return false;
		}
	}

	public static function getFilenameWithExt ( $filepath ){

		$explodedPath = explode('/', $filepath );

		$result = $explodedPath[count($explodedPath)-1];

		return $result;

	}

	public static function getFilenameNoExt ( $filepath ){

		$explodedPath = explode('/', $filepath );

		$result = $explodedPath[count($explodedPath)-1];

		$explodedFilename = explode('.', $result);

		$result2 = $explodedFilename[count($explodedFilename)-2];

		return $result2;

	}

	public static function getDirName ( $filepath ){


		$explodedPath = explode('/', $filepath );

		$result = $explodedPath[count($explodedPath) - 2];



		return $result;

	}

	public static function getDirPath ( $filepath ){


		$explodedPath = explode('/', $filepath );

		$result = implode('/', array_slice($explodedPath, 0, count($explodedPath) - 2) );



		return $result;

	}

	public static function predump ($label, $item){
		echo "<p>$label</p>";
		echo '<pre>';
		var_dump ($item);
		echo '</pre>';
	}

} // END class



?>
