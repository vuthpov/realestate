<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Invoice extends Model
{
    //

    public function customer()
    {
        return $this->belongsTo('App\Customer', 'customerId', 'customerId');
    }
}
