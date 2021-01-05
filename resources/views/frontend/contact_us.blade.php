@extends('frontend/master')
@section('content')


<style>

#g-recaptcha-response {
    display: block !important;
    position: absolute;
    margin: -78px 0 0 0 !important;
    width: 550px !important;
    height: 76px !important;
    z-index: -999999;
    opacity: 0;
}

.capt{margin-bottom:15px;}


</style>


<script src='https://www.google.com/recaptcha/api.js'></script>
<script>
 window.onload = function() {
    var $recaptcha = document.querySelector('#g-recaptcha-response');

    if($recaptcha) {
        $recaptcha.setAttribute("required", "required");
    }
};
</script>
<div class="body contact-page">
        <!--section 1-->
        <section>
            <div class="contact-page-banner">
                <h1>Contact Us</h1>
                <div class="contact-social-icons">
                    <ul class="list-unstyled">
                        <li><a href="https://www.facebook.com/parkplacepower" target="_blank"><img src="{{ asset('content/images/contact-us/fb-icon.png')}}" /></a></li>
                        <!-- <li><a><img src="{{ asset('content/images/contact-us/tw-icon.png')}}" /></a></li> -->
                        <li><a href="https://www.linkedin.com/company/park-place-power/" target="_blank"><img src="{{ asset('content/images/contact-us/linkin-icon.png')}}" /></a></li>
                    </ul>
                </div>
                <div class="contact-address-blocks">
                    <div class="add-block">
                        <div>
                            <img src="{{ asset('content/images/contact-us/icon1.png')}}" />
                            <h3>Arlington, Texas</h3>
                            <span class="bordr"></span>
                            <h5>Head Quarters</h5>
                        </div>
                        <!area_of_interest_2
                        <p>2000 E.Lamar Blvd. <br />Suite 600<br />(Ballpark Way), Arlington , TX.76006<br /><a href="tel:469-249-8985"></a></p>
                    </div>
                    <div class="add-block">
                        <div>
                            <img src="{{ asset('content/images/contact-us/icon2.png')}}" />
                            <h3>Houston, Texas</h3>
                            <span class="bordr"></span>
                            <h5>Head Quarters</h5>
                        </div>

                        <p>11111 Katy Fwy <br />Suite 910<br />(Energy Corridor), Houston , TX.77043<br /><a href="tel:469-249-8985"></a></p>
                    </div>
                    
                </div>              
            </div>
        </section>
      
        <!--section 1-->
        <!--section 2-->
        <section>
            <div class="contact-section2">
                <div class="contact-section2-container">
                    <h2>Here to help</h2>
                    <h4>Your tailored energy solution starts when you fill out this short form.</h4>
                    <ul class="nav nav-pills">
                        <!-- <li class="active"><a data-toggle="pill" href="#residential-energy-requirement">Residential energy requirements</a></li>
                        <li><a data-toggle="pill" href="#commercial-energy-requirement">Commercial energy requirements</a></li> -->
                    </ul>
                    
                    <div class="tab-content">
                        <div id="residential-energy-requirement" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-section2-lt-form">
                                    <p>From here, we can learn more about your business, send relevant energy updates, and recommend an approach suited to meet your needs.</p>
                                    <!-- <form method="post" action="{{ asset('contact') }}" onsubmit="return validation_residential();"> -->
                                    {!! Form::open(['url' => 'contact']) !!}
                                        <input type="hidden" name="form_type" value="Residential energy requirements">
                                        <input type="text" name="name" id="name_1" placeholder="Your Full Name* " />
                                        <span id="name_res_error" style="color:#b12121;"></span>
                                        <input type="email" name="email" id="email_1" placeholder="Your Email* " />
                                        <span id="email_res_error" style="color:#b12121;"></span>
                                        <input type="number" step="1" min="0" name="mobile" id="mobile_1" placeholder="Your Phone No*" />
                                        <span id="mobile_res_error" style="color:#b12121;"></span>
                                        
                                        <input type="text" name="form_title" id="form_title_1" placeholder="Title "/>
                                        <select name="area_of_interest" id="area_of_1nterest_1">
                                            <option value="">Area of Interest</option>
                                            <option value="Option1">Custom Pricing</option>
                                            <option value="Option2">Aggregation Pool</option>
                                            <option value="Option2">Energy Efficiency Initiative</option>
                                            <option value="Option2">Complimentary Utility Audit</option>
                                        </select>
                                        <textarea placeholder="Your query" name="query" id="query_1"></textarea>
                                        <button type="submit" class="btn-send" onclick="return validation_residential();">Send</button>
                                        
                                        
                                    </form>
                                      
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad-zero">
                                    <div class="contact-section2-rt-txt">
                                        <h6>Let us help direct you to the right contact.</h6>
                                        <h3>Need assistance with your residential plan?</h3>
                                        <p>
                                            <span>Place power customer care no.</span> <br />
                                            <a href="tel:1-855-500-8703">1-855-500-8703</a><br />
                                            Monday – Friday, 8:00 AM to 8:00 PM EST<br />
                                            <a href="mailto:support@parkplacepower.com">support@parkplacepower.com</a><br />
                                            Please be ready with your name, service address, and utility account number. Replies can be expected within three business days.
                                        </p>
                                       <!-- <div class="contact-tnc-div">
                                            <h4>Terms and conditions</h4>
                                            <p>By clicking the Send button above, you agree to the Privacy Policy and authorize Park Place Power to contact you for marketing purposes at the telephone, email, or mobile number you entered using automated telephone technology, including auto-dialers and text messages, even if your telephone or mobile number is currently listed on any state, federal, or corporate “Do Not Call” list, and you are not required to give your consent as a condition of purchase.</p>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="commercial-energy-requirement" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 contact-section2-lt-form">
                                    <p>From here, we can learn more about your business, send relevant energy updates, and recommend an approach suited to meet your needs. See if you qualify to participate in an upcoming aggregation. Multiple start date options available. There is strength in numbers.</p>
                                    
                                    {!! Form::open(['url' => 'contact'], ['id' => 'form']) !!}
                                    
                                        <input type="hidden" name="form_type" value="Commercial energy requirements">
                                        <input type="text" name="name" id="name_2" placeholder="Your Full Name* " />
                                        <span id="name_com_error" style="color:#b12121;"></span>
                                        <input type="email" name="email" id="email_2" placeholder="Your Email* " />
                                        <span id="email_com_error" style="color:#b12121;"></span>
                                        <!--<input type="number" step="1" min="0" name="mobile" id="mobile_2" placeholder="Your Phone No*" />-->
                                        <div id="form11">
                                        <input type="tel"  step="1" min="0" name="mobile" id="mobile_2" placeholder="Contact-Number* (541-754-3010)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required>
                                        <span id="mobile_com_error" style="color:#b12121;"></span>
                                        </div>
                                        <input type="text" name="form_title" id="form_title_2" placeholder="Title* " required/>
                                        <select name="area_of_interest" id="area_of_interest_2" required/>
                                            <option value="">Area of Interest</option>
                                            <option value="Custom Pricing">Custom Pricing</option>
                                            <option value="Aggregation Pool">Aggregation Pool</option>
                                            <option value="Energy Efficiency Initiative">Energy Efficiency Initiative</option>
                                            <option value="Complimentary Utility Audit">Complimentary Utility Audit</option>
                                        </select>
                                        <textarea placeholder="Your Message*" name="query" id="query_2" required/></textarea>
                                        <div class="g-recaptcha capt" data-sitekey="6LfCWf8ZAAAAAA-5XrKoPHhS2hATcW6Jr-IapJTV"></div>
                                        <button type="submit" class="btn-send" onclick="return validation_commercial();">Send</button>
                                    </form>
                                  
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 pad-zero">
                                    <div class="contact-section2-rt-txt">
                                        <h6>Let us help direct you to the right contact.</h6>
                                        <h3>Need assistance with your commercial plan?</h3>
                                        <p>
                                            <span>Place power customer care no.</span> <br />
                                            <a href="tel:18884077022">1-888-407-7022</a><br />
                                            If you need help residential energy, contact us at <a href="tel:2149604741">214-960-4741</a>.<br>
                                            Monday – Friday, 8:00 AM to 8:00 PM EST<br />
                                            <a href="mailto:support@parkplacepower.com">support@parkplacepower.com</a><br />
                                            Please be ready with your name, service address, and utility account number. Replies can be expected within three business days.
                                        </p>
                                        <!--<div class="contact-tnc-div">
                                            <h4>Terms and conditions</h4>
                                            <p>By clicking the Send button above, you agree to the Privacy Policy and authorize Park Place Power to contact you for marketing purposes at the telephone, email, or mobile number you entered using automated telephone technology, including auto-dialers and text messages, even if your telephone or mobile number is currently listed on any state, federal, or corporate “Do Not Call” list, and you are not required to give your consent as a condition of purchase.</p>
                                        </div>-->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 2-->
        <!--section 3-->
        <section>
            
        </section>
        <!--section 3-->
        <!--section 4-->
        <section>
            
        </section>
        
        <!--section 4-->        
    </div>
