@extends('admin.layout.master')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create new apply </h3>
        <div class="card-body">
                <form action="{{ url('/applies') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label for="first_name"></label>
                    <input type="text" name="first_name" class="form-control" placeholder="First name">
                    <span>@error('first_name'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                        <label for="last_name"></label>
                        <input type="text" name="last_name" class="form-control" placeholder="Last name">
                        <span>@error('first_name'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="email"></label>
                        <input type="text" name="email" class="form-control" placeholder="email">
                        <span>@error('first_name'){{$message}} @enderror</span>
                    </div>
                <div class="form-group">
                    <label for="high_school_certificate"></label>
                    <input type="file" name="high_school_certificate" class="form-control" placeholder="high school certificate">
                    <span>@error('high_school_certificate'){{$message}} @enderror</span>
                </div>
                    <div class="form-group">
                        <label for="age"></label>
                        <input type="number" name="age" class="form-control" placeholder="age">
                        <span>@error('cost'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="nationalID"></label>
                        <input type="file" name="nationalID" class="form-control" placeholder="national ID">
                        <span>@error('nationalID'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="bio"></label>
                        <input type="text" name="bio" class="form-control" placeholder="Bio">
                        <span>@error('bio'){{$message}} @enderror</span>
                    </div>
                    <select name="department">
                        @foreach ($department as $item)
                             <!-- Define the options -->
                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                        @endforeach
                       </select>
                       <br>
                       {{-- <select name="user">
                        @foreach ($user as $item)
                             <!-- Define the options -->
                            <option value="{{$item -> id}}">{{$item -> name}}</option>
                        @endforeach
                       </select> --}}
                  

                </div>
                <br>
                    <button type="submit" class="btn btn-success">
                        Add University
                    </button>
                    <br>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection