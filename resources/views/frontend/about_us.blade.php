@extends('frontend/master')
@section('content')

<style>
    .about-founder-section {
    width: 100%;
    float: left;
    padding-left: 8%;
    padding-right: 8%;
    overflow: hidden;
    padding-top: 0;
    padding-bottom: 4%;
    margin-top: -6%;
}
.about-logo-slider-div {
    margin-top: 0;
}
.lt-foundr-txt h5 {
    color: #222222;
    font-family: 'Futura Medium';
    font-size: 14px;
    letter-spacing: 1px;
}
.lt-foundr-txt h2 {
    color: #0649b8;
    font-size: 2.2vw;
    font-family: 'Futura Medium';
    letter-spacing: 1px;
    margin-top: 14px;
    margin-bottom: 30px;
}
.lt-foundr-txt p {
    color: #272626;
    font-family: canada-type-gibson, sans-serif;
    font-size: 15px;
    line-height: 1.7;
    font-weight: 300;
    letter-spacing: 0.5px;
    margin-bottom: 15px;
}
.lt-foundr-txt {
    width: 60%;
    padding-right: 20px;
    display: inline-block;
    vertical-align: top;
}
.rt-foundr-img {
    width: 39%;
    display: inline-block;
    vertical-align: top;
    padding-left: 4%;
}
.values-div {
    padding-bottom: 0;
}

@media (max-width: 1100px) {
    .lt-foundr-txt h2 {
    font-size: 26px;
    margin-bottom: 20px;
}
.lt-foundr-txt p {
    margin-bottom: 12px;
}
.rt-foundr-img {
    padding-left: 20px;
}
}

@media (max-width: 768px) {
.about-logo-slider-div {
    margin-top: -25px;
}
.about-founder-section {
    padding: 0 25px;
    margin-top: 0;
    margin-bottom: 20px;
    padding-top: 20px;
}
.lt-foundr-txt h2 {
    font-size: 24px;
}
.lt-foundr-txt {
    width: 100%;
    padding-right: 0;
}
.rt-foundr-img {
    width: 100%;
    padding-left: 0;
    margin-bottom: 20px;
}
.lt-foundr-txt p {
    font-size: 14px;
}
.commercial-section4 {
    padding-top: 20px;
}
.values-div {
    padding-bottom: 35px;
}
}
</style>

