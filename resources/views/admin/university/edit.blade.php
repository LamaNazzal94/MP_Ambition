@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit University Information</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('universities.update', $universities->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">University Name:</label>
                <input type="text" name="name" class="form-control" placeholder="University Name" value="{{ $universities->name }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="main_image">Main Image:</label>
                <input type="file" name="main_image" class="form-control" accept="image/*">
                @if ($universities->main_image)
                    <img src="{{ url('/images/' . $universities->main_image) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('main_image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image1">Image 1:</label>
                <input type="file" name="image1" class="form-control" accept="image/*">
                @if ($universities->image1)
                    <img src="{{ url('/images/' . $universities->image1) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('image1')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image2">Image 2:</label>
                <input type="file" name="image2" class="form-control" accept="image/*">
                @if ($universities->image2)
                    <img src="{{ url('/images/' . $universities->image2) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('image2')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="image3">Image 3:</label>
                <input type="file" name="image3" class="form-control" accept="image/*">
                @if ($universities->image3)
                    <img src="{{ url('/images/' . $universities->image3) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('image3')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="accommodation">Accommodation:</label>
                <textarea id="accommodation" name="accommodation" rows="4" class="form-control" placeholder="University Accommodation" required>{{ $universities->accommodation }}</textarea>
                @error('accommodation')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="offer">Offer:</label>
                <textarea id="offer" name="offer" rows="4" class="form-control" placeholder="University Offer" required>{{ $universities->offer }}</textarea>
                @error('offer')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="ranking">Ranking:</label>
                <input type="text" name="ranking" class="form-control" placeholder="University Ranking" value="{{ $universities->ranking }}">
                @error('ranking')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="about">About University:</label>
                <textarea id="about" name="about" rows="4" class="form-control" placeholder="About University" required>{{ $universities->about }}</textarea>
                @error('about')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="requirement">University Requirement:</label>
                <textarea id="requirement" name="requirement" rows="4" class="form-control" placeholder="University Requirement" required>{{ $universities->requirement }}</textarea>
                @error('requirement')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="cost">University Cost:</label>
                <input type="text" name="cost" class="form-control" placeholder="University Cost" value="{{ $universities->cost }}">
                @error('cost')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>


            <div class="form-group">
                <label for="location">University location:</label>
                <textarea id="location" name="location" rows="4" class="form-control" placeholder="University Requirement" required>{{ $universities->requirement }}</textarea>
                @error('location')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            {{-- <div class="form-group">
                <label for="location">University Location:</label>
                <input type="text" name="location" class="form-control" placeholder="University Location" value="{{ $universities->location }}">
                @error('location')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div> --}}
            <button type="submit" class="btn btn-primary">Update University</button>
        </form>
    </div>
</div>
@endsection
