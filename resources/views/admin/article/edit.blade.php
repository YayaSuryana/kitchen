@extends('layouts.apps')
@section('content')
<div class="row gy-6">
    <!--/ Data Tables -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Edit Article</h5>
                <a href="{{route('article.index')}}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>

        <div class="card-body">
            <form action="{{ route('article.update', $article->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="mb-3">
                    <label for="title" class="form-label">Title</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title', $article->title) }}">
                    @error('title') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label">Content</label>
                    <textarea class="form-control @error('content') is-invalid @enderror" id="content" name="content" rows="10" cols="80">{{ old('content', $article->content) }}</textarea>
                    @error('content') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    
                </div>

                <div class="mb-3">
                    <label for="image" class="form-label">Image</label>
                    <input type="file" class="form-control @error('image') is-invalid @enderror" id="image" name="image">
                    @error('image') <div class="invalid-feedback">{{ $message }}</div> @enderror
                    @if($article->image)
                        <img src="{{ asset('storage/' . $article->image) }}" alt="Current Image" width="100">
                    @endif
                </div>

                <div class="mb-3">
                    <label for="status" class="form-label">Status</label>
                    <select class="form-control @error('status') is-invalid @enderror" id="status" name="status">
                        <option value="1" {{ old('status', $article->status) == 1 ? 'selected' : '' }}>Active</option>
                        <option value="0" {{ old('status', $article->status) == 0 ? 'selected' : '' }}>Inactive</option>
                    </select>
                    @error('status') <div class="invalid-feedback">{{ $message }}</div> @enderror
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>

        </div>
    </div>
</div>
@endsection