<script>

function validation_residential(){
    var name1 = $("#name_1").val();
    var email1 = $("#email_1").val();
    var mobile1 = $("#mobile_1").val();

    if(name1=='')
        {
            $('#name_res_error').html('Please Enter Your Name');
            $("#name_1").focus();
            return false;
        }
        $('#name_res_error').html(' ');



    if(email1=='')
        {
            $('#email_res_error').html('Please Enter Email');
            $('#email_1').focus();
            return false;
        }else{
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = email1;
            if(reg.test(address) == false) {
                $('#email_res_error').html('Invalid Email Address');
                $('#email_1').focus();
                return false;
            }
        }
        $('#email_res_error').html(' ');

    if(mobile1=='')
        {
            $('#mobile_res_error').html('Please Enter Mobile Number');
            $('#mobile_1').focus();
            return false;

        }
        $('#mobile_res_error').html(' ');

        if(mobile1!='')
        {
           if(mobile1.length < 10 ){
            $('#mobile_res_error').html('Please Enter 10 Digit valid Mobile Number!');
            $('#mobile_1').focus();
            return false;
           }
            
        }
        $('#mobile_res_error').html(' ');
       
}


function validation_commercial(){
    var name2 = $("#name_2").val();
    var email2 = $("#email_2").val();
    var mobile2 = $("#mobile_2").val();

    if(name2=='')
        {
            $('#name_com_error').html('Please Enter Your Name');
            $("#name_2").focus();
            return false;
        }
        $('#name_com_error').html(' ');



    if(email2=='')
        {
            $('#email_com_error').html('Please Enter Email');
            $('#email_2').focus();
            return false;
        }else{
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = email2;
            if(reg.test(address) == false) {
                $('#email_com_error').html('Invalid Email Address');
                $('#email_2').focus();
                return false;
            }
        }
        $('#email_com_error').html(' ');

    if(mobile2=='')
        {
            $('#mobile_com_error').html('Please Enter Mobile Number');
            $('#mobile_2').focus();
            return false;

        }
        $('#mobile_com_error').html(' ');

    if(mobile2!='')
    {
        if(mobile2.length < 10 ){
        $('#mobile_com_error').html('Please Enter 10 Digit valid Mobile Number!');
        $('#mobile2').focus();
        return false;
        }
        
    }
    $('#mobile_com_error').html(' ');
   
}


</script>
@endsection