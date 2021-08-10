<?php 

namespace App\Helpers;

class Brackets 
{
	private $pairs = [
		"(" => ")",
		"[" => "]",
		"{" => "}"
	];


	public function findMatches($string)
	{
		$stack = [];

		foreach(str_split($string) as $bracket) {
			if(!empty($stack) && $this->match(end($stack), $bracket)) {
				array_pop($stack);
			} elseif(!empty($bracket)) {
				$stack[] = $bracket;
			}
		}
		
		return empty($stack);
	}

	private function match($a, $b)
	{
		if(array_key_exists($a, $this->pairs)) {
			return $this->pairs[$a] == $b;
		} else {
			return false;
		}
	}
}