<div class="body about-page">
        <!--section 1-->
        <section>
            <div class="commercial-section1">
                <div class="wow fadeInUp" data-wow-delay="0.4s">
                    <h2>Commercial energy consulting<br />we’re the specialists!</h2>
                    <p>Park Place Power LLC. is a Multi-Certified Commercial Energy Brokerage & Consulting Firm that values our clients and relationships.  As we negotiate electricity rates and contract language on your behalf, you will quickly realize that we work for you and not the energy suppliers, which means your needs come first!</p>
                    <div class="button-div">
                        <a class="button-explore" data-toggle="modal" data-target="#myModalQuote">get your quote&nbsp; ></a>
                        <a href="{{ asset('contact-us')}}" class="btn-get-in-touch">get in touch with us</a>
                    </div>
                </div>
                <!--<a class="scroll-down"><img src="{{ asset('content/images/scroll-down-arrows.png')}}" /> scroll down</a>-->
            </div>
        </section>
        <!--section 1-->
        <!--section 2-->
        <section>
            <div class="about-section2">
                <div class="about-section2-part1 wow fadeInUp">
                    <div class="about_slider">
                        <div class="items">
                            <div class="about-section2-blk">
                                <div class="about-section2-txt-blk1">
                                    <h4>Honesty</h4>
                                    <span></span>
                                    <p>We believe in direct, open and honest communication</p>
                                </div>
                                <img src="{{ asset('content/images/about-us/honesty.jpg') }}" />
                            </div>
                        </div>
                        <div class="items">
                            <div class="about-section2-blk">
                                <div class="about-section2-txt-blk1">
                                    <h4>Transparency</h4>
                                    <span></span>
                                    <p>Your needs comes first</p>
                                </div>
                                <img src="{{ asset('content/images/about-us/transparency.jpg') }}" />
                            </div>
                        </div>
                        <div class="items">
                            <div class="about-section2-blk">
                                <div class="about-section2-txt-blk1">
                                    <h4>Integrity</h4>
                                    <span></span>
                                    <p>We work for you and not for our energy suppliers</p>
                                </div>
                                <img src="{{ asset('content/images/about-us/integrity.jpg') }}" />
                            </div>
                        </div>
                        <div class="items">
                            <div class="about-section2-blk">
                                <div class="about-section2-txt-blk1">
                                    <h4>Accountability</h4>
                                    <span></span>
                                    <p>We have an unwavering commitment in providing you the best 5 Star service.</p>
                                </div>
                                <img src="{{ asset('content/images/about-us/accountability.jpg') }}" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="about-section2-part2 wow fadeInUp" data-wow-delay="0.4s">
                    <h4>WELCOME</h4>
                    <h2>We are committed to serving your needs</h2>
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="about-section2-blk2">
                                <div class="about-section2-img">
                                    <img src="{{ asset('content/images/about-us/energy.png')}}" />
                                </div>
                                <div class="about-section2-txt-blk2">
                                    <h3>Personalized service</h3>
                                    <p>Here at Park Power Place, we customize our approach and plans to suit the needs of each and every individual.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="about-section2-blk2">
                                <div class="about-section2-img">
                                    <img src="{{ asset('content/images/about-us/accounting.png')}}" />
                                </div>
                                <div class="about-section2-txt-blk2">
                                    <h3>Continuous Market Watch</h3>
                                    <p>We identify and eliminate issues before they can take effect and update you on any changes in the market. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <div class="about-section2-blk2">
                                <div class="about-section2-img">
                                    <img src="{{ asset('content/images/about-us/network.png')}}" />
                                </div>
                                <div class="about-section2-txt-blk2">
                                    <h3>Client Reputation</h3>
                                    <p>5 Star Service is Standard </p>
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
            <div class="about-section3">
                <div class="row d-flex">
                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                        <div class="about-section3-txt wow fadeInUp">
                            <h4>Our Story</h4>
                            <h2>A plan for The future</h2>
                            <div class="about-section3-img wow zoomIn">

                            </div>
                            <p>We are a leading energy consulting company. And we negotiate the best deals with suppliers for our clients.</p>
                            <p>Our customer-focused approach, modern technologies and tools help organizations to think
critically about their energy requirements. Knowing where the power is coming from, the impact it has on the environment will allow our clients to be more conscientious energy users. We
partner with businesses to customize innovative power and sustainability solutions that are
informed by our years of experience as market leaders. Energy Aggregation is our forte as we
can aggregate 100+ clients while negotiating and retaining the economic advantages of a
high-volume purchase. We work diligently to stay ahead of an ever-evolving energy climate with
rising demands.</p>
                            <p>Energy is all around us, fueling our day-to-day experiences. It keeps our families safe, it keeps
our businesses running and it helps our neighborhoods thrive.We have to be willing to
transform the way we approach energy and imagine new solutions that will strengthen our
collective energy community. We’re proud to be leading that transformation, and we hope you’ll
join us.</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 hidden-sm hidden-xs pad-zero">
                        <div class="about-section3-img wow zoomIn">

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--section 3-->
        <!--section 4-->
        <section>
            <div class="about-section4">
                <h2>Our integrated platform</h2>
                <h4>We can service business of any size. The only factor is your energy requirements and consumption.</h4>
                <div class="row">
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="about-section4-blk wow fadeInUp">
                            <div class="about-section4-img">
                                <img src="{{ asset('content/images/about-us/home.png')}}" />
                            </div>
                            <div class="about-section4-txt-blk">
                                <h3>Residential</h3>
                                <p>Our goal is to make sure that our residential customers can sleep at night knowing they have secured their residential contract with a reputable supplier that will not take advantage of them.
 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="about-section4-blk wow fadeInUp">
                            <div class="about-section4-img">
                                <img src="{{ asset('content/images/about-us/brokerage.png')}}" />
                            </div>
                            <div class="about-section4-txt-blk">
                                <h3>Business</h3>
                                <p>We identify which suppliers and programs would best fit your energy needs and adjust to any future or sudden unexpected changes within your organization’s operation platform.
 </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                        <div class="about-section4-blk wow fadeInUp">
                            <div class="about-section4-img">
                                <img src="{{ asset('content/images/about-us/charging.png')}}" />
                            </div>
                            <div class="about-section4-txt-blk">
                                <h3>Prepaid/Postpaid</h3>
                                <p>As your energy specialist, we are flexible to any plans you are comfortable with. All you need to do is to tell us your preference. 
 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section>
            <div class="about-founder-section visible-xs">                
                <div class="row">
                    <div class="lt-foundr-txt">
                        <h5>Our Founder</h5>
                        <h2>Clarence Robinson II, EMP</h2>
                        <div class="rt-foundr-img visible-xs">
                            <img src="{{ asset('content/images/about-us/clarence-img.png') }}" class="img-responsive">
                        </div>
                        <p>Mr. Robinson is the Founder and CEO of Park Place Power LLC; a National Minority Certified energy brokerage/consulting firm with locations in Arlington as well as Houston, TX. Certified through The Energy Professional Association (TEPA) as an Energy Manager Professional, he has a set of core values that includes honesty, transparency, integrity, accountability and teamwork. </p>

                        <p>He has over two decades of experience in consulting and building trust with companies of all sizes, needs, expectations and goals.  The first decade he spent in developing programs to help business in the areas of advertising, branding and public reputation management. The second half in educating and working with clients in areas such as energy cost reduction, demand response and multiple meter management. </p>

                        <p>During this time Mr. Robinson has been recognized and received multiple sales/consulting awards that has led him to consistently stay in the top 2% -3% for production and new client acquisitions.  He has completing his Speaker/Training/Coaching Certification through the John Maxwell Group. A strong believer of how ‘teamwork makes the dream work’, he is a devoted team player and credits his successes to those around him.</p>

                        <p>Mr. Robinson is laser-focused on providing timely service and dependability backed with an unwavering commitment to go above and beyond the status quo to provide a 5 Star Level of Service to all of his clients.  It is this approach that instills a level of trust that gives each client the peace of mind to feel comfortable partnering with Mr. Robinson and his team year over year.</p>
                    </div>
                    <div class="rt-foundr-img hidden-xs">
                        <img src="{{ asset('content/images/about-us/clarence-img.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="commercial-section4">
                <div class="commercial-section4-container">
                    <div class="row d-flex wow fadeInUp">
                        <div class="col-lg-5 col-md-5 col-sm-6 col-xs-12 pad-zero">
                            <h4>partnerships</h4>
                            <h2>We have over <span>30+</span> suppliers and we select<br />the best for you</h2>
                            <p class="hidden-xs">We at Park Power Place only work with trusted suppliers who share the same values to build a stable network of unwavering commitment to you our clients.</p>
                        </div>
                        <div class="col-lg-7 col-md-7 col-sm-6 col-xs-12 pad-zero text-right">
                            <img src="{{ asset('content/images/commercial-energy/partnership-pattern.png')}}" class="patrnrship-pattern" />
                            <p class="visible-xs">We at Park Power Place only work with our trusted suppliers who share the same values to build a stable network of unwavering commitment to you our clients.</p>
                        </div>
                    </div>
                    <h3><a href="{{ asset('suppliers') }}">Scroll to see the entire list <img src="{{ asset('content/images/arrow-pointing-to-right-blue.png') }}" /></a></h3>                    
                </div>                
            </div>
            <div class="about-founder-section hidden-xs">                
                <div class="row">
                    <div class="lt-foundr-txt">
                        <h5>Our Founder</h5>
                        <h2>Clarence Robinson II, EMP</h2>
                        <div class="rt-foundr-img visible-xs">
                            <img src="{{ asset('content/images/about-us/clarence-img.png') }}" class="img-responsive">
                        </div>
                        <p>Mr. Robinson is the Founder and CEO of Park Place Power LLC; a National Minority Certified energy brokerage/consulting firm with locations in Arlington as well as Houston, TX. Certified through The Energy Professional Association (TEPA) as an Energy Manager Professional, he has a set of core values that includes honesty, transparency, integrity, accountability and teamwork. </p>

                        <p>He has over two decades of experience in consulting and building trust with companies of all sizes, needs, expectations and goals.  The first decade he spent in developing programs to help business in the areas of advertising, branding and public reputation management. The second half in educating and working with clients in areas such as energy cost reduction, demand response and multiple meter management. </p>

                        <p>During this time Mr. Robinson has been recognized and received multiple sales/consulting awards that has led him to consistently stay in the top 2% -3% for production and new client acquisitions.  He has  completing his Speaker/Training/Coaching Certification through the John Maxwell Group. A strong believer of how ‘teamwork makes the dream work’, he is a devoted team player and credits his successes to those around him.</p>

                        <p>Mr. Robinson is laser-focused on providing timely service and dependability backed with an unwavering commitment to go above and beyond the status quo to provide a 5 Star Level of Service to all of his clients.  It is this approach that instills a level of trust that gives each client the peace of mind to feel comfortable partnering with Mr. Robinson and his team year over year.</p>
                    </div>
                    <div class="rt-foundr-img hidden-xs">
                        <img src="{{ asset('content/images/about-us/clarence-img.png') }}" class="img-responsive">
                    </div>
                </div>
            </div>
            <div class="about-logo-slider-div">
                <div class="commercial-section4-container">
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
                <div class="value-container wow fadeInUp">
                    <div class="row values-div1">
                        <div class="col-lg-5 col-md-4 col-sm-4 hidden-xs val-p-icon">
                            <img src="{{ asset('content/images/about-us/p-icon.png')}}" />
                        </div>
                        <div class="col-lg-7 col-md-8 col-sm-8 col-xs-12 value-div-txt">
                            <h3>Values we stand for</h3>
                            <h4>Our purpose and values</h4>
                            <p>
                                We bring the power of energy to people and organizations. We are an energy negotiating and consulting firm powered by people and built on dynamic retail brands with diverse generation resources.
                            </p>
                            <img src="{{ asset('content/images/about-us/p-icon.png')}}" class="visible-xs val-p-img"/>
                        </div>
                    </div>
                    <div class="row values-div2">
                        <div class="val-blk">
                            <img src="{{ asset('content/images/about-us/img-safety.png')}}" />
                            <h5>Safety and well being</h5>
                        </div>
                        <div class="val-blk">
                            <img src="{{ asset('content/images/about-us/img-satisfaction.png')}}" />
                            <h5>Customer focus</h5>
                        </div>
                        <div class="val-blk">
                            <img src="{{ asset('content/images/about-us/img-collab.png')}}" />
                            <h5>Collaboration</h5>
                        </div>
                    </div>
                    <div class="row associate-hdg">
                        <h3><a>Our Associations <!-- <img src="{{ asset('content/images/arrow-pointing-to-right-blue.png') }}" /> --></a></h3>
                    </div>
                </div>
            </div>
            <div class="about-logo-slider-div associate-div">
                <div class="commercial-section4-container">
                    <div class="slider-our-suppliers slider-associates wow fadeInUp">
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo1.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo2.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo3.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo4.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo5.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo6.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo7.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo8.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo9.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo10.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo11.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo12.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo13.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo14.jpg') }}" />
                        </div>
                        <div class="item">
                            <img src="{{ asset('content/images/about-us/associate-logos/logo15.jpg') }}" />
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

    </div>

@endsection