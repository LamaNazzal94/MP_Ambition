@extends('layouts.master')

<!-- slider section -->


<!-- end slider section -->

<!-- first row -->
@section('content')
<section class="price_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2> Language Academies</h2>
            </div>
          
          
            <div class="price_container">
                @foreach($academies as $academy)
                <div class="box">
                    <div class="detail-box" style="padding-bottom: 15px ">
                        <img src="{{ asset('images/' . $academy->image) }}" class="mb-12" style="width: 260px; height: 200px; padding-bottom: 15px " alt="{{ $academy->name }}">
                        <h5 style="color: #023047"><strong>{{ $academy->name }}</strong></h5>
                        <p> <a href="{{ $academy->description }}" target="_blank">{{ $academy->name }} website</a></p>

                            <p style="color: #023047">{{ $academy->location}}<p>

                    </div>
                </div>
            @endforeach
            </div>
        </div>
      </section>
@endsection
