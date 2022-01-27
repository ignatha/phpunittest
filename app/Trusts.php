<?php

Namespace App;

/**
 * summary
 */
class Trusts
{
    private $tmp = [];
    private $op = 0;

    public function getData($data)
    {
    	return $this->kurawa($data);
    }

    public function kurawa($data)
    {

    		$current_data = current($data);
    		$currentKey = key($data);

    		$next_data = next($data);
    		$nextKey = key($data);
    		$this->op++;
    		if ($this->dictCheck($current_data,$next_data)) {
    			unset($data[$currentKey],$data[$nextKey]);
    			return $this->kurawa($data);
    		}else{
    			if (empty($data) && empty($this->tmp)) {
    				return TRUE;
    			}else{
    				if (empty($data)) {
    					if ($this->op > 100) {
		    				return FALSE;
		    			}
		    			$data = $this->tmp;
			    		$this->tmp = [];
			    		return $this->kurawa($data);
    				} else {
    					array_push($this->tmp, $current_data);
		    			unset($data[$currentKey]);
		    			return $this->kurawa($data);
    				}
    			}
    		}

    }

    public function dictCheck($a,$b){
    	if($a === "{" && $b === "}")
    	{
    		return true;
    	}elseif ($a === "(" && $b === ")") {
    		return true;
    	}elseif ($a === "[" && $b === "]") {
    		return true;
    	}else{
    		return false;
    	}
    } 
}