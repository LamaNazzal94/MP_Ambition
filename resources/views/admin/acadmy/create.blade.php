@extends('admin.layout.master')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Create new acadmy </h3>
            <div class="card-body">
                <form action="{{ url('/lanAcadimes') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="AcadmyName"></label>
                        <input type="text" name="name" class="form-control" placeholder="Acadmy Name">
                        <span>
                            @error('name')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="image"></label>
                        <input type="file" name="image" class="form-control" placeholder="Acadmy Image">
                        <span>
                            @error('image')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="description"></label>
                        <input type="text" name="description" class="form-control" placeholder="Acadmy description">
                        <span>
                            @error('description')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>
                    <div class="form-group">
                        <label for="location"></label>
                        <input type="text" name="location" class="form-control" placeholder="Acadmy location">
                        <span>
                            @error('location')
                                {{ $message }}
                            @enderror
                        </span>
                    </div>


            </div>
            <br>
            <button type="submit" class="btn btn-success">
                Add Acadmy
            </button>
            <br>
        </div>
        </form>
    </div>
    </div>
    </div>
@endsection
