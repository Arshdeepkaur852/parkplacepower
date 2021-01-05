@extends('frontend/master')
@section('content')

<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>


<style>
	.contact-section2-lt-form {
		padding-right: 0 !important;
	}

	a {
		text-align: center;
	}

	a:hover {
		color: #fff;
		text-decoration: none;
		cursor: pointer;
	}

	.header-menu.wow.fadeInUp {
		background-color: #16275b;
	}

	.col-lg-12.col-md-12.col-sm-12.col-xs-12.contact-section2-lt-form {
		margin-top: 8%;
	}

	.div_center {
		max-width: 450px;
		margin: 20px auto;
	}

	label.btn.btn-secondary {
		font-size: 16px;
	}

	label.btn.btn-secondary>input {
		display: inline;
		width: 20px;
	}

	input, textarea, select {
		margin-bottom: 25px !important;
	}

	.label_btn {
		display: flex;
		justify-content: space-evenly;
	}
	.btn-send1 {
        background-color: #fff !important;
        color: #0045b6 !important;
        border:1px solid #fff;
        border-bottom: 1px solid #0045b6 !important;
        border-radius: 0px;
    }
    .btn-send11 {
        display: inline-block !important;
        width: 49% !important;
        
    }
    .price-head{font-size:38px !important;}
    
    #resi{display:none;}
    
    
    .commercial-section2-rt-innerdiv .blk-div {
    width: 350px;
    margin: auto;
    background-color: #fff;
    border-radius: 10px;
    /*padding-top: 30px;*/
    padding-bottom: 0;
    text-align: center;
}
.commercial-section2-rt-innerdiv .blk-div .btn-click-here {
    background-color: #0045b6;
    padding: 10px 10px;
    color: #fff !important;
    display: block;
    border-bottom-left-radius: 10px;
    border-bottom-right-radius: 10px;
    font-family: 'Futura Medium';
    letter-spacing: 1.5px;
    font-size: 14px;
}

.commercial-section2-rt-innerdiv{left:-10px;}

.blk-div.wow.animated {
    box-shadow: 0px 17px 28px #e1e1e1;
}
    
.contact-section2-container {
    padding-top: 70px;
    border-bottom: 1px solid #c9c9c9;
    padding-bottom:50px !important;
}
.bot-pad {
    padding-bottom: 250px;
}
@media(max-width:1024px) and (min-width:992px){
.buttu{
padding: 19px 10px !important;
}}
.cost-h3{
    color:grey !important;
    font-family:"Helvetica Neue", Helvetica, Arial, sans-serif";
    font-weight:500;
    
}
@media(max-width:535px){
.buttu{
padding: 19px 10px !important;
}
}

