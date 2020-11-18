<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function itemcategory()
    {
        return $this->belongsTo(Itemcategory::class);
    }
}
