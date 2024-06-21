<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class FollowSeller extends Model
{

    protected $guarded = [];
    
    public function shop()
    {
        return $this->belongsTo(Shop::class);
    }
}
