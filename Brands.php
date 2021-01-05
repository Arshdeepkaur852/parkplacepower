<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use DB;
use Session;
use Auth;
use Mail;
use Image;
use Intervention\Image\Image as Img;
// SEO added by Prashant -
use SEOMeta;
use Twitter;
use SEO;
use OpenGraph;
use App\Http\Controllers\Traits\FileUploadTrait;
use Hash;
use Redirect;
use Response;
use \App\MyKitchen;
use Illuminate\Pagination\LengthAwarePaginator;

class Brands extends Controller
{

    public function brand_registration_form(){
        // SEO Section Start
        SEO::setTitle('Brand Registration');
        SEO::setDescription('Go To Chef, companion For your amazing food journey');
        SEO::opengraph()->setUrl(asset(' '));
        SEO::setCanonical(asset(' '));
        SEO::twitter()->setSite('@JustGoToChef');
        // SEO Section End
        return view('companyregistration.company_form');
        }

        public function brand_registration_form_post(Request $request){
          return "We have recieved your access request. Please check your mail for further instructions!";
        }

        public function brand_registration_form_post_1(Request $request){
          // dd($request->all());
        //   google captcha validation start
        $url = 'https://www.google.com/recaptcha/api/siteverify';
        $data = ['secret'   => '6LcRtKYUAAAAAPsiGdrHVfKeaMPx9id2hffBEgTR',
                 'response' => $request['g-recaptcha-response'],
                 'remoteip' => $_SERVER['REMOTE_ADDR']];

        $options = [
            'http' => [
                'header'  => "Content-type: application/x-www-form-urlencoded\r\n",
                'method'  => 'POST',
                'content' => http_build_query($data) 
            ]
        ];
        $context  = stream_context_create($options);
        $result = file_get_contents($url, false, $context);

        //   google captcha validation end
      //  dd(json_decode($result)->success);
  

        if(json_decode($result)->success==true){
            $ip_address = $_SERVER['REMOTE_ADDR'];
            $check = \App\CompanyProfile::where('email_id', $request['login_email_id_1'])->first();
            if($check==''){
            $savedata = new \App\CompanyProfile;
            $savedata->brand_name = $request['brand_name_1'];
            $savedata->company_name = $request['company_name_1'];
            $savedata->contact_no = $request['contact_no_1'];
            $savedata->email_id = $request['email_id_1'];
            $savedata->contact_person_name = $request['contact_person_name_1'];
            $savedata->status = 0;
            $savedata->save();
            $insertedId = $savedata->id;
            //  for company login panel
            $social = new \App\SocialLogin;
            $social->user_id = $insertedId;
            $social->provider = 'custom';
            $social->first_name = $request['contact_person_name_1'];
            $social->last_name = $request['brand_name_1'];
            $social->email = $request['login_email_id_1'];
            $social->mobile = $request['contact_no_1'];
            $social->password = Hash::make($request->password_1);
            $social->ip_address = $ip_address;
            $social->user_type = 'company_user';
            $social->user_level = '2'; // company level 2
            $social->status = '0';
            $social->api_token = '0';
            $social->save();
            //Session::put('msg_query',$request['query']);
            // $request['login_email_id']  //  prashant.sharma@weareflamingo.in
           Mail::to($request['login_email_id'])->send(new \App\Mail\BrandRegistrationThankYou($request));

            // brands@justgotochef.com 
           Mail::to('brands@justgotochef.com')->send(new \App\Mail\BrandRegistrationRequest($request));
            Session::flash('message', 'We have recieved your access request. Please check your mail for further instructions!');
            // Session::flash('message', 'Your Request Has Been Sent!');
            return redirect('/');
            }else{
                $message="You are already register!";
                return redirect()->back()->with(['message'=>$message]);
                }
           
        }
    }

