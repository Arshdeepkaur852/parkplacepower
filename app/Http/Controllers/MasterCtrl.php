<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MasterCtrl extends Controller
{
    public function home(){
        return view('frontend.home');
    }

    public function about_us(){
        return view('frontend.about_us');
    }

    public function residential_energy(){
        return view('frontend.residential_energy');
    }

    public function commercial_energy(){
        return view('frontend.commercial_energy');
    }

    public function terms(){
        return view('frontend.terms');
    }

    public function privacy_policy(){
        return view('frontend.privacy_policy');
    }


    public function contact_us(){
        return view('frontend.contact_us');
    }

    public function newsletter_post(Request $request){
        $email = $request->email;
        $check_email = \App\Newsletter::where('email', $email)->first();
        if($check_email){
            return 'You are already subscribed to our newsletter';
        }else{
            $save = new \App\Newsletter;
            $save->email = $email;
            $save->ip_address = $_SERVER['REMOTE_ADDR'];
            $save->save();
            return 'Thank You';
        }
    }

    public function residential_save(Request $request){
       
       $contact_us = new \App\ContactUs;
       $contact_us->name = $request->name;
       $contact_us->email = $request->email;
       $contact_us->mobile = $request->mobile;
       $contact_us->form_title = $request->form_title;
       $contact_us->area_of_interest = $request->area_of_interest;
       $contact_us->query = $request['query'];
       $contact_us->form_type = $request->form_type;
       $contact_us->ip_address =$_SERVER['REMOTE_ADDR'];
       $contact_us->save();
       $contact_us->send_email();
       return view('frontend.thank_you');
    }
    
    public function energy_efficiency(){
        return view('frontend.energy_efficiency');
    }

    public function suppliers_list(){
        return view('frontend.suppliers');
    }

    public function disclaimer(){
        return view('frontend.disclaimer');
    }

    public function popup_post(Request $request){
        $save = new \App\UserQuote;
        $save->name = $request->name;
        $save->email = $request->email;
        $save->mobile = $request->mobile;
        $save->interested = $request->intrested;
        $save->save();
        $save->send_emailfun();
        return view('frontend.thank_you');
      /*  return 'Done';*/
    }

    public function power_audit(Request $request){
        // dd($request->all());
        $save = new \App\EnergyEfficiency;
        $save->first_name = $request->first_name;
        $save->last_name = $request->last_name;
        $save->email_id = $request->email_id;
        $save->mobile = $request->mobile_num;
        $save->address = $request->address;
        $save->city = $request->city;
        $save->state = $request->state;
        $save->area_code = $request->area_code;
        $save->save();
        return 'Done';
    }
 public function pricing(){
        return view('frontend.get_pricing');
    }
    public function p_pricing(Request $request){
        $msg = 'Name:'.$request->name_form.'<br>Contact:'.$request->contact_form.' <br>Email:'.$request->email_form.'<br>Address:'.$request->address_form.'<br>Type:'.$request->type_form.'<br>Consumption:'.$request->consumption_form.'<br/>Zip Code:'.$request->zip_form.'<br/>Price:'.$request->price_form.'<br>Price For Zip Code:'.$request->price_zip.'';

        $headers = 'From: info@parkplacepower.com' . "\r\n" . 
        'MIME-Version: 1.0' . "\r\n" .
        'Content-Type: text/html; charset=utf-8';

        mail("parkpowerplace@gmail.com","Pricing Tool", $msg , $headers);
        return view('frontend.thank_you');
    }
}
