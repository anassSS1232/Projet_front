<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commande extends Model
{
    //
    public $timestamps= false;
    public $table = "commande";
    protected $primaryKey = 'id_commande';
}
