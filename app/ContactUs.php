<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Laraveldaily\Quickadmin\Observers\UserActionsObserver;


use Illuminate\Database\Eloquent\SoftDeletes;

class ContactUs extends Model {

    use SoftDeletes;

    /**
    * The attributes that should be mutated to dates.
    *
    * @var array
    */
    protected $dates = ['deleted_at'];

    protected $table    = 'contactus';
    
    protected $fillable = [
          'name',
          'email',
          'mobile',
          'form_title',
          'area_of_interest',
          'query',
          'form_type',
          'ip_address'
    ];
    
public static function send_email()
    {
       $body ="Name :" . $_POST['name'] . "\nEmail : " . $_POST['email'] . "\nMobile : " . $_POST['mobile'] . "\nForm Title : " . $_POST['form_title'] . "\nArea Of Interest : " . $_POST['area_of_interest'];
        $body = $body . "\nQuery : " . $_POST['query'];
        $headers = 'From: info@parkplacepower.com' . "\r\n" .
   'X-Mailer: PHP/' . phpversion();
        mail("parkpowerplace@gmail.com","New Query", $body, $headers);
    }
    public static function boot()
    {
        parent::boot();

        ContactUs::observe(new UserActionsObserver);
    }
    
    
    
    
}