    public function brand_dashboard(){
        if(Auth::guard('company')->check()){
            // $data = \App\CompanyProfile::where( 'id' ,Auth('company')->user()->user_id)->first();
        // / dd(Auth('company')->user()->user_id);
        // SEO Section Start
        SEO::setTitle('Dashboard');
        SEO::setDescription('Go To Chef, companion For your amazing food journey');
        SEO::opengraph()->setUrl(asset(' '));
        SEO::setCanonical(asset(' '));
        SEO::twitter()->setSite('@JustGoToChef');
        // SEO Section End
        $cid = Auth::guard("company")->user()->user_id;
        $companydata = \App\CompanyProfile::where('id',$cid )->first();
        $brand = \App\Brand::where('companyprofile_id', $cid)->first();
        $bestsellers = 0;
        // dd($brand);
        $review_ar = [];
        // $total_brand = $brand->count();
        if($brand){
        $total_product_data = \App\Products::where('brand_id', $brand->id)->get();
        // dd($total_product_data);
        $total_product = $total_product_data->count();
        $bestsellers = $total_product_data->where('is_bestsellers',1)->count();
        // dd('bestsellers');
        $follwers = \App\Followers::where('user_type', 'brands')->where('follow_id', $brand->id)->count();
        }else{
        $total_product_data = [];
        $total_product = 0;
        $follwers = 0;
        }
        $user_arr = [];
        foreach($total_product_data as $product_key=>$product_value){
        $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $product_value->id)->get();
        if($reviewdata){
        foreach($reviewdata as $review_key=>$review_value){
        $userdata = \App\Customer::where('id' ,$review_value->user_id)->first();
        if($userdata){
        $user_arr[] = Array(
            'user_id'=>$userdata->id,
            'gender'=>ucfirst($userdata->gender),
            'page_id' => $review_value->page_id
        );
        }
        }
        }
        }
        $seen_items = array();
        $seen_items2 = array();
        foreach($user_arr as $index => $item){
        $check_first = in_array($item["page_id"], $seen_items);
        if(in_array($item["page_id"], $seen_items) && in_array($item["user_id"],$seen_items2 )){
        unset($user_arr[$index]);
        }else{
        $seen_items[] = $item["page_id"];
        $seen_items2[] = $item["user_id"];
        }   
        }
        $count_review = count(($user_arr));
        
        // dd($cid);
        $last_login = \App\login_attempt::where('user_id',$cid)->orderBy('id', 'DESC')->first();

        //dd($last_login->updated_at);
        
        return view('companyregistration.company_dashboard', compact('companydata', 'count_review','brand','total_product','follwers','bestsellers','last_login'));
        
        }else{
        Session::flash('message', "Please Login or Signup");
        return redirect('gotochef-for-brands');
        }
        }

        public function updateCompanyInformation(){
            if(Auth::guard('company')->check()){
            // SEO Section Start
            SEO::setTitle('Update Information');
            SEO::setDescription('Go To Chef, companion For your amazing food journey');
            SEO::opengraph()->setUrl(asset(' '));
            SEO::setCanonical(asset(' '));
            SEO::twitter()->setSite('@JustGoToChef');
            // SEO Section End
            // $categoryOperate = \App\ProductSubCategory::orderBy('sub_category_name', 'asc')->get();
            
            $cid = Auth::guard("company")->user()->user_id;

            $branddata = \App\Brand::where('companyprofile_id', $cid)->first();

            if($branddata){
                $brand_array[] = Array(
                    'bid' =>$branddata->id,
                    'images'=>$branddata->images
                );
            }else{
                $brand_array[] = Array(
                    'bid' =>null,
                    'images'=>null
                );
            }
            // dd('1');
            $companydata = \App\CompanyProfile::where('id', $cid)->first();
                
            if(isset($companydata->category_operate)){
                $jdata = json_decode($companydata->category_operate, true);
                if(count($jdata)>0){
                    foreach ($jdata as $key => $value) {
                        $categoryOperate[] = \App\ProductSubCategory::where('id',$value)->orderBy('sub_category_name', 'asc')->first();
                    }
                }else{
                    $categoryOperate = [];
                }
                
                
            }
        // dd($companydata);
            return view('companyregistration.update_information', compact('companydata', 'categoryOperate','brand_array'));
            
            }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('gotochef-for-brands');
            }
        }

        public function updateCompanyInformationSave(Request $request){
          //  dd($request->all());
            $request = $this->saveFiles($request);
            $savedata =  \App\CompanyProfile::findOrFail(Auth::guard("company")->user()->user_id);
            $savedata->is_manufacture_or_importer = $request['is_manufacture_or_importer'];
            $savedata->company_name = $request['company_name'];
            $savedata->contact_no = $request['contact_no'];
            $savedata->email_id = $request['email_id'];
            $savedata->address = $request['address'];
            $savedata->country = $request['country'];
            $savedata->contact_person_name = $request['contact_person_name'];
            $savedata->contact_person_email = $request['contact_person_email'];
            $savedata->contact_person_mobile = $request['contact_person_mobile'];
            $savedata->update();
            // --- login table ---
            $savesocialdata = \App\SocialLogin::findOrFail(Auth::guard("company")->user()->id); 
            $savesocialdata->first_name = $request['company_name'];
            $savesocialdata->mobile = $request['contact_no'];
            $savesocialdata->update();
          //  dd($request->brand_id);
            $brandsave = \App\Brand::where('id', $request->brand_id)->first();
            if($request->delete_images==1){
                if($request->brand_images){
                    $images = $request->brand_images;
                }else{
                    $images = null;
                }
            }elseif($request->brand_images){
                $images = $request->brand_images;
            }else{
                if(isset($brandsave->iamges)){
                    $images = $brandsave->iamges;
                }else{
                    $images = null;
                }
            }


          //  dd($images);

            if($brandsave){
                $brandsave->images = $images;
                $brandsave->update();
            }
            // brand add image end  
            $email_arr = Array(
              'user_id'=> Auth::guard("company")->user()->user_id,
              'item_name'=>'',
              'email_subject'=>'Company Information Updated',
              'email_body'=> 'Your Company "'.$request['company_name'].'" Information has been Updated',
              'action_type'=>'Updation',
              'admin_email_subject' => 'Company Information Updated - Admin',
              'admin_email_body' => 'Company Name "'.$request['company_name'].'" has been Updated',
            );

           // $this->brand_action($email_arr);
            Session::flash('message', "Information Successfully Updated");
            return redirect('brand-dashboard');
            }

            public function updateCompanyPassword(){
                if(Auth::guard('company')->check()){
                // SEO Section Start
                SEO::setTitle('Update Password');
                SEO::setDescription('Go To Chef, companion For your amazing food journey');
                SEO::opengraph()->setUrl(asset(' '));
                SEO::setCanonical(asset(' '));
                SEO::twitter()->setSite('@JustGoToChef');
                // SEO Section End
                $cid = Auth::guard("company")->user()->user_id;
                
                $companydata = \App\CompanyProfile::where('id',$cid )->first();
                
                //dd(Auth::guard("company")->user()->id);
                $last_updated = \App\SocialLogin::findOrFail(Auth::guard("company")->user()->id);
                //dd($last_updated);
                
                return view('companyregistration.update_password', compact('companydata','last_updated'));
                
                }else{
                Session::flash('message', "Please Login or Signup");
                return redirect('gotochef-for-brands');
                }
            }

        public function updateCompanyPasswordSave(Request $request){
            $updatepassword = \App\SocialLogin::findOrFail(Auth::guard("company")->user()->id);
            
            $checkpassword =  Hash::check($request->oldpassword, $updatepassword->password);  // matching the password 
            
            if($checkpassword){
            $updatepassword->password = Hash::make($request->password); ///$request->password;
            $updatepassword->update();
            $email_arr = Array(
              'user_id'=> Auth::guard("company")->user()->user_id,
              'item_name'=>'',
              'email_subject'=>'Password Updated',
              'email_body'=> 'Your Password has been Updated',
              'action_type'=>'Updation',
              'admin_email_subject' => 'admin email subject',
              'admin_email_body' => 'Password has been Updated',
            );

            $this->brand_action($email_arr);
            Session::flash('message', "Your Password Successfully Updated");
            return redirect('brand-dashboard');
            }else{
            Session::flash('message', "Old Password Does Not Match, Please Try Again!");
            return redirect()->back();
            }
            
            }
    public function brandProducts(){
        if(Auth::guard('company')->check()){
        // SEO Section Start
        SEO::setTitle('Brand Products');
        SEO::setDescription('Go To Chef, companion For your amazing food journey');
        SEO::opengraph()->setUrl(asset(' '));
        SEO::setCanonical(asset(' '));
        SEO::twitter()->setSite('@JustGoToChef');
        // SEO Section End
        $cid = Auth::guard("company")->user()->user_id;
        //dd($cid);
        $branddata = \App\Brand::where('companyprofile_id', $cid)->first();
        $brandproduct = [];
        $tempproduct = [];
        if(isset($branddata)){
            $tempproduct = \App\Products::where('brand_id', $branddata->id)->get();
        if(isset($tempproduct)){
            foreach ($tempproduct as $value) {
                $brand_name = \App\Brand::where('id', $value->brand_id)->first();
                $brandproduct[] = Array(
                'id' => $value->id,
                'brand_name' => $brand_name->brand_name,
                'productName' => $value->productName,
                'quantity' => $value->quantity,
                'unit' => $value->unit,
                'product_variant_name' => $value->product_variant_name,
                'packaging_type' => $value->packaging_type,
                'slug' => $value->slug,
                'images' => $value->images,
                'created_at' => $value->created_at,
                );
                }
        }
        }
        
        
        return view('companyregistration.brand_products', compact('brandproduct'));
        }else{
        Session::flash('message', "Please Login or Signup");
        return redirect('gotochef-for-brands');
        }
        }

    public function editBrandProduct($slug){
        if(Auth::guard('company')->check()){
        $productdata = \App\Products::where('slug', $slug)->first();
        //dd($productdata);
        $companyid = Auth::guard('company')->user()->user_id;
        $productcategory = \App\ProductCategory::where('status', '1')->orderBy('category_name', 'asc')->get();
        $brand = \App\Brand::where('companyprofile_id', $companyid)->orderBy('brand_name', 'asc')->get();
        $packagingtype = \App\PackagingType::orderBy('packaging_name', 'asc')->get();
        $unit = \App\Matrices::orderBy('name', 'asc')->get();
        $country = \App\CountriesList::orderBy('countries_list', 'asc')->get();
        // $ingredient = \App\Ingredients::orderBy('ingredients_name', 'asc')->get();
        //  dd($ingredient);
        $ingredient = [];
        $ingredeint_json = [];
        if(count($productdata->ingredient_id)>0){
        $ingredeint_json = json_decode($productdata->ingredient_id, true);
        }
        
        return view('companyregistration.add_brand_product', compact('productcategory', 'brand','packagingtype', 'unit','country','ingredient', 'productdata','ingredeint_json'));
        }else
        {
        Session::flash('message', "Please Login or Signup");
        return redirect('gotochef-for-brands');
        }
        }

    public function updateBrandProduct(Request $request){
        // dd($request->all());
        $products = \App\Products::findOrFail($request->productid);
        $request = $this->saveFiles($request);
        
        //$products->update($request->all());
        $ingredient_id = json_encode($request['ingredient_id']);
        
        $usageTips = json_encode($request['usageTips']);
        
        $packaging_type = json_encode($request['packaging_type']);
        
        
        //  dd($images);
        $products->update(['description'=>$request['description'], 'servingSize'=>$request['servingSize'],'preparationTime'=>$request['preparationTime'],'shelf_life'=>$request['shelf_life'], 'manufacturer_date'=>$request['manufacturer_date'], 'fssai_number'=>$request['fssai_number'], 'allergy_information'=>$request['allergy_information'], 'nutrition'=>$request['nutrition'], 'calories'=>$request['calories'], 'fat'=>$request['fat'], 'protein'=>$request['protein'], 'carbohydrates'=>$request['carbohydrates'], 'cholesterol'=>$request['cholesterol'], 'sodium'=>$request['sodium'], 'fiber'=>$request['fiber'], 'iron'=>$request['iron'], 'calcium'=>$request['calcium'], 'region'=>$request['region'], 'is_new'=>$request['is_new'], 'is_trending'=>$request['is_trending'], 'is_discount'=>$request['is_discount'], 'orderBy'=>$request['orderBy'], 'status'=>$request['status'], 'packaging_type'=>$packaging_type, 'serving_per_container'=>$request['serving_per_container'],'serving_size_in_grams'=>$request['serving_size_in_grams'], 'amount_per_serving'=>$request['amount_per_serving'], 'calories_from_fat'=>$request['calories_from_fat'], 'saturated_fat'=>$request['saturated_fat'], 'trans_fat'=>$request['trans_fat'], 'total_sugars'=>$request['total_sugars'], 'vitamin_a'=>$request['vitamin_a'], 'vitamin_c'=>$request['vitamin_c'], 'vitamin_d'=>$request['vitamin_d'],'potassium'=>$request['potassium'], 'quantity'=>$request['quantity'], 'productchildsubcategory_id'=>$request['productchildsubcategory_id'],'country_of_origin'=>$request['country_of_origin'], 'is_bestsellers'=>$request['is_bestsellers'], 'energy'=>$request['energy'], 'carbohydrates_of_which_sugar'=>$request['carbohydrates_of_which_sugar'], 'total_fat_of_which_saturated_fat'=>$request['total_fat_of_which_saturated_fat'], 'vitamin_b1'=>$request['vitamin_b1'], 'vitamin_b2'=> $request['vitamin_b2'], 'vitamin_b3'=>$request['vitamin_b3'], 'vitamin_b5'=>$request['vitamin_b5'], 'vitamin_b6'=>$request['vitamin_b6'], 'vitamin_b9'=>$request['vitamin_b9'], 'biotin'=>$request['biotin'], 'manganese'=>$request['manganese'], 'copper'=>$request['copper'], 'selenium'=>$request['selenium'], 'zinc'=>$request['zinc'], 'phosphorus'=>$request['phosphorus'], 'iodine'=>$request['iodine'], 'thiamin'=>$request['thiamin'], 'total_fat'=>$request['total_fat'], 'gluten'=>$request['gluten'], 'lactobacillus_casel'=>$request['lactobacillus_casel'], 'sugar_sucrose'=>$request['sugar_sucrose'], 'calcium_pantothenate'=>$request['calcium_pantothenate'], 'carnitine'=>$request['carnitine'], 'chloride'=>$request['chloride'], 'choline'=>$request['choline'], 'chromium'=>$request['chromium'], 'folate'=>$request['folate'], 'folic_acid'=>$request['folic_acid'], 'inositol'=>$request['inositol'], 'magnesium'=>$request['magnesium'], 'molybdenum'=>$request['molybdenum'], 'niacinamide'=>$request['niacinamide'], 'riboflavin'=>$request['riboflavin'], 'taurine'=>$request['taurine'], 'polyUnsaturated_fat'=>$request['polyUnsaturated_fat'], 'mono_unsaturated_fat'=>$request['mono_unsaturated_fat'], 'dietary_fiber'=>$request['dietary_fiber'],'vitamin_e'=>$request['vitamin_e'], 'vitamin_k'=>$request['vitamin_k'], 'vitamin_x'=>$request['vitamin_x'], 'vitamin_b4'=>$request['vitamin_b4'], 'vitamin_b12'=>$request['vitamin_b12'], 'niacin'=>$request['niacin'], 'pantothenic_acid'=>$request['pantothenic_acid'], 'fructo_oligosaccharides'=>$request['fructo_oligosaccharides'], 'alpha_linoleic_acid'=>$request['alpha_linoleic_acid'], 'milk_protein'=>$request['milk_protein'] ,'minerals'=>$request['minerals'], 'salt'=>$request['salt'], 'vitamin_a1_retinol'=>$request['vitamin_a1_retinol'], 'vitamin_a2_dehydroretinol'=>$request['vitamin_a2_dehydroretinol'], 'vitamin_d2_calciferol'=>$request['vitamin_d2_calciferol'], 'vitamin_d3_cholecalciferol'=>$request['vitamin_d3_cholecalciferol'], 'vitamin_k1_phylloquinone'=>$request['vitamin_k1_phylloquinone'], 'vitamin_k2_menaquinone'=>$request['vitamin_k2_menaquinone'], 'amino_acid'=>$request['amino_acid'], 'bifidobacterium_lactis'=>$request['bifidobacterium_lactis'], 'docosahexaenoic_acid'=>$request['docosahexaenoic_acid'], 'oryzanol'=>$request['oryzanol'] ,'squalene'=>$request['squalene'] ,'antioxidant'=>$request['antioxidant'] ,'linoleic_acid'=>$request['linoleic_acid'], 'beta_carotene'=>$request['beta_carotene'], 'nucleotides'=>$request['nucleotides'], 'prebiotic'=>$request['prebiotic'], 'vitamin_d1'=>$request['vitamin_d1'], 'added_sugar'=>$request['added_sugar'], 'natural_fruit_sugar'=>$request['natural_fruit_sugar'],'caffeine'=>$request['caffeine'],'insoluble_fibre'=>$request['insoluble_fibre'],'soluble_fibre'=>$request['soluble_fibre'] ,'crude_fibre'=>$request['crude_fibre'],'linolenic_acid'=>$request['linolenic_acid'], 'oryzanol'=>$request['oryzanol'],'unsaturated_fat'=>$request['unsaturated_fat'],'arachidonic_acid'=>$request['arachidonic_acid'],'casein'=>$request['casein'],'flouride'=>$request['flouride'],'lactose'=>$request['lactose'],'maltodextrin'=>$request['maltodextrin'],'milk_fat'=>$request['milk_fat'],'oleic_acid_omega_9'=>$request['oleic_acid_omega_9'],'whey_protein'=>$request['whey_protein'], 'product_mrp'=>$request['product_mrp'], 'glucose'=>$request['glucose'], 'carotenoid'=>$request['carotenoid'], 'vitamin_b'=>$request['vitamin_b'], 'crude_fat'=>$request['crude_fat'], 'natural_sugar'=>$request['natural_sugar'], 'polyphenol'=>$request['polyphenol'], 'catechins'=>$request['catechins'], 'erythritol'=>$request['erythritol'], 'phycocyanin'=>$request['phycocyanin'], 'chlorophyll'=>$request['chlorophyll'], 'mixed_carotenoids'=>$request['mixed_carotenoids'], 'superoxide_dismutase'=>$request['superoxide_dismutase'], 'polyols'=>$request['polyols'], 'fatty_acids'=>$request['fatty_acids'], 'short_chain_fatty_acids'=>$request['short_chain_fatty_acids'], 'medium_chain_fatty_acids'=>$request['medium_chain_fatty_acids'], 'long_chain_fatty_acids'=>$request['long_chain_fatty_acids'], 'starch'=>$request['starch'], 'sorbitol'=>$request['sorbitol'], 'lutein'=>$request['lutein'], 'oryzanol'=>$request['oryzanol']]);
        
        
        $getproduct = \App\Products::where('id', $products->id)->first();
        // $saveseo =  \App\SEO::where('sub_page_category',$products->slug)->first();
        return redirect('manage-products');
        }

    public function brand_manage_review(){
        return view('companyregistration.brand_manage_review');
        }

        public function brand_product_api(){
            if(Auth::guard('company')->check()){
            $cid = Auth::guard('company')->user()->user_id;
            $replydataarr = [];
            $branddata = \App\Brand::where('companyprofile_id', $cid)->first();
            $replydata2 = [];
            if($branddata){
            $product_data = \App\Products::where('brand_id', $branddata->id)->get();
            foreach($product_data as $product_key=>$product_value){
            $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $product_value->id)->get();
            $packtype = json_decode($product_value->packaging_type);
            if(is_array($packtype)){ 
                $pname = $packtype[0] ;
            }else{
                $pname = '';
            }
            // dd($reviewdata[0]['created_at']);
            if(count($reviewdata)>0){
            
                $date = date_format($reviewdata[0]['created_at'], "d-m-Y");  //date_format($date,"Y/m/d H:i:s");
                $count_unread_review = $reviewdata->where('unread_review', null)->count();
                $count_read_review = $reviewdata->where('read_review', '!=' ,'')->count();
            
            $replydata2[] = Array(
                'id' => $product_value->id,
                'page_name' => $branddata->brand_name.' '.$product_value->productName .' '.$product_value->product_variant_name.' '.$pname .' '.$product_value->quantity.' '.$product_value->unit,
                'images' => $product_value->images,
                'slug' => $product_value->slug,
                'total_review'=>count($reviewdata),
                'unread_review'=>$count_unread_review,
                'read_review'=>$count_read_review,
                'created_at' => $date,
                'is_seen'=>0
            );
            }   
            }
            }
            return Response::json(['data'=>$replydata2], 200);
            }
            }

   

    public function product_review($slug){
        if(Auth::guard('company')->check()){
        $cid = Auth::guard('company')->user()->user_id;
        $product_data = \App\Products::where('slug', $slug)->first();
            $barnddata = \App\Brand::where('id',  $product_data->brand_id)->first();
            if($barnddata){
                $brand_name = $barnddata->brand_name;
            }else{
                $brand_name = '';
            }
            $packtype = json_decode($product_data->packaging_type);
                if(is_array($packtype)){ 
                $pname = $packtype[0] ;
                }else{
                $pname = '';
                }
                
            $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $product_data->id)->get();
    
            $count_unread_review = $reviewdata->where('unread_review', null)->count();
            $count_read_review = $reviewdata->where('unread_review', 1)->count();
            
            $isreplyed = \App\ExpertReview::where('user_id', $cid)->where('user_type', 'brands')->where('page_id', $product_data->id)->get();

        //    dd($isreplyed);
    
            // if($isreplyed){
            // $is_replyed = $isreplyed;
            // }else{
            // $is_replyed = null;
            // }
            $data = Array(
                'page_name' => $brand_name.' '.$product_data->productName .' '.$product_data->product_variant_name.' '.$pname .' '.$product_data->quantity.' '.$product_data->unit,
                'images'=>$product_data->images,
                'total_review'=>count($reviewdata),
                'unread_review'=>$count_unread_review,
                'read_review'=>$count_read_review,
                'replied_review' =>count($isreplyed),
                'slug' =>$product_data->slug,
                'id' =>$product_data->id
            );
    // dd( $data);
    
    return view('companyregistration.product_review', compact('data'));
        }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
            }
    }


    public function unread_product_review($slug){
        if(Auth::guard('company')->check()){
            
            $cid = Auth::guard('company')->user()->user_id;
            $product_data = \App\Products::where('slug', $slug)->first();
                $barnddata = \App\Brand::where('id',  $product_data->brand_id)->first();
                if($barnddata){
                    $brand_name = $barnddata->brand_name;
                }else{
                    $brand_name = '';
                }
                $packtype = json_decode($product_data->packaging_type);
                    if(is_array($packtype)){ 
                    $pname = $packtype[0] ;
                    }else{
                    $pname = '';
                    }
                    
                $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $product_data->id)->get();
                // dd($reviewdata);
        
                $unread_review_data = $reviewdata->where('unread_review', null);
                $count_read_review = $reviewdata->where('unread_review', 1)->count();
                    // dd($count_read_review);
                
                $isreplyed = \App\ExpertReview::where('user_id', $cid)->where('page_id', $product_data->id)->where('user_type', 'brands')->count();
        
                // if($isreplyed){
                // $is_replyed = $isreplyed;
                // }else{
                // $is_replyed = null;
                // }
                    $review_data = [];
                foreach($unread_review_data as $review_key=>$review_value){
                
                
                    $date = date_format($review_value->created_at, "d-m-Y H:i:s");  //date_format($date,"Y/m/d H:i:s");
                    
                    $datetime = date_format($review_value->created_at, "M d,Y, h:i a");  //date_format($date,"Y/m/d H:i:s");
        
                    $userdata = \App\Customer::where('id' ,$review_value->user_id)->first();
                    if($userdata){
                        $totalpoints = $userdata->total_points;
                      }else{
                        $totalpoints = 200;
                      }
        
                      // user level
                    $user_level = '';
                    if($totalpoints<=1000){
                        $user_level = "Explorer";
                    }elseif($totalpoints>=1001 && $totalpoints<=5000){
                    $user_level = "Passionate";
                    }elseif($totalpoints>=5001 && $totalpoints<=10000){
                    $user_level = "ProHome";
                    }elseif($totalpoints>=10001 && $totalpoints<=17500){
                    $user_level = "Builder";
                    }elseif($totalpoints>=17501 && $totalpoints<=25000){
                    $user_level = "Master Builder";
                    }elseif($totalpoints>=25000 && $totalpoints<=35000){
                    $user_level = "Influencer";
                    }elseif($totalpoints>=35001 && $totalpoints<=45000){
                    $user_level = "Influencer";
                    }elseif($totalpoints>=45001 && $totalpoints<=60000){
                    $user_level = "Pro";
                    }else{
                    $user_level = "GoToChef";
                    }
        
                    if($userdata){
                        if(isset($userdata->first_name)){
                            $fname = $userdata->first_name;
                        }else{
                        $fname = '';
                        }
                        if(isset($userdata->last_name)){
                            $lname = $userdata->last_name;
                        }else{
                        $lname = '';
                        }
                    
                        if(isset($userdata->avatar)){
                            $avatar = $userdata->avatar;
                        }else{
                        $avatar = '';
                        }
                    
                        if(isset($userdata->is_home_cook)){
                            $is_home_cook = $userdata->is_home_cook;
                        }else{
                        $is_home_cook = '';
                        }
                    }
        
                    if($review_value->unread_review==1){
                        $unread = "background: #f5f3f3;";
                    }else{
                        $unread = "";
                    }
                    $userlike =   \App\status::countlike($review_value->id);
                    //  
                    $review_data[] = Array(
                    'id' => $review_value->id,
                    'page_id' => $review_value->page_id,
                    'page_title' => $review_value->page_title,
                    'images' => $product_data->images,
                    'review_title' => $review_value->review_title,
                    'review' => $review_value->review,
                    'star_rating' => $review_value->star_rating,
                    'status' => $review_value->status,
                    'user_id' => $review_value->user_id,
                    'user_name' => $fname.' '.$lname,
                    'user_level' =>$user_level,
                    'is_home_cook' => $is_home_cook,
                    'user_image' => $avatar,
                    'user_slug'=>$userdata->slug,
                    'slug' => $product_data->slug,
                    'is_seen_review'=>$unread,
                    'total_fav' => $userlike,
                    'created_at' => $date,
                    'datetime'=>$datetime
                    );
                    }
                $data = Array(
                    'page_name' => $brand_name.' '.$product_data->productName .' '.$product_data->product_variant_name.' '.$pname .' '.$product_data->quantity.' '.$product_data->unit,
                    'images'=>$product_data->images,
                    'total_review'=>count($reviewdata),
                    'unread_review'=>count($unread_review_data),
                    'read_review'=>$count_read_review,
                    'replied_review' =>$isreplyed,
                    'slug' =>$product_data->slug,
                    'id' =>$product_data->id
                );
        // dd( $review_data);
        
        return view('companyregistration.unread_review', compact('data','review_data'));
        }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
            }
    }

    public function brands_replied_reviews($id){
        if(Auth::guard('company')->check()){
            $reply_data = [];
            $review_reply = [];
            $cid = Auth::guard('company')->user()->user_id;
            $product_data_array = [];

            $product_data = \App\Products::where('id', $id)->first();
                $barnddata = \App\Brand::where('id',  $product_data->brand_id)->first();
                
                $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $id)->get();
               
            
            foreach ($reviewdata as $key => $value) {
               
                $reply_data = [];
                $review_reply = [];
            
                $userdata = \App\Customer::where('id' ,$value->user_id)->first();
            if($userdata){
                $totalpoints = $userdata->total_points;
                }else{
                $totalpoints = 200;
                }
                // user level
            $user_level = '';
            if($totalpoints<=1000){
                $user_level = "Explorer";
            }elseif($totalpoints>=1001 && $totalpoints<=5000){
            $user_level = "Passionate";
            }elseif($totalpoints>=5001 && $totalpoints<=10000){
            $user_level = "ProHome";
            }elseif($totalpoints>=10001 && $totalpoints<=17500){
            $user_level = "Builder";
            }elseif($totalpoints>=17501 && $totalpoints<=25000){
            $user_level = "Master Builder";
            }elseif($totalpoints>=25000 && $totalpoints<=35000){
            $user_level = "Influencer";
            }elseif($totalpoints>=35001 && $totalpoints<=45000){
            $user_level = "Influencer";
            }elseif($totalpoints>=45001 && $totalpoints<=60000){
            $user_level = "Pro";
            }else{
            $user_level = "GoToChef";
            }
    
            if($userdata){
                if(isset($userdata->first_name)){
                    $fname = $userdata->first_name;
                }else{
                $fname = '';
                }
                if(isset($userdata->last_name)){
                    $lname = $userdata->last_name;
                }else{
                $lname = '';
                }
            
                if(isset($userdata->avatar)){
                    $avatar = $userdata->avatar;
                }else{
                $avatar = '';
                }
            
                if(isset($userdata->is_home_cook)){
                    $is_home_cook = $userdata->is_home_cook;
                }else{
                $is_home_cook = '';
                }
            }
    
            $userlike =   \App\status::countlike($value->id);
            $date = date_format($value->created_at, "d-m-Y H:i:s");  //date_format($date,"Y/m/d H:i:s");
                
                $datetime = date_format($value->created_at, "M d,Y, h:i a");  //date_format($date,"Y/m/d H:i:s");
            
            if($barnddata){
                $brand_name = $barnddata->brand_name;
            }else{
                $brand_name = '';
            }
            $packtype = json_decode($product_data->packaging_type);
                if(is_array($packtype)){ 
                $pname = $packtype[0] ;
                }else{
                $pname = '';
                }
               
            //    dd($product_array);
            $relpy_review_data = \App\ExpertReview::where('child_id', $value->id)->where('page_type', 'products')->where('page_id', $id)->get();

                foreach ($relpy_review_data as $key_1 => $value_1) {

                    // $isreplyed = \App\ExpertReview::where('child_id',$value_1->id )->where('user_id', $cid)->where('user_type', 'brands')->where('page_id', $product_data->id)->get();

                    if($value_1->user_type=='brands'){
                        $userdata3 = \App\Brand::where('companyprofile_id' ,$value_1->user_id)->first();
                        $name = $userdata3->brand_name;
                        if($userdata3->images){
                            $user_img = $userdata3->images;
                        }else{
                            $user_img = '';
                        }
                    }else{
                        $userdata2 = \App\Customer::where('id' ,$value_1->user_id)->first();
                        
                        if(isset($userdata2->first_name)){
                            $reply_fname = $userdata2->first_name;
                        }else{
                            $reply_fname = '';
                        }
                        if(isset($userdata2->last_name)){
                            $reply_lname = $userdata2->last_name;
                        }else{
                            $reply_lname = '';
                        }
                        $name = $reply_fname.' '.$reply_lname;
        
                        if(isset($userdata2->avatar)){
                            $user_img = $userdata2->avatar;
                        }else{
                            $user_img = '';
                        }
                    }
                    
                      
                        $datetimedata = date_format($value_1->created_at, "M d,Y, h:i a");
                    
                        
                    $review_reply[] = Array(
                        'review_id' => $value->id,
                        'id'=>$value_1->id,
                        'page_id'=>$value->page_id,
                        'user_id'=>$value_1->user_id,
                        'user_name' => $name,
                        'user_type' =>$value_1->user_type,
                        'review' => $value_1->review,
                        'user_image'=>$user_img,
                        'date_time'=>$datetimedata,
                    );
                }
                
                if(count($review_reply)>0){
                    
                    $product_data_array[] = Array(
                        'id' => $value->id,
                        'page_id' => $value->page_id,
                        'product_name' => $brand_name.' '.$product_data->productName .' '.$product_data->product_variant_name.' '.$pname .' '.$product_data->quantity.' '.$product_data->unit,
                        'images' => $product_data->images,
                        'review_title' => $value->review_title,
                        'review' => $value->review,
                        'star_rating' => $value->star_rating,
                        'status' => $value->status,
                        'user_id' => $value->user_id,
                        'user_name' => $fname.' '.$lname,
                        'user_level' =>$user_level,
                        'is_home_cook' => $is_home_cook,
                        'user_image' => $avatar,
                        'user_slug'=>$userdata->slug,
                        'slug' => $product_data->slug,
                       'reply'=>$review_reply,
                        'total_fav' => $userlike,
                        'created_at' => $date,
                        'datetime'=>$datetime
                    ); 
                }
                
                unset($review_reply); //unset previous array data 
            }
            $product_name_data = $brand_name.' '.$product_data->productName .' '.$product_data->product_variant_name.' '.$pname.' '.$product_data->quantity.' '.$product_data->unit ;
            $product_img = $product_data->images;
            $product_slug = $product_data->slug;
           
            // dd($product_name_data);

            
               
    return view('companyregistration.brands_replied_reviews',compact('product_data_array','product_name_data','product_img','product_slug'));
        
            }else{
                Session::flash('message', "Please Login or Signup");
                return redirect('/');
                }
    }


    public function product_review_api($slug){
        if(Auth::guard('company')->check()){
            $product_data = \App\Products::where('slug', $slug)->first();
            $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $product_data->id)->get();
            $review_arr = [];
            $review_data = [];
            
            foreach($reviewdata as $review_key=>$review_value){
                
                
                $date = date_format($review_value->created_at, "d-m-Y H:i:s");  //date_format($date,"Y/m/d H:i:s");
                
                $datetime = date_format($review_value->created_at, "M d,Y, h:i a");  //date_format($date,"Y/m/d H:i:s");
    
                $userdata = \App\Customer::where('id' ,$review_value->user_id)->first();
                if($userdata){
                    $totalpoints = $userdata->total_points;
                  }else{
                    $totalpoints = 200;
                  }
    
                  // user level
                $user_level = '';
                if($totalpoints<=1000){
                    $user_level = "Explorer";
                }elseif($totalpoints>=1001 && $totalpoints<=5000){
                $user_level = "Passionate";
                }elseif($totalpoints>=5001 && $totalpoints<=10000){
                $user_level = "ProHome";
                }elseif($totalpoints>=10001 && $totalpoints<=17500){
                $user_level = "Builder";
                }elseif($totalpoints>=17501 && $totalpoints<=25000){
                $user_level = "Master Builder";
                }elseif($totalpoints>=25000 && $totalpoints<=35000){
                $user_level = "Influencer";
                }elseif($totalpoints>=35001 && $totalpoints<=45000){
                $user_level = "Influencer";
                }elseif($totalpoints>=45001 && $totalpoints<=60000){
                $user_level = "Pro";
                }else{
                $user_level = "GoToChef";
                }
    
                if($userdata){
                    if(isset($userdata->first_name)){
                        $fname = $userdata->first_name;
                    }else{
                    $fname = '';
                    }
                    if(isset($userdata->last_name)){
                        $lname = $userdata->last_name;
                    }else{
                    $lname = '';
                    }
                
                    if(isset($userdata->avatar)){
                        $avatar = $userdata->avatar;
                    }else{
                    $avatar = '';
                    }
                
                    if(isset($userdata->is_home_cook)){
                        $is_home_cook = $userdata->is_home_cook;
                    }else{
                    $is_home_cook = '';
                    }
                }
    
                if($review_value->unread_review==1){
                    $unread = "background: #f5f3f3;";
                }else{
                    $unread = "";
                }
                $userlike =   \App\status::countlike($review_value->id);
                //  
                $review_data[] = Array(
                'id' => $review_value->id,
                'page_id' => $review_value->page_id,
                'page_title' => $review_value->page_title,
                'images' => $product_data->images,
                'review_title' => $review_value->review_title,
                'review' => $review_value->review,
                'star_rating' => $review_value->star_rating,
                'status' => $review_value->status,
                'user_id' => $review_value->user_id,
                'user_name' => $fname.' '.$lname,
                'user_level' =>$user_level,
                'is_home_cook' => $is_home_cook,
                'user_image' => $avatar,
                'user_slug'=>$userdata->slug,
                'slug' => $product_data->slug,
                'is_seen_review'=>$unread,
                'total_fav' => $userlike,
                'created_at' => $date,
                'datetime'=>$datetime
                );
                }
            return Response::json(['product_review'=>$review_data], 200);
        }
    }

    public function product_review_reply($id){
        if(Auth::guard('company')->check()){
        $cid = Auth::guard('company')->user()->user_id;
        $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('id', $id)->first();
        $product_data = \App\Products::where('id', $reviewdata->page_id)->first();
        $barnddata = \App\Brand::where('id',  $product_data->brand_id)->first();
    
        $userdata = \App\Customer::where('id' ,$reviewdata->user_id)->first();
        if($userdata){
            $totalpoints = $userdata->total_points;
          }else{
            $totalpoints = 200;
          }
          $date = date_format($reviewdata->created_at, "d-m-Y H:i:s");  //date_format($date,"Y/m/d H:i:s");
                
          $datetime = date_format($reviewdata->created_at, "M d,Y, h:i a");  //date_format($date,"Y/m/d H:i:s");

        //   read flag code 
          if($reviewdata->unread_review==null){
            $reviewdata->unread_review = 1;
            $reviewdata->update();
          }

    
    
            // user level
            $user_level = '';
            if($totalpoints<=1000){
                $user_level = "Explorer";
            }elseif($totalpoints>=1001 && $totalpoints<=5000){
            $user_level = "Passionate";
            }elseif($totalpoints>=5001 && $totalpoints<=10000){
            $user_level = "ProHome";
            }elseif($totalpoints>=10001 && $totalpoints<=17500){
            $user_level = "Builder";
            }elseif($totalpoints>=17501 && $totalpoints<=25000){
            $user_level = "Master Builder";
            }elseif($totalpoints>=25000 && $totalpoints<=35000){
            $user_level = "Influencer";
            }elseif($totalpoints>=35001 && $totalpoints<=45000){
            $user_level = "Influencer";
            }elseif($totalpoints>=45001 && $totalpoints<=60000){
            $user_level = "Pro";
            }else{
            $user_level = "GoToChef";
            }
    
            if($userdata){
                if(isset($userdata->first_name)){
                    $fname = $userdata->first_name;
                }else{
                $fname = '';
                }
                if(isset($userdata->last_name)){
                    $lname = $userdata->last_name;
                }else{
                $lname = '';
                }
            
                if(isset($userdata->avatar)){
                    $avatar = $userdata->avatar;
                }else{
                $avatar = '';
                }
            
                if(isset($userdata->is_home_cook)){
                    $is_home_cook = $userdata->is_home_cook;
                }else{
                $is_home_cook = '';
                }
            }
    
            if($reviewdata->unread_review){
                $unread = 1;
            }else{
                $unread = 0;
            }
            $userlike =   \App\status::countlike($reviewdata->id);
    
            
            if($barnddata){
                $brand_name = $barnddata->brand_name;
            }else{
                $brand_name = '';
            }
            $packtype = json_decode($product_data->packaging_type);
                if(is_array($packtype)){ 
                $pname = $packtype[0] ;
                }else{
                $pname = '';
                }
               $product_array = Array(
                   'id' => $reviewdata->id,
                   'page_id' => $reviewdata->page_id,
                   'product_name' => $brand_name.' '.$product_data->productName .' '.$product_data->product_variant_name.' '.$pname .' '.$product_data->quantity.' '.$product_data->unit,
                   'images' => $product_data->images,
                   'review_title' => $reviewdata->review_title,
                   'review' => $reviewdata->review,
                   'star_rating' => $reviewdata->star_rating,
                   'status' => $reviewdata->status,
                   'user_id' => $reviewdata->user_id,
                   'user_name' => $fname.' '.$lname,
                   'user_level' =>$user_level,
                   'is_home_cook' => $is_home_cook,
                   'user_image' => $avatar,
                   'user_slug'=>$userdata->slug,
                   'slug' => $product_data->slug,
                   'is_seen_review'=>$unread,
                   'total_fav' => $userlike,
                   'created_at' => $date,
                   'datetime'=>$datetime
               ); 
            //   dd($product_array);
            $reply_data_ar = \App\ExpertReview::where('child_id',$reviewdata->id)->get();
    
           //yt dd($reply_data);
            $review_reply = [];
            //     dd($reply_data);
            if($reply_data_ar){
                foreach($reply_data_ar as $k=>$v){
                // dd($v);
                if($v->user_type=='brands'){
                    $userdata3 = \App\Brand::where('companyprofile_id' ,$v->user_id)->first();
                    $name = $userdata3->brand_name;
                    if($userdata3->images){
                        $user_img = $userdata3->images;
                    }else{
                        $user_img = '';
                    }
                }else{
                    $userdata2 = \App\Customer::where('id' ,$v->user_id)->first();
                    
                    if(isset($userdata2->first_name)){
                        $reply_fname = $userdata2->first_name;
                    }else{
                        $reply_fname = '';
                    }
                    if(isset($userdata2->last_name)){
                        $reply_lname = $userdata2->last_name;
                    }else{
                        $reply_lname = '';
                    }
                    $name = $reply_fname.' '.$reply_lname;
    
                    if(isset($userdata2->avatar)){
                        $user_img = $userdata2->avatar;
                    }else{
                        $user_img = '';
                    }
                }
                
                  
                    $datetimedata = date_format($v->created_at, "M d,Y, h:i a");
    
                $review_reply[] = Array(
                    'review_id' => $reviewdata->id,
                    'id'=>$v->id,
                    'page_id'=>$reviewdata->page_id,
                    'user_id'=>$v->user_id,
                    'user_name' => $name,
                    'user_type' =>$v->user_type,
                    'review' => $v->review,
                    'user_image'=>$user_img,
                    'date_time'=>$datetimedata,
                );
                }
            }
     //dd($review_reply);
           
        return view('companyregistration.product_review_reply',compact('product_array','review_reply'));
    
        }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
            }
    
        }

    public function brand_add_product(){
        if(Auth::guard('company')->check()){
        $id = Auth::guard('company')->user()->user_id;
        $brand = \App\Brand::where('companyprofile_id', $id)->first();
        $is_draft = \App\BrandAddProduct::where('is_draft',1)->where('brand_id', $brand->id)->where('company_id', $id)->first();
        return view('companyregistration.brand_add_product', compact('brand','is_draft'));
        }else{
        Session::flash('message', "Please Login or Signup");
        return redirect()->back();
        }
        }

    public function brand_add_product_post(Request $request){
     
        if(Auth::guard('company')->check()){
        // dd($request->all());
        $request = $this->saveFiles($request);
        $id = Auth::guard('company')->user()->user_id;
        $email = Auth::guard('company')->user()->email;
        $save_draft = \App\BrandAddProduct::where('is_draft', 1)->where('brand_id', $request->brand_id)->where('company_id', $id)->first();
        // dd($save_draft);
        // draft updated start
        if(isset($save_draft->logo_image)){
        $datalogo_img = $save_draft->logo_image;
        }else{
        $datalogo_img = null;
        }

        if(isset($save_draft->ingredients_image)){
        $dataingredients_img = $save_draft->ingredients_image;
        }else{
        $dataingredients_img = null;
        }
        if(isset($save_draft->nutritional_image)){
        $datanutritional_image = $save_draft->nutritional_image;
        }else{
        $datanutritional_image = null;
        }
        if(isset($save_draft->back_image)){
        $databack_image = $save_draft->back_image;
        }else{
        $databack_image = null;
        }
        if(isset($save_draft->main_image)){
        $datamain_image = $save_draft->main_image;
        }else{
        $datamain_image = null;
        }
        
        if($request->main_image){
        $main_image = $request->main_image;
        }elseif($request->delete_main_image=='1'){
        $main_image = null;
        }else{
        $main_image = $datamain_image;
        }
        if($request->back_image){
        $back_image = $request->back_image;
        }elseif($request->delete_back_image=='1'){
        $back_image = null;
        }else{
        $back_image = $databack_image;
        }
        if($request->nutritional_image){
        $nutritional_image = $request->nutritional_image;
        }elseif($request->delete_nutritional_image){
        $nutritional_image = null;
        }else{
        $nutritional_image = $datanutritional_image;
        }
        
        if($request->ingredients_image){
        $ingredients_image = $request->ingredients_image;
        }elseif($request->delete_ingredients_image=='1'){
        $ingredients_image = null;
        }else{
        $ingredients_image = $dataingredients_img;
        }
        
        if($request->logo_image){
        $logo_image = $request->logo_image;
        }elseif($request->delete_logo_image=='1'){
        $logo_image = null;
        }else{
        $logo_image = $datalogo_img;
        }
        
        if($request->submit=='submit'){
        $save = new \App\BrandAddProduct;  //
        if($save_draft){
        $save_draft->delete();
        }
        // dd($save_draft);
        $save->company_id = $id;
        $save->brand_id = $request->brand_id;
        $save->brand_name = $request->brand_name;
        $save->product_title = $request->product_title;
        $save->product_story = $request->product_story;
        $save->fssai_number = $request->fssai_number;
        $save->upc = $request->upc;
        $save->ask_promotion_ideas = $request->ask_promotion_ideas;
        $save->main_image = $main_image;
        $save->back_image = $back_image;
        $save->nutritional_image = $nutritional_image;
        $save->ingredients_image = $ingredients_image;
        $save->logo_image = $logo_image;
        $save->status = 0;
        $save->save();
        $LastInsertId = $save->id;

        // $email

       // dd('kk');
        Mail::to($email)->send(new \App\Mail\BrandAddProductThankYou($request));

        Mail::to('brands@justgotochef.com')->send(new \App\Mail\BrandAddProduct($request));
        
        Session::flash('message', "Thank you for your request. We will get back to you soon.");
        return redirect('brand-add-product-thank-you?page_id='.$LastInsertId);
        }elseif($request->draft=='draft'){
        // dd($request->all());
        if($save_draft){
        $save_draft->brand_name = $request->brand_name;
        $save_draft->product_title = $request->product_title;
        $save_draft->product_story = $request->product_story;
        $save_draft->fssai_number = $request->fssai_number;
        $save_draft->upc = $request->upc;
        $save_draft->ask_promotion_ideas = $request->ask_promotion_ideas;
        $save_draft->main_image = $main_image;
        $save_draft->back_image = $back_image;
        $save_draft->nutritional_image = $nutritional_image;
        $save_draft->ingredients_image = $ingredients_image;
        $save_draft->logo_image = $logo_image;
        $save_draft->is_draft = 1;
        $save_draft->status = 0;
        $save_draft->update();
        // draft updated end
        }else{
        $save_new_draft = new \App\BrandAddProduct;  //
        $save_new_draft->company_id = $id;
        $save_new_draft->brand_id = $request->brand_id;
        $save_new_draft->brand_name = $request->brand_name;
        $save_new_draft->product_title = $request->product_title;
        $save_new_draft->product_story = $request->product_story;
        $save_new_draft->fssai_number = $request->fssai_number;
        $save_new_draft->upc = $request->upc;
        $save_new_draft->ask_promotion_ideas = $request->ask_promotion_ideas;
        $save_new_draft->main_image = $main_image;
        $save_new_draft->back_image = $back_image;
        $save_new_draft->nutritional_image = $nutritional_image;
        $save_new_draft->ingredients_image = $ingredients_image;
        $save_new_draft->logo_image = $logo_image;
        $save_new_draft->status = 0;
        $save_new_draft->is_draft = 1;
        $save_new_draft->save();
        }
        Session::flash('message', "Saved in drafts!");
        return redirect('brand-dashboard');
        
        }
        //dd($request->all());
        }else{
        Session::flash('message', "Please Login or Signup");
        return redirect()->back();
        }
        //  dd($request->all());
        }


    public function brand_add_product_thankyou(Request $request){
        if(Auth::guard('company')->check()){
            $uid = Auth::guard('company')->user()->user_id;
            $page_id = $request->page_id;
            $data = \App\BrandAddProduct::where('id', $page_id)->first();
            return view('companyregistration.add_brand_product_thankyou',compact('data'));
        }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
            }
    }


    function activate_premium(Request $request){

        $user_id = $request->user_id;
        //echo $user_id ;
       
        $chk2 = DB::select('select * from companyprofile where id = ?', [$user_id]);
        //return $chk2;
        $userdata = Array(
            'id' => $chk2[0]->id,
            'brand_name' => $chk2[0]->brand_name,
            'company_name' => $chk2[0]->company_name,
            'contact_no' => $chk2[0]->contact_no,
            'email_id' => $chk2[0]->email_id,
            'contact_person_name' => $chk2[0]->contact_person_name,
        );
       // Mail::to('bhumika.rawat@weareflamingo.in')->send(new \App\Mail\BrandPremiumRequest($userdata));
        //return $userdata;

        $chk = DB::update('update companyprofile set is_premium_req = ? where id = ?',['1',$user_id]);
        if($chk){
            $response[] = array(
                'msg'=>'Premium updated',
                'status'=>'1'
            );

            Mail::to($chk2[0]->email_id)->send(new \App\Mail\BrandPremiumRequest($userdata));
        }
        else{
            $response[] = array(
                'msg'=>'Please Activate for Premium',
                'status'=>'0'
            );
        }
        //return $chk;
        return response()->json($response);

    }

            // end clase


   //brand product comment start

   public function brandProductscomment(){
           // dd('hi');
            if(Auth::guard('company')->check()){
                // SEO Section Start
                SEO::setTitle('Brand Products');
                SEO::setDescription('Go To Chef, companion For your amazing food journey');
                SEO::opengraph()->setUrl(asset(' '));
                SEO::setCanonical(asset(' '));
                SEO::twitter()->setSite('@JustGoToChef');
                // SEO Section End
                $cid = Auth::guard("company")->user()->user_id;
                //dd($cid);
                $branddata = \App\Brand::where('companyprofile_id', $cid)->first();
                $brandproduct = [];
                $tempproduct = [];
                if(isset($branddata)){
                    $tempproduct = \App\Products::where('brand_id', $branddata->id)->get();
                    if(isset($tempproduct)){
                        foreach ($tempproduct as $value) {
                            $brand_name = \App\Brand::where('id', $value->brand_id)->first();
                            $brandproduct[] = Array(
                            'id' => $value->id,
                            'brand_name' => $brand_name->brand_name,
                            'productName' => $value->productName,
                            'quantity' => $value->quantity,
                            'unit' => $value->unit,
                            'product_variant_name' => $value->product_variant_name,
                            'packaging_type' => $value->packaging_type,
                            'slug' => $value->slug,
                            'images' => $value->images,
                            'created_at' => $value->created_at,
                            'brand_comment'=>$value->brand_comment
                            );
                            }
                    }
                
                }
                
                return view('companyregistration.brand_products_comment', compact('brandproduct'));
                }else{
                Session::flash('message', "Please Login or Signup");
                return redirect('gotochef-for-brands');
                }
        }

        public function addBrandProductComment($slug){

            if(Auth::guard('company')->check()){
                // SEO Section Start
                SEO::setTitle('Brand Products');
                SEO::setDescription('Go To Chef, companion For your amazing food journey');
                SEO::opengraph()->setUrl(asset(' '));
                SEO::setCanonical(asset(' '));
                SEO::twitter()->setSite('@JustGoToChef');
                // SEO Section End
                $cid = Auth::guard("company")->user()->user_id;
                $product = \App\Products::where('slug', $slug)->first();
                $brand_name = \App\Brand::where('id', $product->brand_id)->first();
                return view('companyregistration.add_brand_product_comments', compact('brand_name','product','slug'));
                }else{
                Session::flash('message', "Please Login or Signup");
                return redirect('gotochef-for-brands');
                }
            }

            public function saveBrandComment($slug,Request $request){
                $product = \App\Products::where('slug', $slug)->first();
                if($product){
                    //dd($product->productName);
                    $product->brand_comment = $request->brand_comment;
                    $product->update();

                    $email_arr = Array(
                      'user_id'=> '',
                      'item_name'=>'',
                      'email_subject'=>'Brand Comment',
                      'email_body'=> 'Comment has been added for your product '.$product->productName.'',
                      'action_type'=>'Addition',
                      'admin_email_subject' => 'admin email subject',
                      'admin_email_body' => 'Comment has been added for your product '.$product->productName.'',
                    );
                    //dd($email_arr);
                    $this->brand_action($email_arr);

                    Session::flash('message', "Added");
                    return redirect('manage-brand-comment');
                }else{
                    Session::flash('message', "Somthing went wrong!");
                    return redirect('manage-brand-comment');
                }
            }
        public function view_as_brand(){
            $checkuser = \App\SocialLogin::where('user_id', $_GET['cid'])->where('user_type', 'company_user')->first();
            // dd($checkuser);
            $cid = Auth::guard('company')->loginUsingId($checkuser->id);
            // dd($cid);
            if(Auth::guard('company')->check()){
                // $data = \App\CompanyProfile::where( 'id' ,Auth('company')->user()->user_id)->first();
                // dd(Auth('company')->user()->user_id);
            // SEO Section Start
            SEO::setTitle('Dashboard');
            SEO::setDescription('Go To Chef, companion For your amazing food journey');
            SEO::opengraph()->setUrl(asset(' '));
            SEO::setCanonical(asset(' '));
            SEO::twitter()->setSite('@JustGoToChef');
            // SEO Section End
            $cid = Auth::guard("company")->user()->user_id;
            $companydata = \App\CompanyProfile::where('id',$cid )->first();
            $brand = \App\Brand::where('companyprofile_id', $cid)->first();
            $bestsellers = 0;
            // dd($brand);
            $review_ar = [];
            // $total_brand = $brand->count();
            if($brand){
            $total_product_data = \App\Products::where('brand_id', $brand->id)->get();
            // dd($total_product_data);
            $total_product = $total_product_data->count();
            $bestsellers = $total_product_data->where('is_bestsellers',1)->count();
            // dd('bestsellers');
            $follwers = \App\Followers::where('user_type', 'brands')->where('follow_id', $brand->id)->count();
            }else{
            $total_product_data = [];
            $total_product = 0;
            $follwers = 0;
            }
            $user_arr = [];
            foreach($total_product_data as $product_key=>$product_value){
            $reviewdata = \App\ExpertReview::where('child_id', null)->where('page_type', 'products')->where('page_id', $product_value->id)->get();
            if($reviewdata){
            foreach($reviewdata as $review_key=>$review_value){
            $userdata = \App\Customer::where('id' ,$review_value->user_id)->first();
            if($userdata){
            $user_arr[] = Array(
                'user_id'=>$userdata->id,
                'gender'=>ucfirst($userdata->gender),
                'page_id' => $review_value->page_id
            );
            }
            }
            }
            }
            $seen_items = array();
            $seen_items2 = array();
            foreach($user_arr as $index => $item){
            $check_first = in_array($item["page_id"], $seen_items);
            if(in_array($item["page_id"], $seen_items) && in_array($item["user_id"],$seen_items2 )){
            unset($user_arr[$index]);
            }else{
            $seen_items[] = $item["page_id"];
            $seen_items2[] = $item["user_id"];
            }   
            }
            $count_review = count(($user_arr));
            
            // dd($brand);
            return view('companyregistration.company_dashboard', compact('companydata', 'count_review','brand','total_product','follwers','bestsellers'));
            
            }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('gotochef-for-brands');
            }
        }


        public function editBrandProductTest($slug){
            if(Auth::guard('company')->check()){
            $productdata = \App\Products::where('slug', $slug)->first();
            //dd($productdata);
            $companyid = Auth::guard('company')->user()->user_id;
            $productcategory = \App\ProductCategory::where('status', '1')->orderBy('category_name', 'asc')->get();
            $brand = \App\Brand::where('companyprofile_id', $companyid)->orderBy('brand_name', 'asc')->get();
            $packagingtype = \App\PackagingType::orderBy('packaging_name', 'asc')->get();
            $unit = \App\Matrices::orderBy('name', 'asc')->get();
            $country = \App\CountriesList::orderBy('countries_list', 'asc')->get();
            // $ingredient = \App\Ingredients::orderBy('ingredients_name', 'asc')->get();
            //  dd($ingredient);
            $ingredient = [];
            $ingredeint_json = [];
            if(count($productdata->ingredient_id)>0){
            $ingredeint_json = json_decode($productdata->ingredient_id, true);
            }
            
            return view('companyregistration.add_brand_product_test', compact('productcategory', 'brand','packagingtype', 'unit','country','ingredient', 'productdata','ingredeint_json'));
            }else
            {
            Session::flash('message', "Please Login or Signup");
            return redirect('gotochef-for-brands');
            }
            }

   //product comment end
        // receipe brand section started//

        //my brand recipe dashboard

        public function my_recipes_brand(){

            if (Auth::guard('company')->check()){
                //dd('bhumika');
              $userid = Auth::guard('company')->user()->user_id;
              $products = []; //\App\AddProductByUser::where('user_id', $userid)->get();
              $recipes_draft = \App\RecipesSubmit::where('user_id', $userid)->where('user_type', 'brand')->where('is_draft', '!=',null)->get();
             
              //for blogger data entry
              $bloggerrecipes = \App\Recipes::where('user_id', $userid)->get();
              $bloggerrecipesarr = [];
              foreach($bloggerrecipes as $key_blog => $val_blog){
                // dd($val_blog->user_id);
                $check_recipes_exist = \App\RecipesSubmit::where('id', $val_blog->recipes_fid)->where('is_draft', null)->first();
                if(!$check_recipes_exist){
                  $bloggerrecipesarr [] = Array(
                    'id'=>$val_blog->id,
                    'recipesName'=>$val_blog->recipesName,
                    'images'=>$val_blog->images,
                    'status' => $val_blog->status,
                    'is_approved'=>null,
                    'slug'=>$val_blog->slug,
                    'type' => 'blogger',
                  );
                }
           
              }
            //  end
          
            $temp_submit_recipes = [];
              $recipesData = \App\RecipesSubmit::where('user_id', $userid)->where('user_type', 'brand')->where('is_draft', null)->get();
            //  dd($recipesData);
              $ingredients = []; //\App\AddIngredientByUser::where('user_id', $userid)->get();
              $recipesArr = [];
              if($recipesData){
                foreach($recipesData as $key=>$val){
                  $is_approved_data = \App\Recipes::where('recipes_fid', $val->id)->where('status', '1')->first();
                  $slug = null;
                  $is_approved = 0;
                  if($is_approved_data){
                    $slug = $is_approved_data->slug;
                    $is_approved = 1;
                    
                  }
          
                  $recipesArr[] = Array(
                    'id'=>$val->id,
                    'recipesName'=>$val->recipesName,
                    'images'=>$val->images,
                    'status' => $val->status,
                    'is_approved'=>$is_approved,
                    'slug'=>$slug,
                    'type' => 'user',
                  );
                  unset($slug);
                  unset($is_approved);
                }
              }
          $temp_submit_recipes = array_merge($bloggerrecipesarr,$recipesArr);
       
              $recipes = collect($temp_submit_recipes);
            //  dd($recipes);
            $approved_recipes = \App\Recipes::where('user_id', $userid)->where('user_type', 'brand')->where('status', '1')->get();
          
            // dd($recipes);
              return view('companyregistration.my_uploads_brand', compact('products','recipes','ingredients','recipes_draft','approved_recipes'));
            }else{
                Session::flash('message', "Please Login or Signup");
                return redirect('/');
            }
          }


          //my brand recipe dashboard

          //my brand recipe add
          public function recipesSubmit_brand(){
            
            if(Auth::guard('company')->check()){
            SEO::setTitle('Recipes Submit');
            SEO::setDescription('Go To Chef, companion For your amazing food journey');
            SEO::opengraph()->setUrl(asset(' '));
            SEO::setCanonical(asset(' '));
            SEO::twitter()->setSite('@JustGoToChef');
        
            $is_submit = 0;
                $recipestechnique = DB::select("select * from recipestechnique where deleted_at IS null order by technique_name");
            // $cuisines=['0'=>'Please Select'];
            foreach ($recipestechnique as $value) {
                $techniques[$value->id]=$value->technique_name;
            }
        
            $cuisinestypes = DB::select("select * from cuisinestype where deleted_at IS null order by cuisinesName asc");
        
        foreach ($cuisinestypes as $cuisinestypedata) {
          $cuisinestype[$cuisinestypedata->id] = $cuisinestypedata->cuisinesName;
        }
        
        $recipestypes = DB::select("select * from recipestype where deleted_at IS null order by recipesName asc");
        
        foreach ($recipestypes as $recipestypedatas) {
          $recipestype[$recipestypedatas->id] = $recipestypedatas->recipesName;
        }
        
        $diets = DB::select("select * from diet where deleted_at IS null order by diet_name asc");
            
            foreach ($diets as $dietsdata) {
              $diet[$dietsdata->id]=$dietsdata->diet_name;
            }
        
        $occasionsids = DB::select("select * from occasions where deleted_at IS null");
        
            foreach ($occasionsids as $value) {
                $occasionsid[$value->id]=$value->occasionsName;
            }
        
        $foodscategorys = DB::select("select * from foodscategory where deleted_at IS null order by name asc");
        
        foreach ($foodscategorys as $foodscategorydatas) {
          $foodscategory[$foodscategorydatas->id] = $foodscategorydatas->name;
        }
       
        $userid = Auth::guard("company")->user()->user_id;
       
        $is_draft = [];
       
            $arrayTechData = null;
            $techsave = null;
                if(isset($is_draft->techniques)){
                    $arrayTechData = json_decode($is_draft->techniques);
            //	var_dump($arrayTechData);
            foreach($arrayTechData as $techdata){
              $techsavedata = \App\RecipesTechnique::select('id', 'technique_name')->where('id', $techdata)->first();
              if($techsavedata){
                $techsave[] = $techsavedata;
              }
            }
                }
        
      
        $directionarr = null;
        
        if(isset($is_draft->directions)){
          $directionarr = json_decode($is_draft->directions);
        }
        
        $tagsarr = null;
        if(isset($is_draft->tags)){
          $tagsarr = explode(',', $is_draft->tags);
        }
        
        $quantityarr = null;
        
        if(isset($is_draft->quantity)){
          $quantityarr = json_decode($is_draft->quantity);
        }
        //dd($quantityarr);
        $techdata2 = null;
        if(isset($is_draft->techniques)){
          $rr = ($is_draft->techniques);
          $techdata2 = str_replace(['[',']','"'], '', $rr);
        }
        
            return view('companyregistration.my_recipes_brand', compact('techniques', 'cuisinestype','recipestype','diet','occasionsid','foodscategory','is_draft','techsave', 'directionarr', 'tagsarr', 'quantityarr', 'techdata2','is_submit'));
          }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
            }
        }

        //my brand recipe edit
        public function recipesSubmitSave_brand(Request $request){

            if(Auth::guard('company')->check()){
            //  dd($request->all());
              $is_saved_draft = \App\RecipesSubmit::where('id', $request->review_id)->first();
              if($request->save_draft){
                  $request = $this->saveFiles($request);
                  $directions = json_encode($request['directions']);
                //dd($request['directions']);
                 $directionsfinalarr = null;
                   $directionsArr = $request['directions'];
                   if(isset($directionsArr)){
                     foreach($directionsArr as $key=>$value){
                       $directions2arr[] = $value;
                   unset($directions2arr[$key]);
                     }
                   }
                   $directionsfinalarr = json_encode($directions2arr);
          
                   if($directions){
                     $dirdata2 = $directions;
                   }else{
                    $dirdata2 = $directionsfinalarr;
                   }
                // dd($dirdata2);
            
                  $arring = explode(',', $request['ingarrdata']);
                 //  dd($arring);
                  $arrstep = explode(',', $request['stepdata']);
                
                  $arrqty = explode(',', $request['qtyarrdata']);
                
                  $arrtech = explode(',', $request['techniques']);
                  // dd($arring);
                
                  $qtrarr = [];
                  foreach ($arrstep as $key => $value) {
                    $qtrarr[$key] = $value;
                  }
                
                   $ingredient_id = json_encode($arring);  // stepdata
          
                    $techniques = json_encode($arrtech);
                    $quantity = $arrqty;
          
                    $ing_decode = json_encode($request->ingredientdata );
          
                    if($request->ingredientdata){
                      $tempingredient = $request->ingredientdata;
                    }else{
                      $tempingredient = null;
                    }
          
                    if($request->quantity){
                      $tempquantity = $request->quantity;
                    }else{
                      $tempquantity = null;
                    }
                    foreach ($tempingredient as  $key=>$value) {
                      foreach ($tempquantity as $key2=> $value2) {
                      if($key==$key2){
                          $quantity_arr[$value] =  $value2;
                      }
                      }
                    }
                    $quantity_json = json_encode($quantity_arr);
                  //  dd($quantity_arr);
                  //  dd($quantity_json);
                    $userid = Auth::guard("company")->user()->user_id;
                    $userlevel = Auth::guard("company")->user()->user_level;
                    
                    if($request['images_opt2']){
                      $img2 = $request['images_opt2'];
                    }else{
                      if(isset($is_saved_draft->images_opt2)){
                        $img2 = $is_saved_draft->images_opt2;
                      }else{
                        $img2 = null;
                      }
                    }
          
                    if($request['images_opt1']){
                      $img1 = $request['images_opt1'];
                    }else{
                      if(isset($is_saved_draft->images_opt1)){
                        $img1 = $is_saved_draft->images_opt1;
                      }else{
                        $img1 = null;
                      }
                    }
          
                    if($request['images']){
                      $images = $request['images'];
                    }else{
                      if(isset($is_saved_draft->images)){
                        $images = $is_saved_draft->images;
                      }else{
                        $images = null;
                      }
                    }
          
                    // dd($images);
          
                    // end
                    $review_id =  $request->review_id;
                    //dd($review_id);
                    if(!$review_id){
                      
                      $savedata = \App\RecipesSubmit::create([
                        'user_type'=>'brand',
                        'recipesName'=>$request['recipesName'],
                        'tags'=>$request['tags'],
                        'cuisinestype_id'=>$request['cuisinestype_id'],
                        'cuisinestype'=>$request['cuisinestypetest'],
                        'foodscategory_id'=>$request['foodscategory_id'],
                        'recipestype_id'=>$request['recipestype_id'],
                        'prep_time'=>$request['prep_time'],
                        'cook_time'=>$request['cook_time'],
                        'serving'=>$request['serving'],
                        'prep_level'=>$request['prep_level'],
                        'allergy_info'=>$request['allergy_info'],
                        'longDescription'=>$request['longDescription'],
                        'images'=>$images, 
                        'ingredient_list'=>$ingredient_id ,
                        'directions'=>$dirdata2,
                        'status'=>0, 
                        'occasions_id'=>$request['occasions_id'], 
                        'foodtype'=>$request['foodtype'], 
                        'techniques'=>$techniques, 
                        //'images2'=>$request['images2'],
                        'quantity'=>$quantity_json, 
                        'diet'=>$request['diet'], 
                        'tnc'=>$request['tnc'], 
                        'user_id'=>$userid, 
                        'user_level'=>$userlevel,
                        'images_opt2'=>$img2, 
                        'images_opt1'=>$img1, 
                        'youtube_link'=>$request['youtube_link'],
                        'recipes_notes'=>$request['recipes_notes'],
                        'youtube_thumbnail'=>null,
                        'blogger_url'=>$request['blogger_url'],
                        'is_draft' => date('Y-m-d H:i:s'), //$request['is_draft'],
                        'ip_address'=> $_SERVER['REMOTE_ADDR'],
                        'user_agent'=> $_SERVER['HTTP_USER_AGENT'],
                        'device_type'=>'Web',
                        'utm_source'=> $request['utm_source'],
                        'utm_medium'=> $request['utm_medium'],
                        'utm_campaign'=> $request['utm_campaign'],
                       
                      ]);
                
                    }else{
                      //dd('2');
                      $savedata = \App\RecipesSubmit::where('id',$review_id)->update([
                        'recipesName'=>$request['recipesName'],
                        'tags'=>$request['tags'],
                        'cuisinestype_id'=>$request['cuisinestype_id'],
                        'cuisinestype'=>$request['cuisinestypetest'],
                        'foodscategory_id'=>$request['foodscategory_id'],
                        'recipestype_id'=>$request['recipestype_id'],
                        'prep_time'=>$request['prep_time'],
                        'cook_time'=>$request['cook_time'],
                        'serving'=>$request['serving'],
                        'prep_level'=>$request['prep_level'],
                        'allergy_info'=>$request['allergy_info'],
                        'longDescription'=>$request['longDescription'],
                        'images'=>$images, 
                        'ingredient_list'=>$ingredient_id ,
                        'directions'=>$dirdata2,
                        'status'=>0, 
                        'occasions_id'=>$request['occasions_id'], 
                        'foodtype'=>$request['foodtype'], 
                        'techniques'=>$techniques, 
                        //'images2'=>$request['images2'],
                        'quantity'=>$quantity_json, 
                        'diet'=>$request['diet'], 
                        'tnc'=>$request['tnc'], 
                        'user_id'=>$userid, 
                        'user_level'=>$userlevel,
                        'images_opt2'=>$img2, 
                        'images_opt1'=>$img1, 
                        'youtube_link'=>$request['youtube_link'],
                        'recipes_notes'=>$request['recipes_notes'],
                        'youtube_thumbnail'=>null,
                        'blogger_url'=>$request['blogger_url'],
                        'is_draft' => date('Y-m-d H:i:s'), //$request['is_draft'],
                        'ip_address'=> $_SERVER['REMOTE_ADDR'],
                        'user_agent'=> $_SERVER['HTTP_USER_AGENT'],
                        'device_type'=>'Web',
                        'utm_source'=> $request['utm_source'],
                        'utm_medium'=> $request['utm_medium'],
                        'utm_campaign'=> $request['utm_campaign'],
                        'user_type'=>'brand',
                      ]);
                    }
                    Session::flash('message', "Saved in drafts!");
                    return redirect('my-recipes-brand');
              }else{
                // for submit case
                $request = $this->saveFiles($request);
                  $directions = json_encode($request['directions']);
                //dd($request['directions']);
                 $directionsfinalarr = null;
                   $directionsArr = $request['directions'];
                   if(isset($directionsArr)){
                     foreach($directionsArr as $key=>$value){
                       $directions2arr[] = $value;
                   unset($directions2arr[$key]);
                     }
                     
                   }
                   $directionsfinalarr = json_encode($directions2arr);
          
                   if($directions){
                     $dirdata2 = $directions;
                   }else{
                    $dirdata2 = $directionsfinalarr;
                   }
                // dd($dirdata2);
            
                  $arring = explode(',', $request['ingarrdata']);
                 //  dd($arring);
                  $arrstep = explode(',', $request['stepdata']);
                
                  $arrqty = explode(',', $request['qtyarrdata']);
                
                  $arrtech = explode(',', $request['techniques']);
                  // dd($arring);
                
                  $qtrarr = [];
                  foreach ($arrstep as $key => $value) {
                    $qtrarr[$key] = $value;
                  }
                
                   $ingredient_id = json_encode($arring);  // stepdata
          
                    $techniques = json_encode($arrtech);
                    $quantity = $arrqty;
          
                    $ing_decode = json_encode($request->ingredientdata );
          
                    if($request->ingredientdata){
                      $tempingredient = $request->ingredientdata;
                    }else{
                      $tempingredient = null;
                    }
          
                    if($request->quantity){
                      $tempquantity = $request->quantity;
                    }else{
                      $tempquantity = null;
                    }
                    foreach ($tempingredient as  $key=>$value) {
                      foreach ($tempquantity as $key2=> $value2) {
                      if($key==$key2){
                          $quantity_arr[$value] =  $value2;
                      }
                      }
                    }
                    $quantity_json = json_encode($quantity_arr);
                  //  dd($quantity_arr);
                  //  dd($quantity_json);
                    $userid = Auth::guard("company")->user()->user_id;
                    $userlevel = Auth::guard("company")->user()->user_level;
                    // img
                    if($request['images_opt2']){
                      $img2 = $request['images_opt2'];
                    }else{
                      if(isset($is_saved_draft->images_opt2)){
                        $img2 = $is_saved_draft->images_opt2;
                      }else{
                        $img2 = null;
                      }
                    }
          
                    if($request['images_opt1']){
                      $img1 = $request['images_opt1'];
                    }else{
                      if(isset($is_saved_draft->images_opt1)){
                        $img1 = $is_saved_draft->images_opt1;
                      }else{
                        $img1 = null;
                      }
                    }
          
                    if($request['images']){
                      $images = $request['images'];
                    }else{
                      if(isset($is_saved_draft->images)){
                        $images = $is_saved_draft->images;
                      }else{
                        $images = null;
                      }
                    }
          
                    $review_id=  $request->review_id;
          
                    $checkrecipes = \App\RecipesSubmit::where('id',$review_id)->first();
                   // dd($checkrecipes);
                    if($checkrecipes){
                      //dd('2');
                      $savedata = \App\RecipesSubmit::where('id',$review_id)->first();
                      $savedata->recipesName = $request['recipesName'];
                      $savedata->tags = $request['tags'];
                      $savedata->cuisinestype_id = $request['cuisinestype_id'];
                      $savedata->cuisinestype = $request['cuisinestypetest'];
                      $savedata->foodscategory_id = $request['foodscategory_id'];
                      $savedata->recipestype_id = $request['recipestype_id'];
                      $savedata->prep_time = $request['prep_time'];
                      $savedata->cook_time = $request['cook_time'];
                      $savedata->serving = $request['serving'];
                      $savedata->prep_level = $request['prep_level'];
                      $savedata->allergy_info = $request['allergy_info'];
                      $savedata->longDescription = $request['longDescription'];
                      $savedata->images = $images;
                      $savedata->ingredient_list = $ingredient_id;
                      $savedata->directions = $dirdata2;
                      $savedata->status = '0';
                      $savedata->occasions_id = $request['occasions_id'];
                      $savedata->foodtype = $request['foodtype'];
                      $savedata->techniques = $techniques;
                      $savedata->quantity = $quantity_json;
                      $savedata->diet = $request['diet'];
                      $savedata->tnc = 'yes';
                      $savedata->diet = $request['diet'];
                      $savedata->user_id = $userid;
                      $savedata->user_level = $userlevel;
                      $savedata->images_opt2 = $img2;
                      $savedata->images_opt1 = $img1;
                      $savedata->youtube_link = $request['youtube_link'];
                      $savedata->recipes_notes = $request['recipes_notes'];
                      $savedata->youtube_thumbnail = null;
                      $savedata->is_draft = null;
                      $savedata->ip_address = $_SERVER['REMOTE_ADDR'];
                      $savedata->user_agent = $_SERVER['HTTP_USER_AGENT'];
                      $savedata->device_type = 'Web';
                      $savedata->user_type= 'brand';
                      $savedata->utm_source = $request->cookie('utm_source'); //$request['recipes_notes'];
                      $savedata->utm_medium = $request->cookie('utm_medium');
                      $savedata->utm_campaign = $request->cookie('utm_campaign');
                      $savedata->user_submit_date = date('Y-m-d H:i:s');
                     $checkupdated = $savedata->update();
                     if(!$savedata->is_draft){

                      // bhumika.rawat@weareflamingo.in    // brands@justgotochef.com
                      Mail::to('brands@justgotochef.com')->send(new \App\Mail\RecipesSubmit($request));
                      Mail::to(Auth::guard("company")->user()->email)->send(new \App\Mail\RecipesSubmitThankYou($request));
                      Session::flash('message', "Thankyou for submitting a recipe. Our team will inform you as soon as the recipe has been added to GoToChef. Please check your email for the same.");
                      // end
                      return redirect('my-recipes-brand');
                    }else{
                      Session::flash('message', "Something went wrong. Please try again!");
                      return Redirect::back();
                    }
                    }else{
         
                      $savedata = new \App\RecipesSubmit;
                      $savedata->recipesName = $request['recipesName'];
                      $savedata->tags = $request['tags'];
                      $savedata->cuisinestype_id = $request['cuisinestype_id'];
                      $savedata->cuisinestype = $request['cuisinestypetest'];
                      $savedata->foodscategory_id = $request['foodscategory_id'];
                      $savedata->recipestype_id = $request['recipestype_id'];
                      $savedata->prep_time = $request['prep_time'];
                      $savedata->cook_time = $request['cook_time'];
                      $savedata->serving = $request['serving'];
                      $savedata->prep_level = $request['prep_level'];
                      $savedata->allergy_info = $request['allergy_info'];
                      $savedata->longDescription = $request['longDescription'];
                      $savedata->images = $images;
                      $savedata->ingredient_list = $ingredient_id;
                      $savedata->directions = $dirdata2;
                      $savedata->status = '0';
                      $savedata->occasions_id = $request['occasions_id'];
                      $savedata->foodtype = $request['foodtype'];
                      $savedata->techniques = $techniques;
                      $savedata->quantity = $quantity_json;
                      $savedata->diet = $request['diet'];
                      $savedata->tnc = 'yes';
                      $savedata->diet = $request['diet'];
                      $savedata->user_id = $userid;
                      $savedata->user_level = $userlevel;
                      $savedata->images_opt2 = $img2;
                      $savedata->images_opt1 = $img1;
                      $savedata->youtube_link = $request['youtube_link'];
                      $savedata->recipes_notes = $request['recipes_notes'];
                      $savedata->youtube_thumbnail = null;
                      $savedata->ip_address = $_SERVER['REMOTE_ADDR'];
                      $savedata->user_agent = $_SERVER['HTTP_USER_AGENT'];
                      $savedata->device_type = 'Web';
                      $savedata->user_type= 'brand';
                      $savedata->is_draft = null;
                      $savedata->utm_source = $request->cookie('utm_source'); //$request['recipes_notes'];
                      $savedata->utm_medium = $request->cookie('utm_medium');
                      $savedata->utm_campaign = $request->cookie('utm_campaign');
                      $savedata->user_submit_date = date('Y-m-d H:i:s');
                      $savedata->save();
                      $lastinserted_id = $savedata->id;
                       // mail section   brands@justgotochef.com  // prashant.sharma@weareflamingo.in
                      if($lastinserted_id){
                        Mail::to('brands@justgotochef.com')->send(new \App\Mail\RecipesSubmit($request));
                        Mail::to(Auth::guard("company")->user()->email)->send(new \App\Mail\RecipesSubmitThankYou($request));
                        Session::flash('message', "Thankyou for submitting a recipe. Our team will inform you as soon as the recipe has been added to GoToChef. Please check your email for the same.");
                        // end
                        return redirect('my-recipes-brand');
                      }else{
                        Session::flash('message', "Something went wrong. Please try again!");
                        return Redirect::back();
                      }
                    }
                    
                    return redirect('my-recipes-brand');
              }
            }else{
              Session::flash('message', "Please Login or Signup");
              return redirect('/');
              }
          }

          //my brand recipe edit

          public function post_submit_recipes_edit_brand(Request $request){
            // dd($request->all());
            if(Auth::guard('company')->check()){
             $userid = Auth::guard("company")->user()->user_id;
             $userlevel = Auth::guard("company")->user()->user_level;
             $checkmailstatus = \App\RecipesSubmit::where('user_id', $userid)->where('id', $request->review_id)->where('is_draft', null)->first();
             $is_saved_draft = \App\RecipesSubmit::where('id', $request->review_id)->first();
            $tempurl = null;
            $youtubethumbnail_name = null;
            $contents = null;
             
             $request = $this->saveFiles($request);
             $directions = json_encode($request['directions']);
         //dd($request['directions']);
          $directionsfinalarr = null;
            $directionsArr = $request['directions'];
            if(isset($directionsArr)){
              foreach($directionsArr as $key=>$value){
                $directions2arr[] = $value;
            unset($directions2arr[$key]);
              }
              
            }
            $directionsfinalarr = json_encode($directions2arr);
         
            if($directions){
              $dirdata2 = $directions;
            }else{
             $dirdata2 = $directionsfinalarr;
            }
         // dd($dirdata2);
         
           $arring = explode(',', $request['ingarrdata']);
          //  dd($arring);
           $arrstep = explode(',', $request['stepdata']);
         
           $arrqty = explode(',', $request['qtyarrdata']);
         
           $arrtech = explode(',', $request['techniques']);
           // dd($arring);
         
           $qtrarr = [];
           foreach ($arrstep as $key => $value) {
             $qtrarr[$key] = $value;
           }
         
           $ingredient_id = json_encode($arring);  // stepdata
             $techniques = json_encode($arrtech);
             
             $quantity = $arrqty;
             $ing_decode = json_encode($request->ingredientdata );
            // dd($request->ingredientdata);
         
             if($request->ingredientdata){
               $tempingredient = $request->ingredientdata;
             }else{
               $tempingredient = null;
             }
             if($request->quantity){
               $tempquantity = $request->quantity;
             }else{
               $tempquantity = null;
             }
             foreach ($tempingredient as  $key=>$value) {
               foreach ($tempquantity as $key2=> $value2) {
               if($key==$key2){
                   $quantity_arr[$value] =  $value2;
               }
               }
             }
             $quantity_json = json_encode($quantity_arr);
          
             if($request->images) {
               $request = $this->saveFiles($request);
               $images = $request->images;
             }else{
               $images = $is_saved_draft->images;
             }
         
             if($request->images_opt1) {
               $request = $this->saveFiles($request);
               $images_opt1 = $request->images_opt1;
             }else{
               $images_opt1 = $is_saved_draft->images_opt1;
             }
         
             if($request->images_opt2) {
               $request = $this->saveFiles($request);
               $images_opt2 = $request->images_opt2;
             }else{
               $images_opt2 = $is_saved_draft->images_opt2;
             }
         
             $is_draft_request;
             if($request->save_draft){
               $is_draft_request = date('Y-m-d H:i:s');
             }else{
               $is_draft_request = null;
             }
             // end
         
         
             if(isset($request->save_draft)){
               $usersubmitdate = null;
             }elseif($checkmailstatus){
               $usersubmitdate = $is_saved_draft->user_submit_date;
             }else{
               $usersubmitdate = date('Y-m-d H:i:s');
             }
             // dd($request->all());
             $review_id =  $request->review_id;
             $savedata = \App\RecipesSubmit::where('id',$review_id)->update([
             'recipesName'=>$request['recipesName'],
             'tags'=>$request['tags'],
             'cuisinestype_id'=>$request['cuisinestype_id'],
             'cuisinestype'=>$request['cuisinestypetest'],
             'foodscategory_id'=>$request['foodscategory_id'],
             'recipestype_id'=>$request['recipestype_id'],
             'prep_time'=>$request['prep_time'],
             'cook_time'=>$request['cook_time'],
             'serving'=>$request['serving'],
             'prep_level'=>$request['prep_level'],
             'allergy_info'=>$request['allergy_info'],
             'longDescription'=>$request['longDescription'],
             'images'=>$images, 
             'ingredient_list'=>$ingredient_id ,
             'directions'=>$dirdata2,
             'status'=>$request['status'], 
             'occasions_id'=>$request['occasions_id'], 
             'foodtype'=>$request['foodtype'], 
             'techniques'=>$techniques,
             'quantity'=>$quantity_json, 
             'diet'=>$request['diet'], 
             'tnc'=>$request['tnc'], 
             'user_id'=>$userid, 
             'user_level'=>$userlevel,
             'images_opt2'=>$images_opt2, 
             'images_opt1'=>$images_opt1, 
             'youtube_link'=>$request['youtube_link'],
             'recipes_notes'=>$request['recipes_notes'],
             'blogger_url'=>$request['blogger_url'],
             'youtube_thumbnail'=>$youtubethumbnail_name,
             'is_draft' => $is_draft_request,
             'is_update' => 1,
            'user_submit_date' => $usersubmitdate,
           ]);
         
         
           //  hide - logic has been change in edit submit recipes request - Date: 26 June 2019
          $myrecipes = \App\Recipes::where('recipes_fid', $review_id)->first();
         
         
          // mail section 
         
          $edit_recipes_array = [];
          if($myrecipes){
           $edit_recipes_array = Array(
                   'user_id' =>  Auth::guard("company")->user()->user_id,
                   'user_email' =>  Auth::guard("company")->user()->email,
                   'user_name' =>  Auth::guard("company")->user()->first_name.' '.Auth::guard("company")->user()->last_name,
                   'recipes_id' => $myrecipes->id,
                   'recipes_name' => $myrecipes->recipesName,
                   'recipes_slug' => $myrecipes->slug,
                   'recipes_date' => $myrecipes->updated_at,
                   'page_type' => 'recipes',
                 );
          }else{
           $edit_recipes_array = Array(
                 'user_id' =>  Auth::guard("company")->user()->user_id,
                 'user_email' =>  Auth::guard("company")->user()->email,
                 'user_name' =>  Auth::guard("company")->user()->first_name.' '.Auth::guard("company")->user()->last_name,
                 'recipes_id' => $review_id,
                 'recipes_name' => $request['recipesName'],
                 'recipes_slug' => '',
                 'recipes_date' => date('Y-m-d H:i:s'),
                 'page_type' => 'submit recipes'
                );
          }
         // brands@justgotochef.com   prashant.sharma@weareflamingo.in
         
         if(isset($request->save_draft)){
           $msg = "Saved in drafts!";
         }elseif($checkmailstatus){
           $msg = "Your recipe has been successfully updated.";
           Mail::to('brands@justgotochef.com')->send(new \App\Mail\UserSubmitRecioesEdit($edit_recipes_array));
         }else{
           $msg = "Thankyou for submitting a recipe. Our team will inform you as soon as the recipe has been added to GoToChef. Please check your email for the same.";
           Mail::to('brands@justgotochef.com')->send(new \App\Mail\RecipesSubmit($request));
           Mail::to(Auth::guard("company")->user()->email)->send(new \App\Mail\RecipesSubmitThankYou($request));
         }
         
           Session::flash('message', $msg);
           return redirect('my-recipes-brand?type=my-uploads#uploadSection');
         }else{
         Session::flash('message', "Please Login or Signup");
         return redirect('/');
         }
         }

         public function edit_submit_recipes_brand($id){
            // dd('');
            if(Auth::guard('company')->check()){
              SEO::setTitle('Recipes Submit');
              SEO::setDescription('Go To Chef, companion For your amazing food journey');
              SEO::opengraph()->setUrl(asset(' '));
              SEO::setCanonical(asset(' '));
              SEO::twitter()->setSite('@JustGoToChef');
          
                  $recipestechnique = DB::select("select * from recipestechnique where deleted_at IS null order by technique_name");
              // $cuisines=['0'=>'Please Select'];
              foreach ($recipestechnique as $value) {
                  $techniques[$value->id]=$value->technique_name;
              }
          
              $cuisinestypes = DB::select("select * from cuisinestype where deleted_at IS null order by cuisinesName asc");
          
          foreach ($cuisinestypes as $cuisinestypedata) {
            $cuisinestype[$cuisinestypedata->id] = $cuisinestypedata->cuisinesName;
          }
          
          $recipestypes = DB::select("select * from recipestype where deleted_at IS null order by recipesName asc");
          
          foreach ($recipestypes as $recipestypedatas) {
            $recipestype[$recipestypedatas->id] = $recipestypedatas->recipesName;
          }
          
          $diets = DB::select("select * from diet where deleted_at IS null order by diet_name asc");
              
              foreach ($diets as $dietsdata) {
                $diet[$dietsdata->id]=$dietsdata->diet_name;
              }
          
          $occasionsids = DB::select("select * from occasions where deleted_at IS null");
          
              foreach ($occasionsids as $value) {
                  $occasionsid[$value->id]=$value->occasionsName;
              }
          
          $foodscategorys = DB::select("select * from foodscategory where deleted_at IS null order by name asc");
          
          foreach ($foodscategorys as $foodscategorydatas) {
            $foodscategory[$foodscategorydatas->id] = $foodscategorydatas->name;
          }
         
          $userid = Auth::guard("company")->user()->user_id;
          $is_draft = \App\RecipesSubmit::where('id', $id)->where('user_id',$userid)->first();
          
          if(!$is_draft->is_draft){
            $is_submit = 1;
          }else{
            $is_submit = 0;
          }
         
              $arrayTechData = null;
              $techsave = null;
                  if(isset($is_draft->techniques)){
                      $arrayTechData = json_decode($is_draft->techniques);
              //	var_dump($arrayTechData);
              foreach($arrayTechData as $techdata){
                $techsavedata = \App\RecipesTechnique::select('id', 'technique_name')->where('id', $techdata)->first();
                if($techsavedata){
                  $techsave[] = $techsavedata;
                }
              }
                  }
          
          $directionarr = null;
          
          if(isset($is_draft->directions)){
            $directionarr = json_decode($is_draft->directions);
          }
         
          $tagsarr = null;
          if(isset($is_draft->tags)){
            $tagsarr = explode(',', $is_draft->tags);
          }
          
        
          $quantityarr = null;
          
          if(isset($is_draft->quantity)){
            $quantityarr = json_decode($is_draft->quantity);
          }
          //dd($quantityarr);
          $techdata2 = null;
          if(isset($is_draft->techniques)){
            $rr = ($is_draft->techniques);
            $techdata2 = str_replace(['[',']','"'], '', $rr);
          }
          
              return view('companyregistration.my_recipes_brand', compact('techniques', 'cuisinestype','recipestype','diet','occasionsid','foodscategory','is_draft','techsave', 'directionarr', 'tagsarr', 'quantityarr', 'techdata2', 'is_submit'));
            }else{
              Session::flash('message', "Please Login or Signup");
              return redirect('/');
              }
          }

          public function delete_uploads_recipes_brand($id)
            {
            if (Auth::guard('company')->check()){
            $userid = Auth::guard('company')->user()->user_id;
            $data = \App\RecipesSubmit::where('id', $id)->where('user_id', $userid)->first();
           // dd($data);
            $data->delete();

            $email_arr = Array(
              'user_id'=> $userid,
              'item_name'=>$data->recipesName,
              'email_subject'=>'Testing Recipe Delete',
              'email_body'=> 'Your Recipe "'.$data->recipesName.'" has been Deleted',
              'action_type'=>'Deletion',
              'admin_email_subject' => 'admin email subject',
              'admin_email_body' => 'Recipe "'.$data->recipesName.'" has been Deleted',
            );

            $this->brand_action($email_arr);
            Session::flash('message', "Deleted!");
            return Redirect::back();
            }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
            }
            }

        public function brand_action($email_arr){
          //dd($email_arr);
          $brand =  \App\Brand::where('companyprofile_id', $email_arr['user_id'])->first();

          if(isset($brand)){
            $brand_name = $brand->brand_name;
          }else{
            $brand_name = '---';
          }
          $customer = \App\SocialLogin::where('user_id', $email_arr['user_id'])->where('user_type', 'company_user')->first();
          if(isset($customer->first_name)){
            $uname = $customer->first_name;
          }else{
            $uname = 'User';
          }

          if(isset($customer->email)){
            $uemail = $customer->email;
          }else{
            $uemail = '';
          }
         // dd($customer);
          // dd($customer);
          $userdata = Array(
            'user_id' => $email_arr['user_id'],
            'user_name' => $uname,
            'email_id' => $uemail,
            'item_name'=> $email_arr['item_name'],
            'email_subject' => $email_arr['email_subject'],
            'email_body' => $email_arr['email_body'],
            'action_type' => $email_arr['action_type']
          );
          
          $admindata = Array(
            'user_id' => $email_arr['user_id'],
            'user_name' => $uname,
            'admin_email'=>$uemail,
            'item_name'=> $email_arr['item_name'],
            'admin_email_subject' => $email_arr['admin_email_subject'],
            'admin_email_body' => $email_arr['admin_email_body'],
            'action_type' =>$email_arr['action_type'],
            'brand_name' => $brand_name,
          );

          if($uemail){
            Mail::to($customer->email)->send(new \App\Mail\BrandAction($userdata));
            Mail::to('brands@justgotochef.com')->send(new \App\Mail\BrandAdminAction($admindata));
          }
         
        }

        public function product_recipe_map(){
          if(Auth::guard('company')->check()){

              $product_data = [];
              $recipe_data = [];
              $cid = Auth::guard("company")->user()->user_id;
              //dd($cid);
              $brand_name = \App\Brand::where('companyprofile_id', $cid)->first();
              if(isset($brand_name)){
                  $tempproduct = \App\Products::where('brand_id', $brand_name->id)->get();
              if(isset($tempproduct)){
                  foreach ($tempproduct as $value) {
                     
                      $product_name = $brand_name->brand_name.' '.$value->productName.' '.$value->quantity.' '.$value->unit.' '.$value->product_variant_name.' '.str_replace(['[',']','"'], '', $value->packaging_type);
                      $product_data[] = Array(
                      'id' => $value->id,
                      'product_name'=> $product_name
                      );
                    }
              }
            }

            $recipes = \App\Recipes::where('user_id',$cid)->where('user_type','brand')->get();
            if(isset($recipes)){
              foreach ($recipes as $value) {
                  $recipe_data[] = Array(
                  'id' => $value->id,
                  'recipes_name'=> $value->recipesName
                  );
                }
              }
              $brand_id = Auth::guard("company")->user()->user_id;
              $user_id = Auth::guard("company")->user()->id;

              $product_ids ='';
              $recipe_ids ='';
              $mapdata = \App\ProductRecipeMap::where('user_id',$user_id)->where('brand_id',$brand_id)->first();
              if(isset($mapdata->product_id)){
                $product_ids = json_decode($mapdata->product_id);
                $recipe_ids  = json_decode($mapdata->recipe_id);
              }
              
              //dd($product_ids);
              return view('companyregistration.product_recipe_map',compact('product_data','recipe_data','product_ids','recipe_ids'));
          }else{
            Session::flash('message', "Please Login or Signup");
            return redirect('/');
          }
        }

        public function product_recipe_map_save(Request $request){
         
          $product_ids = json_encode($request->product_data);
          $recipe_ids = json_encode($request->recipe_data);
          $brand_id = Auth::guard("company")->user()->user_id;
          $user_id = Auth::guard("company")->user()->id;

          $prev_data = \App\ProductRecipeMap::where('user_id',$user_id)->where('brand_id',$brand_id)->get();
         // dd($prev_data);
          if($prev_data->isEmpty()){
            $savedata = new \App\ProductRecipeMap;
            $savedata->user_id = $user_id;
            $savedata->brand_id = $brand_id;
            $savedata->product_id = $product_ids;
            $savedata->recipe_id = $recipe_ids;
            $savedata->status = '0';
            $savedata->save();
          }else{
            $savedata = \App\ProductRecipeMap::where('user_id',$user_id)->where('brand_id',$brand_id)->first();
            $savedata->user_id = $user_id;
            $savedata->brand_id = $brand_id;
            $savedata->product_id = $product_ids;
            $savedata->recipe_id = $recipe_ids;
            $savedata->status = '0';
            $savedata->update();
          }
          return redirect('product-recipe-map');
          
        }


        //delete maaping
        public function delete_product_mapping(){

          $brand_id = Auth::guard("company")->user()->user_id;
          $user_id = Auth::guard("company")->user()->id;
          $data = \App\ProductRecipeMap::where('user_id',$user_id)->where('brand_id',$brand_id)->first();
          
          if($data != null){
            $data->delete();
          }
          return redirect('product-recipe-map');
         }
    //my brand recipe dashboard

    //datatable-ajax
    public function get_brands_data(){
      return view('companyregistration.ajax_datatable');
    }

    

    public function get_brands_ajax_data(Request $request)
    {
        
        $columns = array( 
                            0 =>'id', 
                            1 =>'brand_name',
                            2=> 'created_at',
                        );
  
        $totalData = \App\Brand::count();
            
        $totalFiltered = $totalData; 

        $limit = $request->input('length');
        $start = $request->input('start');
        $order = $columns[$request->input('order.0.column')];
        $dir = $request->input('order.0.dir');
            
        if(empty($request->input('search.value')))
        {            
            $brands = \App\Brand::offset($start)
                         ->limit($limit)
                         ->orderBy($order,$dir)
                         ->get();
        }
        else {
            $search = $request->input('search.value'); 

            $brands =  \App\Brand::where('id','LIKE',"%{$search}%")
                            ->orWhere('brand_name', 'LIKE',"%{$search}%")
                            ->offset($start)
                            ->limit($limit)
                            ->orderBy($order,$dir)
                            ->get();

            $totalFiltered = \App\Brand::where('id','LIKE',"%{$search}%")
                             ->orWhere('brand_name', 'LIKE',"%{$search}%")
                             ->count();
        }

        $data = array();
        if(!empty($brands))
        {
          foreach($brands as $row){
                $brand_data[] = array(
                  'id'=>$row->id,
                  'brand_name'=>$row->brand_name,
                  'created_at'=>$row->slug,
                );
              }
        }
          
        $json_data = array(
                    "draw"            => intval($request->input('draw')),  
                    "recordsTotal"    => intval($totalData),  
                    "recordsFiltered" => intval($totalFiltered), 
                    "data"            => $brand_data   
                    );
            
        echo json_encode($json_data); 
        
    }

    public function mapping_list(){

      if(Auth::guard('company')->check()){
        // SEO Section Start
        SEO::setTitle('Brand Products');
        SEO::setDescription('Go To Chef, companion For your amazing food journey');
        SEO::opengraph()->setUrl(asset(' '));
        SEO::setCanonical(asset(' '));
        SEO::twitter()->setSite('@JustGoToChef');
        // SEO Section End
        $cid = Auth::guard("company")->user()->user_id;
       // dd($cid);
        $branddata = \App\ProductRecipeMap::where('brand_id', $cid)->first();
        $product_ids = json_decode($branddata->product_id);
        //dd($product_ids);
        $brandproduct = [];
        if(isset($branddata)){
            foreach ($branddata as $value) {

                $brandproduct[] = Array(
                'id' => $value->id,
                'productName' => $value->productName
                );
                }
          }
        
        
        
        return view('companyregistration.brand_mapping_list', compact('brandproduct'));
        }else{
        Session::flash('message', "Please Login or Signup");
        return redirect('gotochef-for-brands');
        }
    }

}
