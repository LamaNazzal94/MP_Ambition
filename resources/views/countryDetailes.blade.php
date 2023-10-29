@extends('layouts.master')

<!-- slider section -->


<!-- end slider section -->

<!-- first row -->
@section('content')

<section class="about_section layout_padding-bottom secoundRow">
  <div class="container  " style="margin-top:65px">
    <center> <h2> {{$countries->quote}}</h2> </center>
    <div class="row rowContainer">
      
    <div class="col-md-6 ">
        <div class="img-box">
          <br>
              {{-- <img src="images/germany1.png"  style="width:650px">  --}}
              <img src="{{ asset('images/' . $countries->image) }}"class="mb-4"  style="width:650px alt="{{ $countries->name }}">
            </i>
              </div>
      </div>
      
      <div class="col-md-6">
        
        <div class="detail-box">
          
          <div class="heading_container">
            {{-- <p style="font-size:19px ; line-height:30px">Studying in Germany offers numerous benefits for international students. The country's high-quality education system, with tuition-free or low-cost options at public universities, is a major draw. Germany boasts a wide range of programs, some taught in English, and provides a diverse, international environment. The strong economy and job opportunities after graduation make it an attractive destination. Additionally, Germany's central location in Europe, safe environment, and excellent quality of life add to its appeal. Scholarships and funding options further support students, making Germany an ideal choice for personal and academic growth.</p>     --}}
          
          <p style="font-size:19px ; line-height:30px"> {{$countries->description}}</p>           
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="service_section layout_padding">
    <div class="container">
      <div class="heading_container heading_center">
        <h2>
          {{$countries->name}} Universities
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
       
        @foreach ($university as $uni)
        <div class="col-md-6 col-lg-4">
            <div class="box">
                <div>
                    <img class="uni_pict" src="{{ asset('images/' . $uni->main_image) }}" alt="{{ $uni->name }}">
                </div>
                <div class="detail-box">
                    <h4>{{ $uni->name }}</h4>
                    <a href="{{ route('uniDetailes', ['id' => $uni->id, 'country_id' => $countries->id]) }}">
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





@endsection