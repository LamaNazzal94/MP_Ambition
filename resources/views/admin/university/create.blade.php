@extends('admin.layout.master')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create new University </h3>
        <div class="card-body">
                <form action="{{ url('/universities') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label for="UniversityName"></label>
                    <input type="text" name="name" class="form-control" placeholder="University Name">
                    <span>@error('name'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="main_image"></label>
                    <input type="file" name="main_image" class="form-control" placeholder="University Image">
                    <span>@error('main_image'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                        <label for="image1"></label>
                        <input type="file" name="image1" class="form-control" placeholder="University Image1">
                        <span>@error('image1'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="image2"></label>
                        <input type="file" name="image2" class="form-control" placeholder="University Image2">
                        <span>@error('image2'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="image3"></label>
                        <input type="file" name="image3" class="form-control" placeholder="University Image3">
                        <span>@error('image3'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="accommodation"></label>
                        <textarea id="accommodation" name="accommodation" rows="4"  class="form-control" placeholder="University accommodation" required></textarea>
                        <span>@error('accommodation'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="offer"></label>
                        <textarea id="offer" name="offer" rows="4"  class="form-control" placeholder="University offer" required></textarea>
                        <span>@error('offer'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="ranking"></label>
                        <input type="text" name="ranking" class="form-control" placeholder="University ranking">
                        <span>@error('ranking'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="about"></label>
                        <textarea id="about" name="about" rows="4"  class="form-control" placeholder="About University" required></textarea>
                        <span>@error('about'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="requirement"></label>
                        <textarea id="requirement" name="requirement" rows="4"  class="form-control" placeholder="University Requirement" required></textarea>
                        <span>@error('requirement'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="cost"></label>
                        <input type="text" name="cost" class="form-control" placeholder="University Cost">
                        <span>@error('cost'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="location"></label>
                        <textarea id="location" name="location" rows="4"  class="form-control" placeholder="University location" required></textarea>
                        <span>@error('location'){{$message}} @enderror</span>
                    </div>

                    {{-- <div class="form-group">
                        <label for="location"></label>
                        <input type="text" name="location" class="form-control" placeholder="University location">
                        <span>@error('location'){{$message}} @enderror</span>
                    </div> --}}

                </div>
            
       
                <select name="country">
                    @foreach ($country as $item)
                         <!-- Define the options -->
                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                    @endforeach
                   </select>
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