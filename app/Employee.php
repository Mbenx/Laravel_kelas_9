<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    // whitelist
    protected $fillable = ['position_id','name','alamat','email','phone'];

    // blacklist
    protected $guarded = ['id'];

    // softdelete
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function position()
    {
        return $this->belongsTo('App\Position');
    }

    public function inventory()
    {
        return $this->belongsToMany('App\Inventory');
    }
}
