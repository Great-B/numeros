@extends('masters.layout')

@section('content')

<section id="contact-info">
        <div class="center">
            <h2>Keep Us Inform!</h2>
            <p class="lead">Be it on project or an inquiry...Tell us</p>
        </div>
        <div class="col-lg-10 col-lg-offset-1">
          @include('partials.errors')
          @include('partials.success')
        </div>
        <div class="row contact-wrap">
            <form class="contact-form" method="post" action="{{ url('contact/store') }}">
              {{ csrf_field() }}
                <div class="col-sm-5 col-sm-offset-1">
                    <div class="form-group">
                        <label>Name *</label>
                        <input type="text" name="name" class="form-control" placeholder="your name here..." required="required">
                    </div>
                    <div class="form-group">
                        <label>Email *</label>
                        <input type="email" name="email" class="form-control" required="required" placeholder="your email address...">
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input type="text" class="form-control" name="phone" placeholder="your mobile contact...">
                    </div>
                    <div class="form-group">
                        <label>Company Name</label>
                        <input type="text" class="form-control" name="companyName" placeholder="just want to know you...">
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-group">
                        <label>Subject *</label>
                        <input type="text" name="subject" class="form-control" required="required" placeholder="what would like to know...">
                    </div>
                    <div class="form-group">
                        <label>Message *</label>
                        <textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="give us the details here..."></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" name="submit" class="btn btn-primary btn-lg" required="required">Submit Message</button>
                    </div>
                </div>
            </form>
        </div>
</section>

<section id="contact-info">
        <div class="gmap-area">
            <div class="container">
                <div class="row">
                    <div class="col-sm-5 text-center">
                        <div class="gmap">
                            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.5067625084184!2d3.4173301142354413!3d6.457291225722267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b8b34d4b03dd5%3A0x8e3b1e63264c7226!2s254b+Ikorodu+Cres%2C+Ikoyi%2C+Lagos!5e0!3m2!1sen!2sng!4v1537883904428" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                        </div>
                    </div>

                    <div class="col-sm-7 map-content">
                        <ul class="row">
                            <li class="col-sm-6">
                                <address>
                                    <h5>Head Office</h5>
                                    <p>254b Ikorodu Crescent <br>
                                    Dolphin Estate, Ikoyi Lagos,<br>
                                    Nigeria</p>
                                    <p>Phone:08150618601 <br>
                                    Email:info@numeros.com.ng</p>
                                </address>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
