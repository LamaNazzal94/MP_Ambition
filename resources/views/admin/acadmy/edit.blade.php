@extends('admin.layout.master')
@section('content')
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Edit Acadmy Information</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('lanAcadimes.update', $aca->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PATCH')
            <div class="form-group">
                <label for="name">Acadmy Name:</label>
                <input type="text" name="name" class="form-control" placeholder="Acadmy Name" value="{{ $aca->name }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>

            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" class="form-control" accept="image/*">
                @if ($aca->image)
                    <img src="{{ url('/images/' . $aca->image) }}" alt="Current Image" style="max-width: 200px;">
                @else
                    <p>No image available.</p>
                @endif
                @error('image')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="description">Acadmy description:</label>
                <input type="text" name="description" class="form-control" placeholder="Acadmy description" value="{{ $aca->description }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="form-group">
                <label for="location">Acadmy location:</label>
                <input type="text" name="location" class="form-control" placeholder="Acadmy location" value="{{ $aca->location }}">
                @error('name')
                <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
      
            <button type="submit" class="btn btn-primary">Update Acadmy</button>
        </form>
    </div>
</div>
@endsection
