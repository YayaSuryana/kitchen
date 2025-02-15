@extends('layouts.apps')
@section('content')
<div class="row gy-6">
    <!--/ Data Tables -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Edit About</h5>
                <a href="{{route('about.index')}}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('about.update', $about->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name', $about->name) }}">
                    @error('name') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Current Image</label><br>
                    @if($about->image)
                        <img src="{{ asset('storage/' . $about->image) }}" width="100" class="mb-2">
                    @else
                        <p>No Image</p>
                    @endif
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Upload New Image (Optional)</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="1" {{ $about->status ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ !$about->status ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('about.index') }}" class="btn btn-secondary">Cancel</a>
            </form>
        </div>
    </div>
</div>
@endsection