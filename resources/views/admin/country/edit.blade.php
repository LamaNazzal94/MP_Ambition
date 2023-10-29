@extends('admin.layout.master')
@section('content')
<div class="card">
    <h3 class="card-title">Countries</h3>
    <div class="card-header">Edit Country Information</div>
    <div class="card-body">
        <form action="{{ route('countries.update', $countries->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('patch')
            <div class="form-group">
                <label for="name">Country Name:</label>
                <input type="text" name="name" class="form-control @error('name') is-invalid @enderror" required
                    value="{{ $countries->name }}">
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Country Description:</label>
                <textarea id="description" name="description" rows="4" class="form-control @error('description') is-invalid @enderror" required>
                    {{ $countries->description }}
                </textarea>
                @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="quote">Country Quote:</label>
                <input type="text" name="quote" class="form-control @error('quote') is-invalid @enderror" required
                    value="{{ $countries->quote }}">
                @error('quote')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image1">Image 1:</label>
                <input type="file" name="image1" class="form-control" accept="image/*">
                @if ($countries->image1)
                    <img src="{{ url('/images/' . $countries->image1) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('image1')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
