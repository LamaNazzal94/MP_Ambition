@extends('admin.layout.master')
@section('content')

<div class="card">
    <div class="card-header">
    <h3 class="card-title">Create new Country </h3>
        <div class="card-body">
            <form action="{{url('/countries') }}" method="POST" enctype="multipart/form-data">
                @csrf
                
                <div class="form-group">
                    <label for="name"></label>
                    <input type="text" name="name" class="form-control" placeholder="Country Name">
                    <span>@error('name'){{$message}} @enderror</span>


                </div>
               
            <div class="form-group">
                <label for="image">Country Image</label>
                <input type="file" name="image" class="form-control" placeholder="Country Image">
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


                <div class="form-group">
                    <label for="description"></label>
                    <input type="text" name="description" class="form-control" placeholder="Country Description">
                    <span>@error('description'){{$message}} @enderror</span>


                </div>
                <div class="form-group">
                    <label for="quote"></label>
                    <input type="text" name="quote" class="form-control" placeholder="Country Quote">
                    <span>@error('quote'){{$message}} @enderror</span>


                </div>
                    

                </div>
            
       
                    
                    <br>
                    <button type="submit" class="btn btn-success">
                        Add country
                    </button>
                    {{-- <a class="btn btn-primary  mb-3" type="submit" >Add country  </a> --}}

                    {{-- <input type="submit" value="Add Country" class="btn btn-success" style="width:10% "><br> --}}
                </div>
            </form>
        </div>
    </div>
    </div>
@endsection