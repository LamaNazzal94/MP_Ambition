@extends('layouts.master')

<!-- slider section -->


<!-- end slider section -->

<!-- first row -->
@section('content')   <!-- first row -->
<br><br>

<section class="about_section layout_padding-bottom secoundRow">
  <div class="container">
    <div class="heading_container heading_center">
      <h2>
        {{$department->name}} Department 
      </h2>
    </div>
    <div class="heading_container heading_center">
      <p>

</p>
    </div>
  </div>

  <div class="container">
    <div class="row ">
     
      <div class="col-md-6">
        <div class="detail-box rowContainer">
          <div class="heading_container">
            <h4><strong>Introduction</strong></h4>
            <p> {{$department->introduction}}</p>
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

<section class="about_section layout_padding-bottom secoundRow">
  <div class="container  ">
    <div class="row rowContainer">
      <div class="col-md-6">
        <div class="detail-box">
          <div class="heading_container">
            <h4><strong>{{$department->name}} offers a wide array of career opportunities spanning various sectors:</strong></h4>
            <ol>
              <li>{{$department->apportunities}}</li>
              <li>Embedded Systems</li>
              <li>Hardware Design</li>
             <li>Network Engineering</li>
              <li>Cybersecurity</li>
              <li>College of Planning, Building and Environment</li>
              <li>Data Science</li>

            </ol>
           
            <div class="cost">
              <h4><strong>The cost</strong></h4>
              <p>{{$department->cost}}</p>
            </div>
            <div class="cost">
              <br> <br >
              <h4><strong>Duration of study </strong></h4>
              <p>{{$department->duration_study}}</p>
            </div>



{{-- 

            <div class="">
              <br> <br>
              <h4>Apply Now</h4>
              @if (auth()->check())
                  <form method="get" action="{{ route('applyController') }}">
                      <button type="submit" style="background-color: initial; border: none; color: white;">
                          Apply Now
                      </button>
                  </form>
              @else
                  <a href="/login" style="background-color: initial; border: none; color: white; display: block; text-align: center; padding: 10px;">
                      Apply Now
                  </a>
              @endif
          </div> --}}


            <div class="">
              <br> <br >
              <h4>
              Apply Now
              </h4>
              @if (auth()->check())
              <form method="get" action="{{ route('applyController') }}">

                <button type="submit"  style="background-color: initial ; border:0ch ">
                 <a href="/applyDetailes" style="color: white " > Applay Now</a>
                </button>
              </form>
              @else
              <button type="submit"  style="background-color: initial ; border:0ch ">
                <a href="/login" style="color: white " > Applay Now</a>
               </button>
              </a>
              @endif
            </div>

          

          </div>
        </div>
      </div>
      <div class="col-md-6 ">
        <div class="img-box">
          <img src="{{asset("img/cost.jpg")}}">
        </div>
      </div>
    </div>
  </div>
</section>


<!-- third row -->




<div class="col-1">
    </div>
 
</div>



@endsection