@extends('frontend/master')
@section('content')

<div class="body">
    <!--section 1-->
    <section>
        <div class="commercial-section1">
            <div class="wow fadeInUp" data-wow-delay="0.4s">
                <h2>Commercial energy consulting<br />we’re the specialists!</h2>
                <p>Get current rates information, top electricity providers for your business, short and long-term strategies and many more.</p>
                <div class="button-div">
                    <a class="button-explore" data-toggle="modal" data-target="#myModalQuote">get your quote&nbsp; ></a>
                    <a href="{{ asset('contact-us')}}" class="btn-get-in-touch">get in touch with us</a>
                </div>
            </div>
            <a class="scroll-down"><img src="{{ asset('content/images/scroll-down-arrows.png') }}" /> scroll down</a>                
        </div>
    </section>
    <!--section 1-->
    <!--section 2-->
    <section>
        <div class="commercial-section2 section2">
            <div class="commercial-section2-txt-div">
                <div class="commercial-section2-div1 wow fadeInUp" data-wow-delay="0.2s">
                    <h4>commercial energy consulting</h4>
                    <h2>We help you find<br />the best energy solutions for <br />your business</h2>
                </div>
                <div class="commercial-section2-div2 wow fadeInUp" data-wow-delay="0.2s">
                    <p>
                        We leverage our relationships and expertise with the multiple energy suppliers we’ve partnered with to tailor a program perfect for you.  As your energy specialist we will identify which suppliers and programs that would best fit your energy needs while staying nimble enough to adjust to any future or sudden unexpected changes within your organization’s operation platform.
                    </p>
                    <div class="button-div">
                        <a class="button-explore" href="https://parkplacepower.com/pricing">get your quote&nbsp; ></a>
                        <a class="btn-get-in-touch" href="{{ asset('contact-us') }}">get in touch with us</a>
                    </div>
                </div>
            </div>
            <div class="commercial-section2-rt-img">
                <img src="{{ asset('content/images/commercial-energy/commercial-bg-section2.jpg') }}" class="hidden-sm hidden-xs"/>
                <div class="commercial-section2-rt-innerdiv">
                    <div class="blk-div wow fadeInUp" data-wow-delay="0.4s">
                        <h4>Call Us Today</h4>
                        <h2><a href="tel:18884077022">1-888-407-7022</a></h2>
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
        <div class="commercial-section3">
            <div class="commercial-section3-container">
                <div class="commercial-section3-div1 wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Industries Served</h2>
                    <p>We can service business of any size. The only factor is your energy requirements and consumption.</p>
                </div>
                <span>
                    <img src="{{ asset('content/images/arrow-pointing-to-bottom.png') }}" />
                </span>                    
            </div>
            <div class="commercial-section3-div2 wow fadeInUp" data-wow-delay="0.4s">
                <div class="slider-industries">
                    <div class="item">
                        <div class="slider-item slider-item-bg1">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/comm-section3-icon1.png') }}" class="img-responsive" />
                                <h4>Storage Facilities</h4>
                                <p>Leave It to us, energy specialists to identify which programs and suppliers best suit your energy needs.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg2">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/comm-section3-icon2.png') }}" class="img-responsive" />
                                <h4>Auto Dealerships</h4>
                                <p>We engineer the appropriate solution to provide the best energy for you.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg3">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/industry.png') }}" class="img-responsive" />
                                <h4>Industrial manufacturing</h4>
                                <p>We find solutions and manage your energy - helping you make informed decisions to reduce risk and drive down costs on your electricity.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg4">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/office.png') }}" class="img-responsive" />
                                <h4>Office/Retail</h4>
                                <p>We compare and inform you on the current electricity offers and rate changes that will save you time and money.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg5">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/multi_family.png') }}" class="img-responsive" />
                                <h4>Multi-Family</h4>
                                <p>We help you find the best energy supplier in your area for multi-families at the best prices</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg6">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/restaurant.png') }}" class="img-responsive" />
                                <h4>Restaurants</h4>
                                <p>We engineer the appropriate solution to eliminate hidden charge on the delivery portion of your bill.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg7">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/warehouse.png') }}" class="img-responsive" />
                                <h4>Warehouses</h4>
                                <p>We identify which programs and suppliers best suit the energy for your warehouse.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg8">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/hospitality.png') }}" class="img-responsive" />
                                <h4>Hospitality</h4>
                                <p>We have an unwavering commitment in providing you the client with 5 Star service throughout the year.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg9">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/church.png') }}" class="img-responsive" />
                                <h4>Church</h4>
                                <p>We handle all issues and billing questions with no obligations. Your needs come first!</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg10">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/mall.png') }}" class="img-responsive" />
                                <h4>Shopping Mall</h4>
                                <p>We dedicate ourselves to provide you with the best level of trust and service that would allow us
the opportunity to completely take care of all of your energy needs.</p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-item slider-item-bg11">
                            <div>
                                <img src="{{ asset('content/images/commercial-energy/construction.png') }}" class="img-responsive">
                                <h4>New Construction</h4>
                                <p>We negotiate the best energy plan solely for you. No more dealing with low level sales people
who lack the authority to negotiate.</p>
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