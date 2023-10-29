@extends('layouts.master')


@section('content') <!-- end header section -->
<section class="service_section layout_padding">
    <div class="container">
        <div class="heading_container heading_center">
            <h2>
            </h2>
        </div>
    </div>
    <div class="container ">
        <div class="row">

            <div class="col-md-6 col-lg-4">

                @foreach($department as $dep)
                <div class="box">
                    <div class="detail-box">
                        <img class="uni_pict" src="{{ asset('images/' . $dep->image) }}" alt="">
                        <div class="detail-box">
                            <h4>{{$dep->name}}</h4>
                            <a
                                href="{{ route('departmentDetailes', ['id' => $dep->id, 'college_id' => $college->id]) }}">
                                See Details
                            </a>
                        </div>
                    </div>

                </div>
                @endforeach
            </div>
        </div>



</section>


@endsection