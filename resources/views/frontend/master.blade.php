<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>Park Place Power</title>
<meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />

    <!--Google Font -->
    <link rel="stylesheet" href="https://use.typekit.net/twy4kfo.css" />
    
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500&display=swap" rel="stylesheet" />

    <!-- favicon -->
    <link rel="shortcut icon" href="{{ asset('content/css/favicon.ico')}}" />

    <!--Bootstrap css-->
    <link rel="stylesheet" href="{{ asset('content/css/bootstrap.min.css')}}" />
    <link href="{{ asset('content/css/animate.css')}}" rel="stylesheet" /><!--Animate css-->
    <!--slick css-->
    <link href="{{ asset('content/css/slick.css')}}" rel="stylesheet" />
    <link href="{{ asset('content/css/slick-theme.css')}}" rel="stylesheet" />
    <!--slick css-->

    <!--custom css-->
    <link href="{{ asset('content/css/style-header-footer.css')}}" rel="stylesheet" />
    <link href="{{ asset('content/css/style.css')}}" rel="stylesheet" />
    
    <script
  src="https://code.jquery.com/jquery-3.5.1.min.js"
  integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
  crossorigin="anonymous"></script>
    
  <style>
  div#preloader { 
    z-index:99 !important;position:fixed;left:0;top:0px;width:100%;height:100%;overflow:hidden;background:#fff url(content/images/48x48.gif) no-repeat center center;background-size:40px;display:block;
    } 
  </style>
</head>

