@extends('layouts.master')
<!-- end header section -->
<!-- slider section -->
@section('content')
<section class="slider_section ">
  <div id="customCarousel1" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <div class="container ">
          <div class="row">
            <div class="col-md-6">
              <div class="detail-box">
                <h1>
                  Start Your Study Abroad Journey Today
                </h1>
                <p>
                  Ambition has made a reputation as a student-focused education consultancy firm, specialising in
                  helping students apply to their dream study abroad destination.
                </p>
                <div class="btn-box">
                  <!-- <a href="" class="btn-1">
                        Read More
                      </a> -->
                 
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="row">
                <div class=" col-lg-10 mx-auto">
                  <div class="img-box">
                    <img src="img/hero.png" alt="">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>



      <!-- <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Secure <br>
                      Web Hosting
                    </h1>
                    <p>
                      Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="img/hero.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->




      <!-- <div class="carousel-item">
            <div class="container ">
              <div class="row">
                <div class="col-md-6">
                  <div class="detail-box">
                    <h1>
                      Fast & Secure <br>
                      Web Hosting
                    </h1>
                    <p>
                      Anything embarrassing hidden in the middle of text. All the Lorem Ipsuanything embarrassing hidden in the middle of text. All the Lorem Ipsumm </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Read More
                      </a>
                      <a href="" class="btn-2">
                        Contact Us
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="row">
                    <div class=" col-lg-10 mx-auto">
                      <div class="img-box">
                        <img src="img/hero.png" alt="">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> -->





    </div>
    <!-- <div class="carousel_btn-box">
          <a class="carousel-control-prev" href="#customCarousel1" role="button" data-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#customCarousel1" role="button" data-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="sr-only">Next</span>
          </a>
        </div> -->
  </div>
</section>
<!-- end slider section -->


<br><br><br>

<!-- about section -->

<section class="about_section layout_padding-bottom">
  <div class="container  ">
    <div class="row">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              About Us
            </h2>
          </div>
          <p>
            Welcome to our university registration platform! We are committed to providing aspiring students with a
            seamless and hassle-free process to apply and register for universities in the United Online Republic
            (UOREP), Canada, and the United States of America (USA). Our goal is to assist you in your academic journey
            and help you achieve your dreams of pursuing higher education in these esteemed institutions.</p>
        
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="img/about-img.png" alt="">
        </div>
      </div>

    </div>
  </div>
</section>

<!-- end about section -->

<br><br><br>


<!-- steps to applay  section -->

<section class="server_section">
  <div class="container ">
    <div class="row">
      <div class="col-md-6">
        <div class="img-box">
          <img src="img/server-img.jpg" alt="">
          <div class="">
            <button>
              <i class="fa fa-play" aria-hidden="true"></i>
            </button>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h2>
              Apply to Study Abroad with ambition
            </h2>
          
               <ol>
                <br>
                <li> Select Your Country</li>
                <li> Choose Your University</li>
                <li> Pick a College</li>
                <li> Select Your Department</li>
                <li> Review Your Choices</li>
                <li> Complete Your Application</li>
            </ol>        
          </div>
        
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end steps to applay section -->


<!-- Destinations section -->
<section class="price_section layout_padding">
  <div class="container">
      <div class="heading_container heading_center">
          <h2>
              Study Destinations
          </h2>
          <div class="heading_container heading_center">
            <p>
                There is a wide variety of countries .
  
            </p>
        </div>
      </div>
    
    
      <div class="price_container">
          @foreach($cou as $country)
          <div class="box">
              <div class="detail-box" style="padding-bottom: 15px; height: 240px;  ">
                  <img  src="{{ asset('images/' . $country->image) }}"class="mb-12" style="width:260px ;   height: 180px;padding-bottom: 15px " alt="{{ $country->name }}">
                  <a href="{{ route('countryDetailes', $country->id) }}"> <strong>
                      {{ $country->name }} </strong>
                  </a>
              </div>
          </div>
          @endforeach
      </div>
  </div>
</section>



<!-- Destinations section -->

<!-- universites section -->


<section class="service_section layout_padding">
  <div class="container">
      <div class="heading_container heading_center">
          <h2>
            Our Universities
          </h2>
      </div>
      <div class="heading_container heading_center">
          <p>
              There is a wide variety of universities in different cities.

          </p>
      </div>
  </div>
  <div class="container ">
      <div class="row">

          @foreach ($unis as $uni)
              <div class="col-md-6 col-lg-4">
                  <div class="box">
                      <div>
                          <img class="uni_pict" src="{{ asset('images/' . $uni->main_image) }}"
                              alt="{{ $uni->name }}">
                      </div>
                      <div class="detail-box">
                          <h4 style="width: 300px">{{ $uni->name }}</h4>
                          <a href="{{ route('uniDetailes', ['id' => $uni->id, 'country_id' => $country->id]) }}">
                              See Details
                          </a>

                      
                          {{-- <a href="{{ route('university.details', $uni->id) }}">Read More</a> --}}
                      </div>
                  </div>
              </div>
          @endforeach


      </div>
  </div>
</section>

<!-- end universites section -->








<!-- client section -->
{{-- <section class="client_section ">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
      What Our Students Say About Us
      </h2>
      <p>
        Even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to
      </p>
    </div>
  </div>
  <div class="container px-0">
    <div id="customCarousel2" class="carousel  slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="img/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Student
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="img/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="carousel-item">
          <div class="container">
            <div class="row">
              <div class="col-md-10 mx-auto">
                <div class="box">
                  <div class="img-box">
                    <img src="img/client.jpg" alt="">
                  </div>
                  <div class="detail-box">
                    <div class="client_info">
                      <div class="client_name">
                        <h5>
                          Morojink
                        </h5>
                        <h6>
                          Customer
                        </h6>
                      </div>
                      <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <p>
                      Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
                      labore
                      et
                      dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut
                      aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                      cillum
                      dolore eu fugia
                    </p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="carousel_btn-box">
        <a class="carousel-control-prev" href="#customCarousel2" role="button" data-slide="prev">
          <i class="fa fa-angle-left" aria-hidden="true"></i>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#customCarousel2" role="button" data-slide="next">
          <i class="fa fa-angle-right" aria-hidden="true"></i>
          <span class="sr-only">Next</span>
        </a>
      </div>
    </div>
  </div>
</section> --}}
<!-- end client section -->

<!-- contact section -->
{{-- <section class="contact_section layout_padding-bottom">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        Get In Touch
      </h2>
    </div>
    <div class="row">
      <div class="col-md-8 col-lg-6 mx-auto">
        <div class="form_container">
          <form action="">
            <div>
              <input type="text" placeholder="Your Name" />
            </div>
            <div>
              <input type="email" placeholder="Your Email" />
            </div>
            <div>
              <input type="text" placeholder="Your Phone" />
            </div>
            <div>
              <input type="text" class="message-box" placeholder="Message" />
            </div>
            <div class="btn_box ">
              <button>
                SEND
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section> --}}
<!-- end contact section -->

@endsection