<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class UserQuote extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'userquote';
    
    protected $fillable = [
          'name',
          'email',
          'mobile',
          'interested'
    ];
    public static function send_emailfun()
    {
       $body ="Name :" . $_POST['name'] . "\nEmail : " . $_POST['email'] . "\nMobile : " . $_POST['mobile'] . "\nArea Of Interest : " . $_POST['area_of_interest'];
        $headers = 'From: info@parkplacepower.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
        mail("parkpowerplace@gmail.com","Get A Quote", $body, $headers);
    }

    public static function boot()
    {
        parent::boot();

        UserQuote::observe(new UserActionsObserver);
    }
    
    
    
    
}