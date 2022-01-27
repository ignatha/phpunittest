<?php

Namespace App;

class Out
{
	private function totalOut($data)
	{	
		$sum = 0;

		foreach ($data as $value) {
			if (in_array($value+1, $data) ) {
				$sum++;
			}	
		}
		return $sum;
	}

	public function getData($data)
	{
		return $this->totalOut($data);
	}

}