@media(max-width:768px){
.commercial-section2-rt-innerdiv {
    left: 0px;
}
.contact-section2-container {
    padding-top: 70px;
    border-bottom: 1px solid #c9c9c9;
    padding-bottom:0px !important;
}
.bot-pad {
    padding-bottom: 0px;
}
} 
    
    .creditscore-block {
        width: 108%;
        height: 200px;
        justify-content: left !important;
        align-items: start !important;
        text-align:left !important;
        
    }
    .creditscore-block {
    background-color: #0045b6 !important;
    border:0 !important ;
    }
    
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
    }
    .contact-section2-container h4{
        color:#0045B6;
        opacity:1 !important;
        text-align:center;
    }
    
    .creditscore-block h3{margin-top:-5px !important;font-weight: bold;
    font-size: 1.85em;}
    
    .line{border-bottom:1px solid #fff !important;}
    @media (max-width: 376px){
    .buttu {
    padding: 10px 10px !important;

    .price-head{font-size:30px !important;}
    }
    
     @media only screen and (max-width: 361px){.creditscore-block h3{
    font-size: 1.7em;}}
    
    @media only screen and (max-width: 321px){.creditscore-block h3{
    font-size: 1.4em;} .buttu {
    padding: 19.5px 10px !important;
}} 
    
    @media (min-width: 1800px){.creditscore-block h3{margin-top:-10px !important;}
    
    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
       
</style>
<div class="body contact-page" style="background-color: #14214C;">
	<section>
		<div class="contact-section2">
			<div class="contact-section2-container">
				<!-- <h2>Here to help</h2>
				<h4>Your tailored energy solution starts when you fill out this short form.</h4>
				<ul class="nav nav-pills">
					<li class="active"><a data-toggle="pill" href="#residential-energy-requirement">Residential energy requirements</a></li>
                        <li><a data-toggle="pill" href="#commercial-energy-requirement">Commercial energy requirements</a></li>
				</ul> -->
				<div class="tab-content">
					<div id="commercial-energy-requirement" class="tab-pane fade in active">
						<div class="row">
							<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 contact-section2-lt-form">
								<h3 class="div_center" id="text_head" style="text-align: center; color:#0045b6; text-transform:uppercase;">Looking for electricity rates?</h3>
								<div id="no" class="div_center">
									{!! Form::open(['url' => '']) !!}
									<input type="hidden" name="form_type" value="Commercial energy requirements">
									<div class="label_btn">
										<label class="btn btn-secondary">
											<input type="radio" name="options" id="option1" autocomplete="off" value="commercial"> Commercial
										</label><label class="btn btn-secondary">
											<input type="radio" name="options" id="option2" autocomplete="off" value="residential"> Residential
										</label>
									</div>
									
									<div id="resi" class="bot-pad">
									    
                                    <div class="tab-content">
                                            <div id="goodcreditscore" class="tab-pane fade in active">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="commercial-section2-rt-innerdiv">
                                            <div class="blk-div wow" data-wow-delay="0.4s">
                                                <h4 style"color:#0045B6 !important; font-size:20px;">Pre-Paid</h4>
                                        <div style="margin-top:18px; font-size:16px"; >
                                        <a href="https://www.acaciaenergy.com/enroll/?lsid=72883&agentid=20087&bypass=8556136374" target="_blank"> Acacia</a></div>
                                        <div style="margin-top:10px; margin-bottom:51.7px;font-size:16px";" > <a href="https://account.paylesspower.com/enroll/227171" target="_blank">  Payless</a></div>
                                        <a class="btn-click-here buttu" style="font-size:12px;">
                                                     No minimum credit
                                                </a> 
                                            </div>
                                        </div> 
                                        </div>
                                        
                                        
                                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                                <div class="commercial-section2-rt-innerdiv">
                                            <div class="blk-div wow" data-wow-delay="0.4s">
                                                <h4 style"color:#0045B6 !important; font-size:20px;">Post-Paid</h4>
                                        <div style="margin-top:18px;font-size:16px";" >
                                        <a href="https://www.pulsepowertexas.com/enrollment?&promocode=PPPOWER" target="_blank"> Pulse Power </a></div>
                                        <div style="margin-top:10px; margin-bottom:10px;font-size:16px";" > <a href="https://www.frontierutilities.com/ParkPlacePower" target="_blank">  Frontier</a></div>
                                        <div style="margin-top:10px; margin-bottom:20px;font-size:16px";"> <a href="https://signup.chariotenergy.com/Home/?Promocode=PPPOWER" target="_blank">  Chariot</a></div>
                                        <a class="btn-click-here" style="font-size:12px">
                                                     Minimum credit score 600
                                                </a> 
                                            </div>
                                        </div> 
                                        </div>
                                                            
                                                        
                                                       <!-- <div class="creditscore-block">
                                                            <div>
                                                                
                                                              <h3 class="line">Pre-Paid</h3>
                                                              <div style="margin-top:18px;" >
                                                              <a href="https://www.acaciaenergy.com/enroll/?lsid=72883&agentid=20087&bypass=8556136374" target="_blank"> Acacia</a></div>
                                                             <div style="margin-top:18px;" > <a href="https://account.paylesspower.com/enroll/227171" target="_blank">  Payless</a></div>
                                                            </div>
                                                        </div>-->
                                                        <!--<center><b style="position: relative;top: -8px;"> No minimum credit</b></center>-->
                                                 <!--   </div>-->
                                                   <!-- <div class="col-lg-12 col-md-6 col-sm-6 col-xs-6">
                                                        <div class="creditscore-block">
                                                            <div>
                                                               
                                                              <h3 style="border-bottom:1px solid #fff;">Post-Paid</h3>
                                                              <div style="margin-top:18px;">
                                                              <a href="https://www.pulsepowertexas.com/enrollment?&promocode=PPPOWER" target="_blank"> Pulse Power</a></div>
                                                             <div style="margin-top:18px;"> <a href="https://www.frontierutilities.com/ParkPlacePower" target="_blank">  Frontier</a></div>
                                                             <div style="margin-top:18px;"> <a href="https://signup.chariotenergy.com/Home/?Promocode=PPPOWER" target="_blank">  Chariot</a></div>
                                                            </div>
                                                            
                                                        </div>
                                                        <center><b style="position: relative;top: -8px;">Minimum credit 600 minutes</b></center>
                                                    </div>-->
                                                    
                                                </div>
                                            </div>
                                            
                                        </div>
									
									
									
									<!--<center><b>Post Paid plans start at minimum 600-650 min</b></center>-->
									</div>

									<input type="number" id="zip_code" name="zip" placeholder="Your Zip Code*" />

									<span id="city" style="color:#b12121;"></span>


									<select name="consumption_name" id="consumption">
										<option value="blank_cons">Select Your Consumption</option>
										<option value="1m">100,000,000 < KWH Annually</option>
										<option value="900k">800,000 – 999,999 KWH Annually</option>
										<option value="700k">500,000 – 799,999 KWH Annually</option>
										<option value="500k">300,000 – 499,999 KWH Annually</option>
										<option value="300k">100,000 – 299,999 KWH Annually</option>
										<option value="100k"> > 99, 9999 KWH Annually</option>
									</select>


									<button style="background-color: grey;" disabled type="button" id="btn_dis" class="btn-send">Next</button>
									</form>
								</div>
								<div id="2nd" class="div_center">
									{!! Form::open(['url' => '']) !!}
									

									<h3 id="price" style="text-align: center; color:#0045b6; text-transform:uppercase;"></h3>
									<h3 id="price11" style="text-align: center; color:#0045b6; text-transform:uppercase;"></h3>
									
							<!--	<input type="text" name="consum_price">	</input>--><h3 id="price1" class="price-head" style="text-align: center; color:#0045b6; text-transform:uppercase; margin-top:36px; margin-bottom:36px;"></h3>
							<center><h4 class="cost-h3" style="font-size:13px !important;margin-bottom:36px;">*Cost may vary as per the start date</h4></center>
							
									<button type="button" id="2ndbtn" class="btn-send" style="border-radius: 0px;">Next</button>
									<center><button type="button" id="3ndbtn" class="btn-send btn-send1" style="margin-top:15px; text-align:center;width:10%;  padding:11px 0px !important;">Back</button></center>
								
									</form>
								</div>
								<div id="subm" class="div_center">
									{!! Form::open(['url' => 'pricing']) !!}
									<div id="formdiv">
										<input type="text" name="name_form" placeholder="Enter Your Name*" />
										<input type="hidden" name="consumption_form">

										<input type="hidden" name="type_form">
                                        <div id="form11">
										<input type="tel" name="contact_form" placeholder="Enter Your Contact* (541-754-3010)" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" maxlength="12" required />
										</div>
										<input type="email" name="email_form" placeholder="Enter Your Email*" />
										<textarea name="address_form" placeholder="Enter Your Address*"></textarea>
										<input type="number" name="zip_form" placeholder="Enter Your Zip*" />
										
										<input type="text" name="price_form" id="form_price" hidden />
										
										<input type="text" name="price_zip" id="form_price_zip" hidden />
										
										
									</div>
									<button type="button" id="4ndbtn" class="btn-send btn-send11" style="margin-top:10px; background-color:transparent; color:#0045B6;">Back</button>
									<button type="submit" class="btn-send btn-send11">Submit</button>
									
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</div>

<script>
	cities = [{
			"ZIP_CODE": "77001",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77002",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77003",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77004",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77005",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77006",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77007",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77008",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77009",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77010",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77011",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77012",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77013",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77014",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77015",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77016",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77017",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77018",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77019",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77020",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77021",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77022",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77023",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77024",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77025",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77026",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77027",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77028",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77029",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77030",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77031",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77032",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77033",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77034",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77035",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77036",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77037",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77038",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77039",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77040",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77041",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77042",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77043",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77044",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77045",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77046",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77047",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77048",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77049",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77050",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77051",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77052",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77053",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77054",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77055",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77056",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77057",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77058",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77059",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77060",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77061",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77062",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77063",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77064",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77065",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77066",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77067",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77068",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77069",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77070",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77071",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77072",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77073",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77074",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77075",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77076",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77077",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77078",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77079",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77080",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77081",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77082",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77083",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77084",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77085",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77086",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77087",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77088",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77089",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77090",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77091",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77092",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77093",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77094",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77095",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77096",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77097",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77098",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77099",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77201",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77202",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77203",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77204",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77205",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77206",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77207",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77208",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77209",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77210",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77212",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77213",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77215",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77216",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77217",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77218",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77219",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77220",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77221",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77222",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77223",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77224",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77225",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77226",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77227",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77228",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77229",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77230",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77231",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77233",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77234",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77235",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77236",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77237",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77238",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77240",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77241",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77242",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77243",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77244",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77245",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77248",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77249",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77250",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77251",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77252",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77253",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77254",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77255",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77256",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77257",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77258",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77259",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77261",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77262",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77263",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77265",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77266",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77267",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77268",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77269",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77270",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77271",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77272",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77273",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77274",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77275",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77277",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77279",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77280",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77281",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77282",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77284",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77287",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77288",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77289",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77290",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77291",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77292",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77293",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77297",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77298",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77299",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77301",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77302",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77303",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77304",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77305",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77306",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77315",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77316",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77318",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77325",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77333",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77336",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77337",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77338",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77339",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77345",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77346",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77347",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77353",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77354",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77355",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77356",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77357",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77362",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77365",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77372",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77373",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77375",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77377",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77378",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77379",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77380",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77381",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77382",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77383",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77384",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77385",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77386",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77387",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77388",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77389",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77391",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77393",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77396",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77401",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77402",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77406",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77410",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77411",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77413",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77417",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77422",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77429",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77430",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77431",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77433",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77441",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77444",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77447",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77449",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77450",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77451",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77459",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77461",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77462",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77463",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77464",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77469",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77471",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77474",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77476",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77477",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77478",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77479",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77480",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77481",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77486",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77487",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77489",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77491",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77492",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77493",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77494",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77496",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77497",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77501",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77502",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77503",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77504",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77505",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77506",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77507",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77508",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77510",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77511",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77512",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77514",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77515",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77516",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77517",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77518",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77520",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77521",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77522",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77530",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77531",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77532",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77534",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77535",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77536",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77539",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77541",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77542",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77545",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77546",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77547",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77549",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77550",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77551",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77552",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77553",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77554",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77555",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77560",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77562",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77563",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77565",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77566",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77568",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77571",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77572",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77573",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77574",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77577",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77578",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77580",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77581",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77583",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77584",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77586",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77587",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77588",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77590",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77591",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77592",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77597",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77598",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77617",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77623",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77650",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77661",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "77665",
			"ZONE": "HOUSTON"
		},
		{
			"ZIP_CODE": "75001",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75002",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75006",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75007",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75008",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75009",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75010",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75011",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75013",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75014",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75015",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75016",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75017",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75019",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75022",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75023",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75024",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75025",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75026",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75027",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75028",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75029",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75030",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75032",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75034",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75035",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75037",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75038",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75039",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75040",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75041",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75042",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75043",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75044",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75045",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75046",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75047",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75048",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75049",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75050",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75051",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75052",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75053",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75054",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75056",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75057",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75058",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75060",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75061",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75062",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75063",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75065",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75067",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75068",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75074",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75075",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75076",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75077",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75078",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75080",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75081",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75082",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75083",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75084",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75085",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75086",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75087",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75088",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75089",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75093",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75094",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75097",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75098",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75099",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75101",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75102",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75103",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75104",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75105",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75106",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75109",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75110",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75114",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75115",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75116",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75117",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75118",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75119",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75120",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75121",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75123",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75124",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75125",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75126",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75127",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75132",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75134",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75135",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75137",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75138",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75140",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75141",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75142",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75143",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75144",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75146",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75147",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75148",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75149",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75150",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75151",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75152",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75153",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75154",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75155",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75156",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75157",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75158",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75159",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75160",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75161",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75163",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75164",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75165",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75166",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75167",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75168",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75169",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75172",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75173",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75180",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75181",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75182",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75185",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75187",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75189",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75201",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75202",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75203",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75204",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75205",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75206",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75207",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75208",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75209",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75210",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75211",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75212",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75214",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75215",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75216",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75217",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75218",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75219",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75220",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75221",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75222",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75223",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75224",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75225",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75226",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75227",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75228",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75229",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75230",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75231",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75232",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75233",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75234",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75235",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75236",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75237",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75238",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75239",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75240",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75241",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75242",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75243",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75244",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75245",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75246",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75247",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75248",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75249",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75250",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75251",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75252",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75253",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75254",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75258",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75260",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75261",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75262",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75263",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75264",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75265",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75266",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75267",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75270",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75275",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75277",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75283",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75284",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75285",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75286",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75287",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75294",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75295",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75301",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75303",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75310",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75312",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75313",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75315",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75320",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75323",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75326",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75336",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75339",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75342",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75346",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75350",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75353",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75354",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75355",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75356",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75357",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75359",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75360",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75363",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75364",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75367",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75368",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75370",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75371",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75372",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75373",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75374",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75376",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75378",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75379",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75380",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75381",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75382",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75386",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75387",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75388",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75389",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75390",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75391",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75392",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75393",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75394",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75395",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75396",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75397",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75398",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75401",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75402",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75403",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75404",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75407",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75409",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75410",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75411",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75412",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75413",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75414",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75415",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75416",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75417",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75420",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75421",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75422",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75423",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75424",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75425",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75426",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75431",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75432",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75433",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75434",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75435",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75436",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75437",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75438",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75439",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75440",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75441",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75442",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75443",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75447",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75448",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75449",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75450",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75452",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75453",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75454",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75455",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75456",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75457",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75458",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75459",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75468",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75469",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75470",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75471",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75472",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75473",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75474",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75475",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75476",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75477",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75478",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75479",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75480",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75485",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75486",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75487",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75488",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75489",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75490",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75491",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75492",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75493",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75495",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75496",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75550",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75554",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75558",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75652",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75653",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75654",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75658",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75666",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75667",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75680",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75681",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75682",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75684",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75687",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75689",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75691",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75701",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75702",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75703",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75704",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75705",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75706",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75707",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75708",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75709",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75710",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75711",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75712",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75713",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75750",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75751",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75752",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75754",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75756",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75757",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75758",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75759",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75760",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75762",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75763",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75764",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75766",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75770",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75771",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75772",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75778",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75779",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75780",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75782",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75784",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75785",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75788",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75789",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75790",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75791",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75792",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75798",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75799",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75801",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75802",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75803",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75831",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75832",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75833",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75835",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75838",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75839",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75840",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75844",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75846",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75847",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75848",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75849",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75850",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75851",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75852",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75853",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75855",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75858",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75859",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75860",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75861",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75880",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75882",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75884",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75886",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75901",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75902",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75903",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75904",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75915",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75925",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75937",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75941",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75943",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75944",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75946",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75949",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75958",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75961",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75962",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75963",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75964",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75965",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75969",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75976",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75978",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "75980",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76001",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76002",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76003",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76004",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76005",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76006",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76007",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76008",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76009",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76010",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76011",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76012",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76013",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76014",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76015",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76016",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76017",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76018",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76019",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76020",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76021",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76022",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76023",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76028",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76031",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76033",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76034",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76035",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76036",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76039",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76040",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76041",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76043",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76044",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76048",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76049",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76050",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76051",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76052",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76053",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76054",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76055",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76058",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76059",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76060",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76061",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76063",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76064",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76065",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76066",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76067",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76068",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76070",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76071",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76073",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76077",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76078",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76082",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76084",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76085",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76086",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76087",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76088",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76092",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76093",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76094",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76095",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76096",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76097",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76098",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76099",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76101",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76102",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76103",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76104",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76105",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76106",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76107",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76108",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76109",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76110",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76111",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76112",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76113",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76114",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76115",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76116",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76117",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76118",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76119",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76120",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76121",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76122",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76123",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76124",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76126",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76127",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76129",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76130",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76131",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76132",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76133",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76134",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76135",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76136",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76137",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76140",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76147",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76148",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76150",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76155",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76161",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76162",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76163",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76164",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76177",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76178",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76179",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76180",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76181",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76182",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76185",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76191",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76192",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76193",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76195",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76196",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76197",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76198",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76199",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76201",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76202",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76203",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76204",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76205",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76206",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76207",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76208",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76209",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76210",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76225",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76226",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76227",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76230",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76233",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76234",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76238",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76239",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76244",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76245",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76246",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76247",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76248",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76249",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76250",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76251",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76252",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76253",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76255",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76258",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76259",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76261",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76262",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76263",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76264",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76265",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76266",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76267",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76268",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76270",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76271",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76272",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76299",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76401",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76402",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76426",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76427",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76431",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76432",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76433",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76436",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76439",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76442",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76444",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76446",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76449",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76452",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76453",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76455",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76457",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76458",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76459",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76461",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76462",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76463",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76465",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76467",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76468",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76472",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76474",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76475",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76476",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76484",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76485",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76486",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76487",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76490",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76501",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76502",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76503",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76504",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76505",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76508",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76511",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76513",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76522",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76524",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76525",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76526",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76528",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76531",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76533",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76534",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76538",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76539",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76540",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76541",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76542",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76543",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76544",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76545",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76546",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76547",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76548",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76549",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76550",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76552",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76554",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76557",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76558",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76559",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76561",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76564",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76565",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76566",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76569",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76570",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76571",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76579",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76596",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76597",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76598",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76599",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76621",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76622",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76623",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76624",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76626",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76627",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76628",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76629",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76630",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76631",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76632",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76633",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76634",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76635",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76636",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76637",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76638",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76639",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76640",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76641",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76642",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76643",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76644",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76645",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76648",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76649",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76650",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76651",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76652",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76653",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76654",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76655",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76656",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76657",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76660",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76661",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76664",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76665",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76666",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76667",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76670",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76671",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76673",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76675",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76676",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76677",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76678",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76679",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76680",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76681",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76682",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76684",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76685",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76686",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76687",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76689",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76690",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76691",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76692",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76693",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76701",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76702",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76703",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76704",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76705",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76706",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76707",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76708",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76710",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76711",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76712",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76714",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76715",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76716",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76795",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76797",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76798",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76799",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76801",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76802",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76803",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76804",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76823",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76824",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76827",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76844",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76853",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76857",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76864",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76870",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76880",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "76890",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77363",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77801",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77802",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77803",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77805",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77806",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77807",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77808",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77830",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77831",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77837",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77840",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77841",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77842",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77843",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77844",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77845",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77850",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77855",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77856",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77859",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77861",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77862",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77864",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77865",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77866",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77867",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77868",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77869",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77870",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77871",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77872",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77873",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77875",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77876",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77881",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "77882",
			"ZONE": "NORTH"
		},
		{
			"ZIP_CODE": "73301",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "73344",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76518",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76519",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76520",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76523",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76527",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76530",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76537",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76555",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76556",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76567",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76573",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76574",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76577",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76578",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76820",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76825",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76831",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76832",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76836",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76842",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76849",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76852",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76854",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76856",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76858",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76867",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76869",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76871",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76872",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76874",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76877",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76885",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76887",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77404",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77412",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77414",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77415",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77418",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77419",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77420",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77423",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77426",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77428",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77432",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77434",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77435",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77436",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77437",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77440",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77442",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77443",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77445",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77446",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77448",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77452",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77453",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77454",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77455",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77456",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77457",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77458",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77460",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77465",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77466",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77467",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77468",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77470",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77473",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77475",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77482",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77483",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77484",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77485",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77488",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77833",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77834",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77835",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77836",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77838",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77839",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77852",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77853",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77857",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77863",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77878",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77879",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77880",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77901",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77902",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77903",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77904",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77905",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77950",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77951",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77954",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77957",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77960",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77961",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77962",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77963",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77964",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77967",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77968",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77969",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77970",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77971",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77972",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77973",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77974",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77975",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77976",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77977",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77978",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77979",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77982",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77983",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77984",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77985",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77986",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77987",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77988",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77989",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77990",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77991",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77993",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77994",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "77995",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78001",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78002",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78003",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78004",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78005",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78006",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78007",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78008",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78009",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78010",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78011",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78012",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78013",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78014",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78015",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78016",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78017",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78019",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78021",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78022",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78023",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78024",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78025",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78026",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78027",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78028",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78029",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78039",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78040",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78041",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78042",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78043",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78044",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78045",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78046",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78049",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78050",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78052",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78053",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78054",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78055",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78056",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78057",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78058",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78059",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78060",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78061",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78062",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78063",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78064",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78065",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78066",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78067",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78069",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78070",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78071",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78072",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78073",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78074",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78075",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78076",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78101",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78102",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78104",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78107",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78108",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78109",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78111",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78112",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78113",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78114",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78115",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78116",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78117",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78118",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78119",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78121",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78122",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78123",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78124",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78125",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78130",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78131",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78132",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78133",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78135",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78140",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78141",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78142",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78143",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78144",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78145",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78146",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78147",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78148",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78150",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78151",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78152",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78154",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78155",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78156",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78159",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78160",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78161",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78162",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78163",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78164",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78201",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78202",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78203",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78204",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78205",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78206",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78207",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78208",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78209",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78210",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78211",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78212",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78213",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78214",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78215",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78216",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78217",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78218",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78219",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78220",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78221",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78222",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78223",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78224",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78225",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78226",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78227",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78228",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78229",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78230",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78231",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78232",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78233",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78234",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78235",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78236",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78237",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78238",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78239",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78240",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78241",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78242",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78243",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78244",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78245",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78246",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78247",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78248",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78249",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78250",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78251",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78252",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78253",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78254",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78255",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78256",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78257",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78258",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78259",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78260",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78261",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78262",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78263",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78264",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78265",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78266",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78268",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78269",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78270",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78275",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78278",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78279",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78280",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78283",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78284",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78285",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78286",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78287",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78288",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78289",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78291",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78292",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78293",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78294",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78295",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78296",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78297",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78298",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78299",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78330",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78332",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78333",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78335",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78336",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78338",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78339",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78340",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78341",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78342",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78343",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78344",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78347",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78349",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78350",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78351",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78352",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78353",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78355",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78357",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78358",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78359",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78360",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78361",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78362",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78363",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78364",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78368",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78369",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78370",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78371",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78372",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78373",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78374",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78375",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78376",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78377",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78379",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78380",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78381",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78382",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78383",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78384",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78385",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78387",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78389",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78390",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78391",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78393",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78401",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78402",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78403",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78404",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78405",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78406",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78407",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78408",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78409",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78410",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78411",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78412",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78413",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78414",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78415",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78416",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78417",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78418",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78419",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78426",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78427",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78460",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78461",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78463",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78465",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78466",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78467",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78468",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78469",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78470",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78471",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78472",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78473",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78474",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78475",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78476",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78477",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78478",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78480",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78501",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78502",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78503",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78504",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78505",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78516",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78520",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78521",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78522",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78523",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78526",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78535",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78536",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78537",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78538",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78539",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78540",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78543",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78545",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78547",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78548",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78549",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78550",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78551",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78552",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78553",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78557",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78558",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78559",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78560",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78561",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78562",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78563",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78564",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78565",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78566",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78567",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78568",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78569",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78570",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78572",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78573",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78574",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78575",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78576",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78577",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78578",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78579",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78580",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78582",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78583",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78584",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78585",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78586",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78588",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78589",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78590",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78591",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78592",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78593",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78594",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78595",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78596",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78597",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78598",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78599",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78602",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78603",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78604",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78605",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78606",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78607",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78608",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78609",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78610",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78611",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78612",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78613",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78614",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78615",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78616",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78617",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78618",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78619",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78620",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78621",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78622",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78623",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78624",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78626",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78627",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78628",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78629",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78630",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78631",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78632",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78634",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78635",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78636",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78638",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78639",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78640",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78641",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78642",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78643",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78644",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78645",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78646",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78648",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78650",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78651",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78652",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78653",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78654",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78655",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78656",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78657",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78658",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78659",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78660",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78661",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78662",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78663",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78664",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78665",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78666",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78667",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78669",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78670",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78671",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78672",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78673",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78674",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78675",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78676",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78677",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78680",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78681",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78682",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78683",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78691",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78701",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78702",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78703",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78704",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78705",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78708",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78709",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78710",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78711",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78712",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78713",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78714",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78715",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78716",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78717",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78718",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78719",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78720",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78721",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78722",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78723",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78724",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78725",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78726",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78727",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78728",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78729",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78730",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78731",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78732",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78733",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78734",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78735",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78736",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78737",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78738",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78739",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78741",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78742",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78744",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78745",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78746",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78747",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78748",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78749",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78750",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78751",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78752",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78753",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78754",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78755",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78756",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78757",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78758",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78759",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78760",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78761",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78762",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78763",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78764",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78765",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78766",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78767",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78768",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78769",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78771",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78772",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78773",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78774",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78778",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78779",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78780",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78781",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78782",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78783",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78785",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78786",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78787",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78788",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78789",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78799",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78801",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78802",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78827",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78829",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78830",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78832",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78833",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78834",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78836",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78837",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78838",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78839",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78840",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78841",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78842",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78843",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78847",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78850",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78852",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78853",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78860",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78861",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78870",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78871",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78872",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78873",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78877",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78879",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78881",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78883",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78884",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78885",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78886",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78931",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78932",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78933",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78934",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78935",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78938",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78940",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78941",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78942",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78943",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78944",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78945",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78946",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78947",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78948",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78949",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78950",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78951",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78952",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78953",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78954",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78956",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78957",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78959",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78960",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78961",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78962",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "78963",
			"ZONE": "SOUTH"
		},
		{
			"ZIP_CODE": "76228",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76301",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76302",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76303",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76304",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76305",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76306",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76307",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76308",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76309",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76310",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76311",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76351",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76352",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76354",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76357",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76360",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76363",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76364",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76365",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76366",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76367",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76369",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76370",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76371",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76372",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76373",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76374",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76377",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76379",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76380",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76384",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76385",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76388",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76389",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76424",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76429",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76430",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76435",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76437",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76443",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76445",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76448",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76450",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76454",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76460",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76464",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76466",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76469",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76470",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76471",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76481",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76483",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76491",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76821",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76828",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76834",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76837",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76841",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76845",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76848",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76855",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76859",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76861",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76862",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76865",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76866",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76873",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76875",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76878",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76882",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76883",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76884",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76886",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76888",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76901",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76902",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76903",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76904",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76905",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76906",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76908",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76909",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76930",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76932",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76933",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76934",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76935",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76936",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76937",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76939",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76940",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76941",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76943",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76945",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76949",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76950",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76951",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76953",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76955",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76957",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "76958",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "78828",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "78851",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "78880",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79201",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79220",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79222",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79223",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79224",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79225",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79227",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79229",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79232",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79233",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79234",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79236",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79238",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79239",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79243",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79244",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79245",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79247",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79248",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79252",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79255",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79256",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79257",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79259",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79261",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79322",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79331",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79343",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79351",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79357",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79370",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79377",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79381",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79501",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79502",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79503",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79504",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79505",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79506",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79508",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79510",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79511",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79512",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79516",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79517",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79518",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79519",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79520",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79521",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79525",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79526",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79527",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79528",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79529",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79530",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79532",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79533",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79534",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79535",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79536",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79537",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79538",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79539",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79540",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79541",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79543",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79544",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79545",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79546",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79547",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79548",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79549",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79550",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79553",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79556",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79560",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79561",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79562",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79563",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79565",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79566",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79567",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79601",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79602",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79603",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79604",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79605",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79606",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79607",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79608",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79697",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79698",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79699",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79701",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79702",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79703",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79704",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79705",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79706",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79707",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79708",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79710",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79711",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79712",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79713",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79714",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79718",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79719",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79720",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79721",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79730",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79731",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79733",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79734",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79735",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79738",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79739",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79740",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79741",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79742",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79743",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79744",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79745",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79748",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79749",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79752",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79754",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79755",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79756",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79758",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79759",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79760",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79761",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79762",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79763",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79764",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79765",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79766",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79768",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79769",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79770",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79772",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79776",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79777",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79778",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79779",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79780",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79781",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79782",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79783",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79785",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79786",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79788",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79789",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79830",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79831",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79832",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79834",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79837",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79839",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79842",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79843",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79845",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79846",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79847",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79848",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79850",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79851",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79852",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79854",
			"ZONE": "WEST"
		},
		{
			"ZIP_CODE": "79855",
			"ZONE": "WEST"
		}
	];

	consumption_500k_1000k = [{
			"ZONE": "HOUSTON",
			"PRICE": 0.0336+0.0003,
			"PRICE11":0.0336+0.0007
		},
		{
			"ZONE": "NORTH",
			"PRICE": 0.0329+0.0003,
			"PRICE11":0.0329+0.0007
		},
		{
			"ZONE": "SOUTH",
			"PRICE": 0.0320+0.0003,
			"PRICE11":0.0320+0.0007
		},
		{
			"ZONE": "WEST",
			"PRICE": 0.0294+0.0003,
			"PRICE11":0.0294+0.0007
		}
	];
	
		consumption_700k_900k = [{
			"ZONE": "HOUSTON",
			"PRICE": 0.0334+0.0003,
			"PRICE11":0.0334+0.0007
		},
		{
			"ZONE": "NORTH",
			"PRICE": 0.0322+0.0003,
			"PRICE11":0.0322+0.0007
		},
		{
			"ZONE": "SOUTH",
			"PRICE": 0.0315+0.0003,
			"PRICE11":0.0315+0.0007
		},
		{
			"ZONE": "WEST",
			"PRICE": 0.0288+0.0003,
			"PRICE11":0.0288+0.0007
		}
	];
	
		consumption_500k_700k = [{
			"ZONE": "HOUSTON",
			"PRICE": 0.0325+0.0003,
			"PRICE11":0.0325+0.0007
		},
		{
			"ZONE": "NORTH",
			"PRICE": 0.0325+0.0003,
			"PRICE11":0.0325+0.0007
		},
		{
			"ZONE": "SOUTH",
			"PRICE": 0.0319+0.0003,
			"PRICE11":0.0319+0.0007
		},
		{
			"ZONE": "WEST",
			"PRICE": 0.0315+0.0003,
			"PRICE11":0.0315+0.0007
		}
	];

	consumption_300k_500k = [{
			"ZONE": "HOUSTON",
			"PRICE": 0.0336+0.0003,
			"PRICE11":0.0336+0.0007
		},
		{
			"ZONE": "NORTH",
			"PRICE": 0.0329+0.0003,
			"PRICE11":0.0329+0.0007
		},
		{
			"ZONE": "SOUTH",
			"PRICE": 0.0320+0.0003,
			"PRICE11":0.0320+0.0007
		},
		{
			"ZONE": "WEST",
			"PRICE": 0.0299+0.0003,
			"PRICE11":0.0299+0.0007
		}
	];

	consumption_100k_300k = [{
			"ZONE": "HOUSTON",
			"PRICE": 0.0349+0.0003,
			"PRICE11":0.0349+0.0007
		},
		{
			"ZONE": "NORTH",
			"PRICE": 0.0349+0.0003,
			"PRICE11":0.0349+0.0007
		},
		{
			"ZONE": "SOUTH",
			"PRICE": 0.0354+0.0003,
			"PRICE11":0.0354+0.0007
		},
		{
			"ZONE": "WEST",
			"PRICE": 0.0359+0.0003,
			"PRICE11":0.0359+0.0007
		}
	];

	consumption_100k = [{
			"ZONE": "HOUSTON",
			"PRICE": 0.0368+0.0003,
			"PRICE11":0.0368+0.0007
		},
		{
			"ZONE": "NORTH",
			"PRICE": 0.0368+0.0003,
			"PRICE11":0.0368+0.0007
		},
		{
			"ZONE": "SOUTH",
			"PRICE": 0.0371+0.0003,
			"PRICE11":0.0371+0.0007
		},
		{
			"ZONE": "WEST",
			"PRICE": 0.0378+0.0003,
			"PRICE11":0.0378+0.0007
		}
	];

	$(document).ready(function() {
		$('#city').hide();
		$('#subm').hide();
		$('#price').hide();
		$('#2nd').hide();
		$('#form_price').hide();
		$('#form_price_zip').hide();
		

		$("input[name='options']").change(function() {
			if ($("input[name='options']:checked").val() !== undefined) {
				$('#zip_code').val('');
				$("#consumption").val('blank_cons')
				$('#city').hide();
				$('#price').text('');
			} else {}
		});


		$('#zip_code').change(function() {
			if ($('#zip_code').val().length !== 5) {
				$('#city').hide();
			} else {
				$.each(cities, function(key, value) {
					if (value.ZIP_CODE === $('#zip_code').val()) {
						$('#city').text(value.ZONE);
						$('#city').show();
						return false;
					} else {
						$('#city').text('Please Enter Correct Zip Code');
						$('#city').show();
					}
				});
			}
		});


		$('#consumption').change(function() {
			if ($('#consumption').val() !== 'blank_cons') {
				lst = $('#consumption').val();
				if (lst === "1m") {
					f_lst = consumption_500k_1000k;
				} else if (lst === "900k") {
					f_lst = consumption_700k_900k;	
				} else if (lst === "700k") {
					f_lst = consumption_500k_700k;	
				} else if (lst === "500k") {
					f_lst = consumption_300k_500k;
				} else if (lst === "300k") {
					f_lst = consumption_100k_300k;
				} else if (lst === "100k") {
					f_lst = consumption_100k;
				}

				$.each(f_lst, function(key, value) {
					if (value.ZONE === $('#city').text()) {
						$('#price').text("Today's Offer!");
						$('#price1').text("$"+value.PRICE + " - " +"$"+value.PRICE11 + "*" );
						$('#form_price').val($('#price1').text());
						$('#form_price_zip').val($('#zip_code').val());
						$('#btn_dis').css('background-color', '#0045b6');
						$('#btn_dis').removeAttr('disabled');
						return false;
					} else {

					}
				});

			} else {}
		})

		$('#btn_dis').click(function() {
			$('#no').fadeOut();
			$('#text_head').css({
				'font-size': '20px',
				'margin-bottom': '20px'
			});
			$('#text_head').text($('#price').text());
			$('#2ndbtn').text('Submit your request to avail this price TODAY!');
			$('#2nd').fadeIn();
		});

		$('#2ndbtn').click(function() {
			$('#2nd').fadeOut();
			$('#text_head').css({
				'font-size': '20px',
				'margin-bottom': '20px'
			});
			$('#text_head').text("Just Fill In The Form And We Will Get In Touch With You Regarding Your Energy Rates For You!");
			$('#subm').fadeIn();
			$("input[name='consumption_form']").val($('#consumption option:selected').text());
			$("input[name='type_form']").val($("input[name='options']:checked").val());
		});
		$('#3ndbtn').click(function() {
			$('#2nd').fadeOut();
			$('#text_head').css({
				'font-size': '20px',
				'margin-bottom': '20px'
			});
			$('#text_head').text("LOOKING FOR ELECTRICITY RATES?");
			$('#no').fadeIn();
			
		});
		
		$('#4ndbtn').click(function() {
			$('#subm').fadeOut();
			$('#text_head').css({
				'font-size': '20px',
				'margin-bottom': '20px'
			});
			$('#text_head').text($('#price').text());
			$('#2ndbtn').text('Submit your request to avail this price TODAY!');
			$('#2nd').fadeIn();
		});
		
		
			$('#option1').click(function() {
			$('#resi').fadeOut();
			$('#text_head').css({
				'font-size': '24px',
				'margin-bottom': '20px'
			});
			$('#text_head').text($('#price').text());
			$('#text_head').text('LOOKING FOR ELECTRICITY RATES?');
			$('#zip_code').fadeIn();
			$('#consumption').fadeIn();
			$('#btn_dis').fadeIn();
		});
		
			$('#option2').click(function() {
			$('#zip_code').fadeOut();
			$('#consumption').fadeOut();
			$('#btn_dis').fadeOut();
			$('#text_head').css({
				'font-size': '24px',
				'margin-bottom': '20px'
			});
			$('#text_head').text($('#price').text());
			$('#text_head').text('LOOKING FOR ELECTRICITY RATES?');
			$('#resi').fadeIn();
		});
	});
</script>

@endsection