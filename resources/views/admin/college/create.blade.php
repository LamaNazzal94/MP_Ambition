@extends('admin.layout.master')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create new College </h3>
        <div class="card-body">
                <form action="{{ url('/colleges') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label for="CollegeName"></label>
                    <input type="text" name="name" class="form-control" placeholder="College Name">
                    <span>@error('name'){{$message}} @enderror</span>
                </div>
                <div class="form-group">
                    <label for="image"></label>
                    <input type="file" name="image" class="form-control" placeholder="College Image">
                    <span>@error('main_image'){{$message}} @enderror</span>
                </div>

                </div>
            
       
                <select name="university">
                    @foreach ($university as $item)
                         <!-- Define the options -->
                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                    @endforeach
                   </select>
                    <br>
                    <button type="submit" class="btn btn-success">
                        Add College
                    </button>
                    <br>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection