<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Archive extends Model
{
    // whitelist
    protected $fillable = ['inventory_id','name','detail'];

    // blacklist
    protected $guarded = ['id'];

    // softdelete
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function inventory()
    {
        return $this->belongsTo('App\Inventory');
    }
}
