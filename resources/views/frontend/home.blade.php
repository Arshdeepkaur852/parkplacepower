@extends('frontend/master')
@section('content')
<div class="body homepage">
    <!--section 1-->
    <section>
            <div class="homepage-section1">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <h2>not just brokers,<br />we’re your energy consultants.</h2>
                    <p>Park Place Power LLC. is a Turn-Key Energy Brokerage and Consulting Firm that Provides the Best Solutions and 5 Star Service to you as our Client.</p>
                    <div class="button-div">
                        <a class="button-explore explore-serv">explore our services &nbsp; ></a>
                    </div>                    
                </div>
                <a class="scroll-down"><img src="content/images/scroll-down-arrows.png" /> scroll down</a>
            </div>
        </section>
        <!--section 1-->

        <!--section 2-->
        <section>
            <div class="homepage-section2 section2">
                <div class="homepage-section2-services wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Our Services</h2>
                    <p>Whether it is Commercial or Residential Energy Consulting, We Provide the Best Services as We Work for our Clients and Not the Energy Suppliers. 
</p>
                </div>
                <div class="homepage-section2-service-types">
                    <div class="col-50 bhomepage-section2-service-type1 wow zoomIn">
                        <div>
                            <h3>Commercial Energy Consulting</h3>
                            <p>Energy Procurement, New Construction, Contract Language Negotiation.</p>
                            <a class="btn_know_more" href="{{ asset('commercial-energy') }}">Know More</a>
                        </div>
                    </div>
                    <div class="col-50 bhomepage-section2-service-type2 wow zoomIn">
                        <div>
                            <h3>Residential Energy Consulting</h3>
                            <p>Switch or Start New Service, Discount Codes.</p>
                            <a class="btn_know_more" href="{{ asset('residential-energy') }}">Know More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 2-->

        <!--section 3-->
        <section>
            <div class="homepage-section3">
                <div class="homepage-section3-part1 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="visible-xs text-center">
                        <img src="content/images/p-img.png" class="p-img" />
                    </div>
                    <h5>What sets us apart</h5>
                    <h3>Experience the Park Place Power difference</h3>
                    <p>Park Place Power LLC. is a Turn-Key Energy Brokerage and Consulting Firm where 5 Star service is standard to you as our client. We have an unwavering commitment in providing a level of excellent and unparalleled service that would allow you to feel comfortable in us representing your energy needs year over year.</p>
                    <a class="btn_know_more" href="{{ asset('about-us') }}">Know More</a>
                </div>
                <div class="homepage-section3-part2 wow fadeInUp" data-wow-delay="0.4s">
                    <h2>What makes us different <!-- <img src="content/images/arrow-pointing-to-right.png" /> --></h2>
                    <div class="slider-what-makes-different">
                        <div class="item">
                            <div class="slider-item slider-item-bg1">
                                <div>
                                    <img src="content/images/save-money-icon.png" class="img-responsive" />
                                    <h4>Guaranteed to save our clients Time & Money</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg2" data-wow-delay="0.2s">
                                <div>
                                    <img src="content/images/energy-saving-icon.png" class="img-responsive" />
                                    <h4>Free Energy Saving Analysis</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg3">
                                <div>
                                    <img src="content/images/speedometer-icon.png" class="img-responsive" />
                                    <h4>We Handle Meter Adds, Deletions & Relocations</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg4">
                                <div>
                                    <img src="content/images/tap-icon.png" class="img-responsive" />
                                    <h4>Quick, Simple & Easy with No Obligations</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg5">
                                <div>
                                    <img src="content/images/rate-icon.png" class="img-responsive" />
                                    <h4>Rate & Contract Language Negotiations Through 30+ Suppliers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg6">
                                <div>
                                    <img src="content/images/handle-issues.png" class="img-responsive" />
                                    <h4>We Handle All Issues & Billing Questions</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg7">
                                <div>
                                    <img src="content/images/no-calls.png" class="img-responsive" />
                                    <h4>No Long holds or 800# to Call for Help</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg8">
                                <div>
                                    <img src="content/images/meter.png" class="img-responsive" />
                                    <h4>Automated Multiple Meter Management</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg9">
                                <div>
                                    <img src="content/images/clients _not_suppliers.png" class="img-responsive" />
                                    <h4>We Work for our Clients, not the Energy Suppliers</h4>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider-item slider-item-bg10">
                                <div>
                                    <img src="content/images/aggregation-icon.png" class="img-responsive" />
                                    <h4>Aggregation Participation Available</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 3-->

        <!--section 4 & get-best-energy-rate-div-->
        <section>
            @include('frontend.energy_rate_block')
        </section>
        <!--section 4-->

        <!--section 5-->
        <section>
            <div class="homepage-section5">
                <div class="homepage-section5-container wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Our Trusted Suppliers <img src="content/images/arrow-pointing-to-right-blue.png" /></h2>
                    <p>We at Park Power Place only work with our trusted suppliers who share the same values to build a stable network of unwavering commitment to you our clients.</p>
                    <h4 class="h4-see-more"><a href="{{ asset('suppliers') }}">See more</a></h4>

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
            <div class="values-div">
            @include('frontend.audit_form')
            </div>
        </section>
        <!--section 5-->

        <!--section 6-->
        <section>
            <div class="homepage-section6">
                <div class="visible-xs">
                    <img src="content/images/homepage-bg-section6-mobile.jpg" class="bg-section6"/>
                </div>
                <div class="homepage-section6-txt wow fadeInUp" data-wow-delay="0.2s">
                    <!-- <h4>
                        <span>RESIDENTIAL SECTION</span> <span>23 MINUTES AGO</span>
                    </h4> -->
                    <h2>Energy Efficient Solutions</h2>
                    <p>We are focused on turnkey energy-efficiency solutions that deliver to your bottom line.</p>
                    <a href="{{ asset('energy-efficiency') }}" class="homepage-section6-btn">Read More</a> 
                    <!-- <a class="homepage-section6-see-btn">See all articles </a> -->
                </div>
            </div>
        </section>
        <!--section 6-->
    </div>
@endsection