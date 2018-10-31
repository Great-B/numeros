@extends('masters.layout')

@section('content')

<!-- Carousel
================================================== -->

<section id="main-slider" class="no-margin">
  <div class="carousel slide">
      <ol class="carousel-indicators">
          <li data-target="#main-slider" data-slide-to="0" class="active"></li>
          <li data-target="#main-slider" data-slide-to="1"></li>
          <li data-target="#main-slider" data-slide-to="2"></li>
          <li data-target="#main-slider" data-slide-to="3"></li>
          <li data-target="#main-slider" data-slide-to="4"></li>
          <li data-target="#main-slider" data-slide-to="5"></li>
      </ol>
      <div class="carousel-inner">


          <div class="item active" style="background-image: url(images/slider/numerosDatacenterSlider.png)">
              <div class="container">
                  <div class="row slide-margin">
                      <div class="col-sm-6">
                          <div class="carousel-content white">
                              <h1 class="animation animated-item-1">Database Management</h1>
                              <h2 class="animation animated-item-2">We can procure, install and manage a robust database system for your business...</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!--/.item-->

          <div class="item" style="background-image: url(images/slider/numerosPenTestSlider.png)">
              <div class="container">
                  <div class="row slide-margin">
                      <div class="col-sm-6">
                          <div class="carousel-content white">
                              <h1 class="animation animated-item-1">Penetration Testing</h1>
                              <h2 class="animation animated-item-2">We test websites, software, database and other applications for loopholes and threats and offer counter measures...</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!--/.item-->

          <div class="item" style="background-image: url(images/slider/numerosSoftdevSlider.png)">
              <div class="container">
                  <div class="row slide-margin">
                      <div class="col-sm-6">
                          <div class="carousel-content white">
                              <h1 class="animation animated-item-1">Software Development</h1>
                              <h2 class="animation animated-item-2">We design, develop and manage desktop, mobile and other platform dependent applications...</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!--/.item-->

          <div class="item" style="background-image: url(images/slider/numerosWebSlider.png)">
              <div class="container">
                  <div class="row animation animated-item-1">
                      <div class="col-sm-6">
                          <div class="carousel-content black">
                              <h1 class="animation animated-item-1">Website Development</h1>
                              <h2 class="animation animated-item-2">Regardless of the scalability and the robustness of your web applications, we can build...</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!--/.item-->


          <div class="item" style="background-image: url(images/slider/numerosDataAnalyticsSlider.png)">
              <div class="container">
                  <div class="row slide-margin">
                      <div class="col-sm-6">
                          <div class="carousel-content black">
                              <h1 class="animation animated-item-1">Business Data Analytics</h1>
                              <h2 class="animation animated-item-2">Hidden patterns and infographics can save your business from a lot of trouble...</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!--/.item-->


          <div class="item" style="background-image: url(images/slider/numerosMarketingSlider.png)">
              <div class="container">
                  <div class="row slide-margin">
                      <div class="col-sm-6">
                          <div class="carousel-content">
                              <h1 class="animation animated-item-1 white">Digital Marketing</h1>
                              <h2 class="animation animated-item-2 black">Large volume of paying customers is all you need and we can drive them to you...</h2>
                          </div>
                      </div>
                  </div>
              </div>
          </div><!--/.item-->





      </div><!--/.carousel-inner-->
  </div><!--/.carousel-->
  <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
      <i class="fa fa-chevron-left"></i>
  </a>
  <a class="next hidden-xs" href="#main-slider" data-slide="next">
      <i class="fa fa-chevron-right"></i>
  </a>
</section><!--/#main-slider-->
  </div><!--/.container-->
</section><!--/#feature-->
@endsection
