<?php namespace App\Folder;

use App\Config;

class Quotes {
    
    public function run(){
        return config::get('demo.quotes');
    }
    
}

?>