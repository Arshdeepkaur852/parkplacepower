@extends('frontend/master')
@section('content')

<div class="body residential-energy-page">
        <!--section 1-->
        <section>
            <div class="commercial-section1">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <h2>residential energy consulting<br /><span>Get the best rates in your area</span></h2>
                    <p>Our goal is to make sure that our residential customers can sleep at night knowing they have secured their residential contract with a reputable supplier that will not take advantage of them. </p>                    
                </div>
                <a class="scroll-down"><img src="{{ asset('content/images/scroll-down-arrows.png') }}" /> scroll down</a>
            </div>
        </section>
        <!--section 1-->
        <!--section 2-->
        <section>
            <div class="residential-section2 commercial-section2 section2">
                <div class="commercial-section2-txt-div">
                    <div class="commercial-section2-div1 wow fadeInUp" data-wow-delay="0.2s">
                        <h4>resisdential energy consulting</h4>
                        <h2>We have negotiated<br />best rates with suppliers<br />so that you don’t<br />have to</h2>
                    </div>
                    <div class="commercial-section2-div2 wow fadeInUp" data-wow-delay="0.2s">
                        <p>
                            We leverage our relationships and expertise with the multiple energy suppliers we’ve partnered with to tailor a program perfect for you.  As your energy specialist we will identify which suppliers and programs that would best fit your energy needs while staying nimble enough to adjust to any future or sudden unexpected changes within your organization’s operation platform.
                        </p>
                        <div class="button-div">
                            <a class="button-explore"  href="https://parkplacepower.com/pricing">get your quote&nbsp; ></a>
                            <a href="{{ asset('contact-us')}}" class="btn-get-in-touch">get in touch with us</a>
                        </div>
                    </div>
                    <img src="{{ asset('content/images/residential-energy/residential-bg-section2-mob.png') }}" class="visible-sm visible-xs" />
                </div>
                <div class="commercial-section2-rt-img">
                    <img src="{{ asset('content/images/residential-energy/residential-bg-section2.png') }}" class="hidden-sm hidden-xs"/>
                    <div class="commercial-section2-rt-innerdiv">
                        <div class="blk-div wow fadeInUp" data-wow-delay="0.4s">
                            <h4>Call Us Today</h4>
                            <h2><a href="tel:2149604741">214-960-4741</a></h2>
                            <h5>to get the best rates in your area</h5>
                            <h3>SEE AND COMPARE TODAY’S PRICE HERE</h3>
                            <!-- <a class="btn-click-here">
                                CLICK HERE
                            </a> -->
                            <a class="btn-click-here" href="https://parkplacepower.com/pricing">
                                CHECK PRICING
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 2-->
        <!--section 3-->
        <section>
            <div class="commercial-section3 residential-section3">
                <div class="commercial-section3-container residential-section3-container">
                    <div class="commercial-section3-div1  wow fadeInUp" data-wow-delay="0.2s">
                        <h2>Best Rates and Plans for Everybody</h2>
                        <p>Whatever your credit score, we have plans which will meet your exact needs so that you can don’t have to worry about power supply.</p>
                    </div>
                    <span>
                        <img src="{{ asset('content/images/arrow-pointing-to-bottom.png') }}" />
                    </span>
                    <!-- <ul class="nav nav-pills">
                        <li class="active"><a data-toggle="pill" href="#goodcreditscore">GOOD CREDIT SCORE</a></li>
                        <li><a data-toggle="pill" href="#badcreditscore">NOT SO GOOD CREDIT SCORE</a></li>
                    </ul> -->
                </div>
                <div class="commercial-section3-div2 residential-section3-div2 wow fadeInUp" data-wow-delay="0.4s">
                    

                    <div class="tab-content">
                        <div id="goodcreditscore" class="tab-pane fade in active">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo1.png') }}" />
                                            <h4><a href="https://signup.chariotenergy.com/Home/?Promocode=PPPOWER" target="_blank">CLICK HERE FOR POSTPAID PLANS</a></h4>                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo2.png') }}" />
                                            <h4><a href="https://www.pulsepowertexas.com/enrollment?&promocode=PPPOWER" target="_blank">CLICK HERE FOR POSTPAID PLANS</a></h4>
                                            <h3><a href="tel:18888535730"><img src="{{ asset('content/images/residential-energy/call-answer-icon.png') }}" /> 1-888-853-5730</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo3.png') }}" />
                                            <h4><a href="https://account.paylesspower.com/enroll/227171" target="_blank">CLICK HERE FOR PRE-PAID PLANS</a></h4>
                                            <h3><a href="tel:18339269724"><img src="{{ asset('content/images/residential-energy/call-answer-icon.png') }}" /> 1-833-926-9724</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo4.png') }}" />
                                            <h4><a href="https://www.frontierutilities.com/ParkPlacePower" target="_blank">CLICK HERE FOR POSTPAID PLANS</a></h4>
                                            <h3><a href="tel:18332512880"><img src="{{ asset('content/images/residential-energy/call-answer-icon.png') }}" /> 1-833-251-2880</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo5.png') }}" />
                                            <h4><a href="https://www.acaciaenergy.com/enroll/?lsid=72883&agentid=20087&bypass=8556136374" target="_blank">CLICK HERE FOR PRE-PAID PLANS</a></h4>
                                            <h3><a href="tel:4696176465"><img src="{{ asset('content/images/residential-energy/call-answer-icon.png') }}" /> 469-617-6465</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block creditscore-blank-block">
                                        <div>
                                            <h4><a>get the best rates in your area</a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="badcreditscore" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo1.png') }}" />
                                            <h4><a>CLICK HERE FOR POSTPAID PLANS</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo2.png') }}" />
                                            <h4><a>CLICK HERE FOR POSTPAID PLANS</a></h4>
                                            <h3><a href="tel:1-888-853-573"><img src="{{ asset('content/images/residential-energy/call-answer-icon.png') }}" /> 1-888-853-573</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo3.png') }}" />
                                            <h4><a>CLICK HERE FOR POSTPAID PLANS</a></h4>
                                            <h3><a href="tel:1-888-853-573"><img src="{{ asset('content/images/residential-energy/call-answer-icon.png') }}" /> 1-888-853-573</a></h3>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo4.png') }}" />
                                            <h4><a>CLICK HERE FOR POSTPAID PLANS</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block">
                                        <div>
                                            <img src="{{ asset('content/images/residential-energy/re-logo5.png') }}" />
                                            <h4><a>CLICK HERE FOR POSTPAID PLANS</a></h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-6 col-xs-6">
                                    <div class="creditscore-block creditscore-blank-block">
                                        <div>
                                            <h4><a>get the best rates in your area </a></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 3-->
        <!--section 4-->
        <section>
            <div class="commercial-section4">
                <div class="commercial-section4-container">
                    <div class="row d-flex wow fadeInUp">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 pad-zero">
                            <h4>partnerships</h4>
                            <h2>We have over <span>30+</span> suppliers and we select<br />the best for you</h2>
                            <p class="hidden-xs">We at Park Power Place only work with our trusted suppliers who share the same values to build a stable network of unwavering commitment to you our clients.
</p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 pad-zero text-right">
                            <img src="{{ asset('content/images/commercial-energy/partnership-pattern.png') }}" class="patrnrship-pattern" />
                            <p class="visible-xs">We at Park Power Place only work with our trusted suppliers who share the same values to build a stable network of unwavering commitment to you our clients.
</p>
                        </div>
                    </div>
                    <h3><a href="{{ asset('suppliers') }}">Scroll to see the entire list <img src="{{ asset('content/images/arrow-pointing-to-right-blue.png') }}" /></a></h3>
                    <div class="slider-our-suppliers wow fadeInUp">
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo2.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo1.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo3.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo4.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo5.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo6.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo7.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo8.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo9.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo10.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo11.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo12.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo13.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo14.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo15.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo16.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo17.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo18.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo19.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo20.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo21.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo22.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo23.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo24.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo25.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo26.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo27.png') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/suppliers/logo28.png') }}" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 4-->
        <!--section 5-->
        <section>
            @include('frontend.energy_rate_block')
        </section>
        <!--section 5-->
        <!--section 6-->
        <!--section 6-->
    </div>

@endsection