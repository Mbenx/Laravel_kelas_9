<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Position extends Model
{
    // whitelist
    protected $fillable = ['name','code','department_id'];

    // blacklist
    protected $guarded = ['id'];

    // softdelete
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function department()
    {
        return $this->belongsTo('App\Department');
    }
}
