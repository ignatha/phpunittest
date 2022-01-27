<?php

Namespace App;

class Turing
{
	private function isTuring($data)
	{
			$tmp = [];
			foreach ($data as $value) {
				if ($value === "D") {
					array_pop($tmp);
				} elseif ($value === "C") {
					$sum = end($tmp)+prev($tmp);
					array_push($tmp,$sum);				
				} elseif ($value === "+") {
					$double = end($tmp)*2;
					array_push($tmp,$double);
				} elseif (is_numeric($value)) {
					array_push($tmp,(int)$value);
				} else{
					return 0;
				}
			}

			return array_sum($tmp);
	}

	public function getData($data)
	{
		$data = explode(" ", $data);

		return $this->isTuring($data);
	}

}