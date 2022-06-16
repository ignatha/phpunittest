<?php

class Koneksi
{

    public function db()
    {
        $host = "localhost";
        $dbname = "shopee";
        $username = "postgres";
        $password = "aku";
        $result = new PDO("pgsql:host={$host};dbname={$dbname}", $username, $password);

        return $result;
    }

}

class Shop
{
    public $id;
    public $category;
    public $name;

    public function query($query)
    {
        $con = new Koneksi;
        $result = $con->db()->prepare($query);
        $result->execute();
        return $result;
    }
}


$shopee = new Shop;
$query = $shopee->query('SELECT * FROM shop_ids');
$shops = $query->fetchAll(PDO::FETCH_CLASS, 'Shop');

foreach ($shops as $shop) {
    echo $shop->id." ".$shop->category." ".$shop->name.PHP_EOL;
}