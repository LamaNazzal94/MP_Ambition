@extends('layouts.master')


@section('content')
    <!-- end header section -->
    <section class="service_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="heading_container heading_center">
                <h2>
                    {{ $college->name }} departments
                </h2>
            </div>
            <div class="heading_container heading_center">
                <p>
                    There is a wide variety of departments in {{ $college->name }} college

                </p>
            </div>
        </div>
        <div class="container ">
            <div class="row">
                @foreach ($department as $dep)
                    <div class="col-md-6 col-lg-4">


                        <div class="box">
                            <div class="detail-box">
                                <img class="uni_pict" src="{{ asset('images/' . $dep->image) }}" alt="">
                                <div class="detail-box">
                                    <h4>{{ $dep->name }}</h4>
                                    <a
                                        href="{{ route('departmentDetailes', ['id' => $dep->id, 'college_id' => $college->id]) }}">
                                        See Details
                                    </a>
                                </div>
                            </div>

                        </div>

                    </div>
                @endforeach
            </div>



    </section>
@endsection
