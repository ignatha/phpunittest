<?php

Namespace App;

/**
 * summary
 */
class Trusts
{

    public function trust($n, $data)
    {
       
       $candidates = [];
       print_r($data);
       foreach ($data as $value) {
            array_push($candidates,$value[1]);
       }

       $candidates = array_unique($candidates);
       print_r($candidates);
       
       foreach ($data as $value) {
               if (in_array($value[0], $candidates,TRUE)) {
                    $key = array_search($value[0], $candidates);
                    unset($candidates[$key]);   
               }       
       }

       print_r($candidates);
    }

}