<body>
    <div id="preloader"></div>
    <header>
        <div class="hdr-strip wow fadeInUp">
            get your no-obligation quotation today. <a data-toggle="modal" data-target="#myModalQuote">start here ></a>
        </div>
        <div class="header-menu wow fadeInUp" data-wow-delay="0.2s">
            <div class="logo">
            <a href="{{ asset('') }}"> <img src="{{ asset('content/images/pp-logo.png')}}" class="img-responsive" /></a>
            </div>
            <div class="menu-right text-right">
                <ul class="list-inline hidden-sm hidden-xs">
                    <li><a href="{{ asset('') }}">Home</a></li>
                    <li><a href="{{ asset('commercial-energy') }}">commercial</a></li>
                    <li><a href="{{ asset('residential-energy') }}">residential</a></li>
                    <li><a href="{{ asset('energy-efficiency') }}">Energy Efficiency</a></li>
                    <li><a href="{{ asset('about-us') }}">About Us</a></li>
                    <li><a href="{{ asset('contact-us') }}">Contact</a></li>                        
                    <li><a href="{{ asset('suppliers') }}">Suppliers</a></li>
                </ul>
                <a class="burgr-menu-icon visible-sm visible-xs"><img src="{{ asset('content/images/burger-menu.png')}}" /></a>
            </div>
        </div>
        <div class="menu_block">
            <span class="menu_block_back_arr">
                <img src="{{ asset('content/images/arrow-pointing-to-left.png')}}" />
            </span>
            <div class="menu_block_container">
                <div class="menu_items_lt">
                    <ul class="list-unstyled">
                        <li class="visible-sm visible-xs"><a href="{{ asset('') }}">Home</a></li>
                        <li class="visible-sm visible-xs"><a href="{{ asset('commercial-energy') }}">commercial</a></li>
                        <li class="visible-sm visible-xs"><a href="{{ asset('residential-energy') }}">residential</a></li>
                        <li class="visible-sm visible-xs"><a href="{{ asset('energy-efficiency') }}">Energy Efficiency</a></li>
                        <li><a href="{{ asset('about-us') }}">About Us</a></li>
                        <li><a href="{{ asset('contact-us') }}">Contact</a></li>                        
                        <li><a href="{{ asset('suppliers') }}">Suppliers</a></li>
                    </ul>
                </div>
                <div class="menu_items_rt">
                    <h2>GET THE BEST ENERGY RATES  IN YOUR AREA</h2>
                    <p>Use our advanced Artificial Intelligence price tool to get the best possible rate estimate quotation for your area. No obligations.</p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-5 col-xs-12 pad-zero">
                            <a class="get-best-energy-rate-div-btn">Coming Soon!</a>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-7 col-xs-12" style="position:relative;">
                            <div class="get-best-energy-rate-div-poweredby">Powered by <span><img src="{{ asset('content/images/p-icon.png')}}" /> Intelligence</span></div>
                        </div>
                    </div>
                    <ul class="list-inline hdr-social-icons">
                        <li><a href="https://www.facebook.com/parkplacepower" target="_blank"><img src="{{ asset('content/images/fb-icon-white.png')}}" /></a></li>
                        <!-- <li><a><img src="{{ asset('content/images/tw-icon-white.png')}}" /></a></li> -->
                        <li><a href="https://www.linkedin.com/company/park-place-power/" target="_blank"><img src="{{ asset('content/images/linkdin-icon-white.png')}}" /></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

 

    @yield('content')



    <footer>
        <div class="footer-top wow fadeInUp" data-wow-delay="0.2s">
            <div class="footer-top-container">
                <h2>Sign up to our monthly Newsletter</h2>
                <p>Get latest news updates and trending news related to electricity rates and information.</p>
                <form>
                    <input type="email" id="email" name="email" placeholder="Email Address" />
                    <button type="button" class="btn-subscribe" onclick="return newsletter_form();">Subscribe</button>
                    <span id="email_error" style="color:#b12121;"></span>
                </form>
            </div>
        </div>
        <div class="footer-bottom wow fadeInUp" data-wow-delay="0.4s">
            <div class="footer-bottom-container">
                <div class="row footer-bottom-block1">
                    <div class="col-lg-5 col-md-5 col-sm-12 col-xs-12">
                        <img src="{{ asset('content/images/footer-logo.png')}}" />
                        <h6>Commercial Energy Brokerage<br />& Consulting Firm </h6>
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12 col-xs-12 pad-zero">
                        <div class="footer-bottom-block1-div1">
                            <ul class="list-unstyled">
                                <li>
                                    <span>2000 E. Lamar Blvd. Suite 600 </span>
                                    (Ballpark Way) Arlington, TX. 76006<br>
                                    Contact us : <a href="tel:18884077022">1-888-407-7022</a>
                                </li>
                                <li>
                                    <span>11111 Katy Fwy Suite 910</span>
                                    (Energy Corridor) Houston, TX. 77043<br>
                                    Contact us : <a href="tel:18884077022">1-888-407-7022</a>
                                </li>
                            </ul>
                        </div>
                        <div class="footer-bottom-block1-div2">
                            <ul class="list-unstyled">
                                <li><a href="{{ asset('') }}">Home</a></li>
                                <li><a href="{{ asset('about-us') }}">About Us</a></li>
                                <li><a href="{{ asset('commercial-energy') }}">Commercial</a></li>
                                <li><a href="{{ asset('residential-energy') }}">Residential</a></li>
                                <li><a href="{{ asset('energy-efficiency') }}">Energy Efficiency</a></li>
                                <!-- <li><a>Symbol of Service</a></li>
                                <li><a>Why Us?</a></li>
                                <li><a>Help</a></li>
                                <li><a>Services</a></li> -->
                                <li><a href="{{ asset('suppliers') }}">Suppliers</a></li>
                                <li><a href="{{ asset('contact-us') }}">Contact</a></li>
                                <!-- <li><a>Login</a></li> -->
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="row footer-bottom-block2">
                    <div class="col-lg-3 col-md-3 col-sm-3 hidden-xs pad-zero">
                        <p class="copyright">© 2020 Park Place Power Consulting, LLC</p>
                    </div>
                    <div class="visible-xs col-xs-12 pad-zero">
                        <ul class="list-inline">
                            <li class="visible-xs">
                                <a href="https://www.facebook.com/parkplacepower"><img src="{{ asset('content/images/fb-icon.png')}}" /></a>
                                <!-- <a><img src="{{ asset('content/images/tw-icon.png')}}" /></a> -->
                                <a href="https://www.linkedin.com/company/park-place-power/"><img src="{{ asset('content/images/linkdin-icon.png')}}" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12 pad-zero">
                        <ul class="list-inline text-right">                            
                            <li><a href="{{ asset('terms') }}">Terms</a></li>
                            <li><a href="{{ asset('disclaimer') }}">Disclaimer</a></li>
                            <li><a href="{{ asset('privacy') }}">Privacy</a></li>
                            <li class="hidden-xs">
                                <a href="https://www.facebook.com/parkplacepower" target="_blank"><img src="{{ asset('content/images/fb-icon.png')}}" /></a>
                                <!-- <a><img src="{{ asset('content/images/tw-icon.png')}}" /></a> -->
                                <a href="https://www.linkedin.com/company/park-place-power/" target="_blank"><img src="{{ asset('content/images/linkdin-icon.png')}}" /></a>
                            </li>
                        </ul>
                    </div>
                    <div class="visible-xs col-xs-12 pad-zero">
                        <p class="copyright">© 2020 Park Place Power Consulting, LLC</p>
                    </div>
                </div>
            </div>
        </div>     
    </footer>

    <!-- Modal get a qoute -->
  <div class="modal fade" id="myModalQuote" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-body">
        <button type="button" class="close" data-dismiss="modal">
            <img src="{{ asset('content/images/cross-icon.png')}}" />
        </button>
          <div class="modalQuoteBody">              
              <div class="col-50 bg-modalQuoteBody">

              </div>
              <div class="col-50">
                  <div class="modalrt-div">
                    <h4>Get your quote today</h4>
                    <!-- <form> -->
                    <div id="myform">
                        <div>
                            {!! Form::open(['url' => 'popup_post']) !!}
                        <input type="text" placeholder="Name*" id="name" name="name" class="inp-txt">
                        <span id="name_error" style="color:#b12121;"></span>
                        </div>
                        <div>
                        <input type="email" placeholder="Email Id*" id="email2" name="email" class="inp-txt">
                        <span id="email2_error" style="color:#b12121;"></span>
                        </div>
                        <div id="form11">
                        <input type="tel" placeholder="Contact Number* (541-754-3010)" id="mobile" name="mobile" class="inp-txt" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required/><span id="mobile_error" style="color:#b12121;" ></span>
                        </div>
                        <!-- <div>
                            <h5>I’m interested in -</h5>
                        </div> -->
                        <div>
                            <select name="area_of_interest" id="area_of_interest_3" class="area_of_interest_select" required />
                                <option value="">Area of Interest</option>
                                <option value="Commercial Energy">Commercial Energy</option>
                                <option value="Custom Pricing">Custom Pricing</option>
                                <option value="Aggregation Pool">Aggregation Pool</option>
                                <option value="Energy Efficiency Initiative">Energy Efficiency Initiative</option>
                                <option value="Complimentary Utility Audit">Complimentary Utility Audit</option>
                            </select>
                        </div>
                        <!-- div class="inp-radio">
                            <input type="radio" name="intrested" value="Commercial Energy"> Commercial Energy
                        </div>
                        <div class="inp-radio">
                            <input type="radio" name="intrested" value="Residential Energy"> Residential Energy
                        </div> -->
                        <button class="btn-get-in-touch" onclick="return popup_form();">submit</button></form>
                        </div>
                    <!-- </form> -->
                  </div>
              </div>
          </div>
        </div>
      </div>
      
    </div>
  </div>

    <script src="{{ asset('content/js/jquery.min.js')}}"></script><!--Jquery js-->
    <script src="{{ asset('content/js/bootstrap.min.js')}}"></script><!--Bootstrap js-->
    <script src="{{ asset('content/js/jquery-ui.min.js')}}"></script><!--Jquery UI js-->
    <script src="{{ asset('content/js/slick.min.js')}}"></script><!--Slick js-->
    <script src="{{ asset('content/js/wow.min.js')}}"></script><!--Wow js-->
    <script src="{{ asset('content/js/custom.js')}}"></script><!--Custom js-->

    <script>
    function newsletter_form(){
        
        var email = $("#email").val();
        if(email=='')
        {
            $('#email_error').html('Please Enter Email');
            $('#email').focus();
            return false;
        }else{
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = email;
            if(reg.test(address) == false) {
                $('#email_error').html('Invalid Email Address');
                $('#email').focus();
                return false;
            }
        }
        $('#loader').css('display','block');
        $('#email_error').html(null);
        var newsletter_url = "{{ asset('newsletter_post') }}";
        var formdata = {
            email:email,
        }
        $.ajax({
        url: newsletter_url,
        method: "post",
        data:formdata,
        headers: 
        {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {              // On Successful service call

        $('#loader').css('display','none');
        $('#email_error').html(data);
        }
        });
    }


    function popup_form(){
        
        var name = $("#name").val();
        var email = $("#email2").val();
        var mobile = $("#mobile").val();
        var intrested = $("#area_of_interest_3").val();
     //   alert(intrested);

       if(name=='')
        {
            // $('#name_error').html('Please Enter name');
            $("#name").attr("placeholder", "Please Enter Name").blur();
            $('#name').focus();
            return false;
        }
        // $('#name_error').html(null);
        if(email=='')
        {
            // $('#email2_error').html('Please Enter Email');
            $("#email2").attr("placeholder", "Please Enter Email").blur();
            $('#email2').focus();
            return false;
        }else{
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = email;
            if(reg.test(address) == false) {
                // $('#email2_error').html('Invalid Email Address');
                $("#email2").attr("placeholder", "Invalid Email Address").blur();
                $('#email2').focus();
                return false;
            }
        }

        if(mobile=='')
        {
            // $('#name_error').html('Please Enter name');
            $("#mobile").attr("placeholder", "Please Enter Mobile").blur();
            $('#mobile').focus();
            return false;
        }
        if(mobile!='')
        {
           if(mobile.length < 10 ){
            $("#mobile").attr("placeholder", "Please Enter 10 Digit valid Mobile Number!").blur();
            $('#mobile').val('');
            $('#mobile').focus();
            return false;
           }
            
        }

        $('#loader').css('display','block');
      
        var popup_url = "{{ asset('popup_post') }}";
        var formdata = {
            email:email, intrested:intrested, name:name, mobile:mobile
        }
        $.ajax({
        url: popup_url,
        method: "post",
        data:formdata,
        headers: 
        {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {              // On Successful service call

        $('#loader').css('display','none');
        $('#myModalQuote').modal('hide');
        alert('Thank You!');
        $("#name").val(null);
        $("#email2").val(null);
        $("#mobile").val(null);
        // $('input[name="intrested"]:checked').val(null);
       // $('input[name="intrested"]').prop('checked', false);
        $("#area_of_interest_3 option[value='']").attr('selected', true)
        //$('#email_error').html(data);
        }
        });
    }


    function power_audit(){
        var first_name = $("#first_name").val();
        var last_name = $("#last_name").val();
        var email_id = $("#email_id").val();
        var mobile_num = $("#mobile_num").val();
        var address = $("#address").val();
        var city = $("#city").val();
        var state = $("#state").val();
        var area_code = $("#area_code").val();
        // alert(email_id);
       if(first_name=='')
        {
            // $('#name_error').html('Please Enter name');
            $("#first_name").attr("placeholder", "Please Enter First Name").blur();
            $("#first_name").addClass('in');
            $('#first_name').focus();
            return false;
        }

       

        if(last_name=='')
        {
            // $('#name_error').html('Please Enter name');
            $("#last_name").attr("placeholder", "Please Enter Last Name").blur();
            $("#last_name").addClass('in');
            $('#last_name').focus();
            return false;
        }

        if(mobile_num=='')
        {
            // $('#name_error').html('Please Enter name');
            $("#mobile_num").attr("placeholder", "Please Enter Mobile Number").blur();
            $("#mobile_num").addClass('in');
            $('#mobile_num').focus();
            return false;
        }
        if(mobile_num!='')
        {
           if(mobile_num.length < 10 ){
            $("#mobile_num").attr("placeholder", "Please Enter 10 Digit valid Mobile Number!").blur();
            $("#mobile_num").val('');
            $("#mobile_num").addClass('in');
            $('#mobile_num').focus();
            return false;
           }
            
        }

        // $('#name_error').html(null);
        if(email_id=='')
        {
            // $('#email_id_error').html('Please Enter Email');
            $("#email_id").attr("placeholder", "Please Enter Email").blur();
            $("#email_id").addClass('in');
            $('#email_id').focus();
            return false;
        }else{
            var reg = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
            var address = email_id;
            if(reg.test(address) == false) {
                // $('#email_id_error').html('Invalid Email Address');
                $("#email_id").val(null);
                $("#email_id").attr("placeholder", "Invalid Email Address").blur();
                $("#email_id").addClass('in');
                $('#email_id').focus();
                return false;
            }
        }

        var power_audit_api = "{{ asset('power-audit-api') }}";
        var formdata = {
            first_name:first_name, 
            last_name:last_name, 
            email_id:email_id, 
            mobile_num:mobile_num,
            address:address,
            city:city,
            state:state,
            area_code:area_code
        }
        $.ajax({
        url: power_audit_api,
        method: "post",
        data:formdata,
        headers: 
        {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        success: function (data) {              // On Successful service call

        $('#loader').css('display','none');
        alert('Thank You!');

        // $("#first_name").val(null);
        // $("#last_name").val(null);
        // $("#mobile_num").val(null);
        // $("#email_id").val(null);
        // $("#address").val(null);
        // $("#city").val(null);
        // $("#state").val(null);
        // $("#area_code").val(null);

        window.location.href = '';
        }
        });
      
    }
    
    
    
    
    
    
    
    (function($, undefined) {

	  "use strict";

	  // When ready.
	  $(function() {
		
		var $form = $( "#form11" );
		var $input = $form.find( "input" );

		$input.on( "keyup", function( event ) {
		  
		  
		  // When user select text in the document, also abort.
		  var selection = window.getSelection().toString();
		  if ( selection !== '' ) {
			return;
		  }
		  
		  // When the arrow keys are pressed, abort.
		  if ( $.inArray( event.keyCode, [38,40,37,39] ) !== -1 ) {
			return;
		  }
		  
		  var $this = $(this);
		  var input = $this.val();
			  input = input.replace(/[\W\s\._\-]+/g, '');
			
			var split = 4;
			var chunk = [];

			for (var i = 0, len = input.length; i < len; i += split) {
			  split = ( i >= 4 && i <= 8 ) ? 4 : 3;
			  chunk.push( input.substr( i, split ) );
			}

			$this.val(function() {
			  return chunk.join("-").toUpperCase();
			});
		
		} );
		
		/**
		 * ==================================
		 * When Form Submitted
		 * ==================================
		 */
		$form.on( "submit", function( event ) {
		  
		  var $this = $( this );
		  var arr = $this.serializeArray();
		
		  for (var i = 0; i < arr.length; i++) {
			  arr[i].value = arr[i].value.replace(/[($)\s\._\-]+/g, ''); // Sanitize the values.
		  };
		  
		  console.log( arr );
		  
		  event.preventDefault();
		});
		
	  });
	})(jQuery)

    
    
    
    
    
    
    </script>
    
    
    <!-- Start of HubSpot Embed Code -->
    <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9034768.js"></script>
    <!-- End of HubSpot Embed Code -->
    
    
    
</body>
</html>