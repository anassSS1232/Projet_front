<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class article extends Model
{
    protected $primaryKey = 'id_article';
    public $timestamps = false;

    public function getPrice(){
        $price = $this->prix / 100;
        return number_format($price,2, '',' '). ' DH';
    }
}
