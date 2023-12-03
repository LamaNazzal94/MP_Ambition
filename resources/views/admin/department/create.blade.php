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
                        <input type="text" name="apportunities" class="form-control" placeholder="Department apportunities">
                        <span>@error('apportunities'){{$message}} @enderror</span>
                    </div>
                  
                    
                    <div class="form-group">
                        <label for="apportunitie2"></label>
                        <input type="text" name="apportunitie2" class="form-control" placeholder="Department apportunitie2">
                        <span>@error('apportunitie2'){{$message}} @enderror</span>
                    </div>
                    
                    <div class="form-group">
                        <label for="apportunitie3"></label>
                        <input type="text" name="apportunitie3" class="form-control" placeholder="Department apportunitie3">
                        <span>@error('apportunitie3'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="apportunitie4"></label>
                        <input type="text" name="apportunitie4" class="form-control" placeholder="Department apportunitie4">
                        <span>@error('apportunitie4'){{$message}} @enderror</span>
                    </div>

                    <div class="form-group">
                        <label for="apportunitie5"></label>
                        <input type="text" name="apportunitie5" class="form-control" placeholder="Department apportunitie5">
                        <span>@error('apportunitie5'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="apportunitie6"></label>
                        <input type="text" name="apportunitie6" class="form-control" placeholder="Department apportunitie6">
                        <span>@error('apportunitie6'){{$message}} @enderror</span>
                    </div>
                    <div class="form-group">
                        <label for="apportunitie7"></label>
                        <input type="text" name="apportunitie7" class="form-control" placeholder="Department apportunitie7">
                        <span>@error('apportunitie7'){{$message}} @enderror</span>
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