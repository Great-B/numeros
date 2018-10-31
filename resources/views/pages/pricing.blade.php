@extends('masters.layout')

@section('content')

<section class="pricing-page">
        <div class="container">
            <div class="center">
                <h2>The Worth of Our Services</h2>
                <p class="lead">Here is a view of the estimated prices for our services<br>and they are based on various plans.</p>
            </div>
            <div class="pricing-area text-center">
                <div class="row">
                    <div class="col-sm-4 plan price-one wow fadeInDown">
                        <ul>
                            <li class="heading-one">
                                <h1>Standard</h1>
                                <span>&#8358; 70, 000</span>
                            </li>
                            <li>Best for a basic website</li>
                            <li>Responsive Designs</li>
                            <li>SEO</li>
                            <li>User Friendly Feedback Form</li>
                            <li>Social Media Integration</li>
                            <li>Customized Business Email</li>
                            <li class="plan-action {{ Request::is('contact/show') ? 'active' : null }}">
                                <a href="{{ url('contact') }}" class="btn btn-primary">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-two wow fadeInDown">
                        <ul>
                            <li class="heading-two">
                                <h1>Deluxe</h1>
                                <span>&#8358; 150, 000</span>
                            </li>
                            <li>Best for Small-Medium Scale Business</li>
                            <li>Responsive Designs</li>
                            <li>SEO</li>
                            <li>Unmetered Bandwith</li>
                            <li>User Friendly Feedback Form</li>
                            <li>Social Media Integration</li>
                            <li>Customized Business Email</li>
                            <li>Content Management</li>
                            <li>Website Security</li>

                            <li class="plan-action {{ Request::is('contact/show') ? 'active' : null }}">
                                <a href="{{ url('contact') }}" class="btn btn-primary">Contact Us</a>
                            </li>
                        </ul>
                    </div>

                    <div class="col-sm-4 plan price-three wow fadeInDown">
                        <ul>
                            <li class="heading-three">
                                <h1>Pro</h1>
                                <span>&#8358; 200, 000</span>
                            </li>
                            <li>Best for sites with high traffic</li>
                            <li>Responsive Designs</li>
                            <li>SEO</li>
                            <li>Unmetered Bandwith</li>
                            <li>Unlimited Websites</li>
                            <li>Content Management</li>
                            <li>User Friendly Feedback Form</li>
                            <li>Social Media Integration</li>
                            <li>Customized Business Mail</li>
                            <li>Unlimited Number of Web Pages</li>
                            <li>Web Security</li>
                            <li>Google Business Registration</li>
                            <li>One Year Free Support</li>
                            <li class="plan-action {{ Request::is('contact/show') ? 'active' : null }}">
                                <a href="{{ url('contact') }}" class="btn btn-primary">Contact Us</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div><!--/pricing-area-->
        </div><!--/container-->
    </section><!--/pricing-page-->

@endsection
