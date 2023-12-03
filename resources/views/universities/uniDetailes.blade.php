@extends('layouts.master')

<!-- slider section -->


<!-- end slider section -->

<!-- first row -->
@section('content')
    <!-- slider section -->

    <section style="background-color: #ffffff; padding: 20px;" class="slider_section slider">
        <div id="customCarousel1" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box ">
                                    <h1 class="sliderBox">
                                        AMBITION<br> Education Consultant and Student Agency
                                    </h1>
                                    <p class="sliderBox">Sometime the first step can be the hardest but at AMBITION- your
                                        trusted education
                                        agent - we make it
                                        easy. Chat to our education consultants today and be one of the thousands of
                                        students a year we help
                                        with studying abroad.</p>
                                    <div class="btn-box">
                                        <a href="" class="btn-1">
                                            Read More
                                        </a>
                                        <a href="contact.php" class="btn-2">
                                            Contact Us
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class=" col-lg-10 mx-auto">
                                        <div class="img-box">
                                            <img class="sliderimage" src="{{ asset('images/' . $university->image1) }}"
                                                alt="{{ $university->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>






                <div class="carousel-item sliderBox">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box ">
                                    <h1 class="sliderBox">
                                        AMBITION <br>
                                        Education Consultant and Student Agency
                                    </h1>

                                    <p class="sliderBox">Sometime the first step can be the hardest but at AMBITION- your
                                        trusted education
                                        agent - we make it
                                        easy. Chat to our education consultants today and be one of the thousands of
                                        students a year we help
                                        with studying abroad.</p>
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
                                            <img class="sliderimage" src="{{ asset('images/' . $university->image2) }}"
                                                alt="{{ $university->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item sliderBox">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="detail-box ">
                                    <h1 class="sliderBox">
                                        Fast & Secure <br>
                                        Web Hosting
                                    </h1>

                                    <p class="sliderBox">Sometime the first step can be the hardest but at AMBITION- your
                                        trusted education
                                        agent - we make it
                                        easy. Chat to our education consultants today and be one of the thousands of
                                        students a year we help
                                        with studying abroad.</p>
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
                                            <img class="sliderimage" src="{{ asset('images/' . $university->image3) }}"
                                                alt="{{ $university->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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

        </div>
    </section>
    <!-- end slider section -->

    <!-- first row -->

    <section class="about_section layout_padding-bottom firstRow">
        <div class="container">
            <div class="row ">
                <div class="col-md-6">
                    <div class="detail-box rowContainer">
                        <div class="heading_container">
                            <h4 class="white"><strong>Info</strong></h4>
                            <ul class="white">
                                <li>Country : {{ $country->name }}</li>
                                <li>Year Founded : 1946</li>
                                <li>Accommodation : {{ $university->accommodation }}</li>
                                <li>Conditional Offer Letter : {{ $university->offer }}</li>
                                <li>Ranking : {{ $university->ranking }}
                            </ul>
                            </li>
                            <br>
                            <div class="aboutUni white">
                                <h4 class="white"><strong>About University</strong></h4>
                                <p style="color: white ;">{{ $university->about }}</p>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-md-6 ">
                    <div style=" " class="infoimg rowContainer">
                        <img class="infoimg" style=" height: 400px; width: 100%; " src="{{ asset('img/hero.png') }}">
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- secound row -->


    <section class="about_section layout_padding-bottom" style="background: #ffffff">
        <div class="container  ">
            <br> <br>
            <div class="row">
                <div class="col-md-6 ">
                    <div class="img-box">
                        <img src={{ asset('img/features-online-exam.png') }} alt="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="detail-box">
                        <div class="heading_container">
                            <div class="AdmissionRequirements">
                                <h4><strong>Admission requirements</strong></h4>
                                <ul>
                                   <li>The student must have a grade higher than very good.</li>
                                   <li>The student must have obtained a German language certificate .<a id="lanAc"
                                        href="{{ route('acadmiesDetailes')}}">Language academies</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="cost">
                                <h4><strong>The cost</strong></h4>
                                <p>The expected tuition fees for studying at the Berlin University of Technology in Germany
                                    are
                                    equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the
                                    Berlin
                                    University of Technology expenses in Germany depend on the required academic
                                    specialization.</p>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>

    {{-- pictior --}}
    {{-- <div class="col-md-6 ">
        <div class="img-box">
          <img  src="{{ asset('img/cost.jpg') }}">
        </div>
      </div> --}}
    </div>
    </div>
    </section>
    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    {{ $university->name }} colleges
                </h2>
            </div>
            <div class="heading_container heading_center">
                <p>
                    There is a wide variety of colleges in different departments

                </p>
            </div>
        </div>
        <div class="container ">
            <div class="row">

                @foreach ($collages as $college)
                    <div class="col-md-6 col-lg-4">
                        <div class="box">
                            <div>
                                <img class="uni_pict" src="{{ asset('images/' . $college->image) }}"
                                    alt="{{ $college->name }}">
                            </div>
                            <div class="detail-box">
                                <h4>{{ $college->name }}</h4>

                                <a
                                    href="{{ route('collegeDetailes', ['id' => $college->id, 'uni_id' => $university->id]) }}">
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




    <!-- third row -->

    <section class="about_section layout_padding-bottom thirdRow">
        <div class="container  ">
            <div class="row rowContainer">
                <div class="col-12 col-md-12">
                    <div class="detail-box">
                        <div class="col-12" id="locationContainer">
                            <div class="location">
                                <h4><strong>location</strong> </h4>
                                <i class="fas fa-map-marker"
                                    style="font-size:20px;color:#db4437;text-shadow:2px 2px 4px #000000;"></i>
                                    
                            </div>
                            <div class="AdmissionRequirements">
                                {!! $university->location !!}

                            </div>
                            <div class="AdmissionRequirements">
                            </div>
                            <div class="cost">
                            </div>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </section>



    <!-- <div class="col-1">
        </div>
        <div class="col-6"> -->
    <!-- <div class="cost">
    <h4><strong>The cost</strong></h4>
    <p>The expected tuition fees for studying at the Berlin University of Technology in Germany are equivalent to 350 US dollars, and some major majors may reach 1000 US dollars, and the Berlin University of Technology expenses in Germany depend on the required academic specialization.</p>
    </div> -->
    <!-- <div class="studyOptions">
            <h4><strong>Study options</strong></h4>
            <ul>
              <li>Bachelor's.</li>
              <li>Master's.</li>
              <li>Ph.D.</li>
            </ul>
          </div>
          <div class="uniLink">
            <h4><strong>Universityy website link:</strong></h4>
            <a href="https://www.tu.berlin/">Kaiserslautern University of Technology</a>
          </div>
        </div>
      </div>

    </div> -->



    <!-- <div id="map" style="width: 100%; height: 400px;"></div> -->
    <!-- <script async defer
        src="https://www.google.com/maps/place/RPTU+Kaiserslautern/@49.4247406,7.7385309,13.68z/data=!4m14!1m7!3m6!1s0x47966d5189fba81f:0x8ab04632090ea019!2sRPTU+Kaiserslautern!8m2!3d49.4253891!4d7.7553196!16zL20vMGRmMnBm!3m5!1s0x47966d5189fba81f:0x8ab04632090ea019!8m2!3d49.4253891!4d7.7553196!16zL20vMGRmMnBm?entry=ttu">
    </script> -->
@endsection
