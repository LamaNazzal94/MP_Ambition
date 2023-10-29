@extends('admin.layout.master')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create new Department </h3>
        <div class="card-body">
                <form action="{{ url('/departments') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                <div class="form-group">
                    <label for="DepartmentName"></label>
                    <input type="text" name="name" class="form-control" placeholder="Department Name">
                    <span>@error('name'){{$message}} @enderror</span>
                </div>
               
                <div class="form-group">
                        <label for="image"></label>
                        <input type="file" name="image" class="form-control" placeholder="Department Image1">
                        <span>@error('image'){{$message}} @enderror</span>
                    </div>
                  
                    <div class="form-group">
                        <label for="introduction"></label>
                        <textarea id="introduction" name="introduction" rows="4"  class="form-control" placeholder="Department introduction" required></textarea>
                        <span>@error('introduction'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="apportunities"></label>
                        <textarea id="apportunities" name="apportunities" rows="4"  class="form-control" placeholder="Department apportunities" required></textarea>
                        <span>@error('apportunities'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="cost"></label>
                        <input type="text" name="cost" class="form-control" placeholder="Department Cost">
                        <span>@error('cost'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="duration_study"></label>
                        <input type="text" name="duration_study" class="form-control" placeholder=" duration_study">
                        <span>@error('duration_study'){{$message}} @enderror</span>
                    </div>
                    


                </div>
            
       
                <select name="college">
                    @foreach ($college as $item)
                         <!-- Define the options -->
                        <option value="{{$item -> id}}">{{$item -> name}}</option>
                    @endforeach
                   </select>
                    <br>
                    <button type="submit" class="btn btn-success">
                        Add Department
                    </button>
                    <br>
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection