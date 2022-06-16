<?php

// Namespace App;

// /**
//  * summary
//  */
class Connect
{
    public function con()
    {
    	try {
          $DBH = new PDO("mysql:host=localhost;dbname=shopee", 'root', '');
          $DBH->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
        }
        catch(PDOException $e) {
            echo "Tidak dapat terhubung ke Database";
        }
        var_dump($DBH);
        return $DBH;
    }
}