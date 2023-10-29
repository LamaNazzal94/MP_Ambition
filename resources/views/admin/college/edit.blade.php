@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit College Information</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('colleges.update', $colleges->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">College Name:</label>
                <input type="text" name="name" class="form-control" placeholder="College Name" value="{{ $colleges->name }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image 1:</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if ($colleges->image)
                    <img src="{{ url('/images/' . $colleges->image) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
      
            <button type="submit" class="btn btn-primary">Update College</button>
        </form>
    </div>
</div>
@endsection
