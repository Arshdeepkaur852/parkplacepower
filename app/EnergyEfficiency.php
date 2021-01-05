<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class EnergyEfficiency extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'energyefficiency';
    
    protected $fillable = [
          'first_name',
          'last_name',
          'email_id',
          'mobile',
          'address',
          'city',
          'state',
          'area_code',
          'ip_address'
    ];
    

    public static function boot()
    {
        parent::boot();

        EnergyEfficiency::observe(new UserActionsObserver);
    }
    
    
    
    
}