@extends('layouts.apps')
@section('content')
<div class="row gy-6">
    <!--/ Data Tables -->
    <div class="card">
        @if(session('success'))
            <div class="alert alert-success mt-3">{{ session('success') }}</div>
        @endif
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Data Article</h5>
                <a href="{{route('article.create')}}" class="btn btn-sm btn-primary">
                    <i class="ri-add-line"></i> Add
                </a>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table table-sm table-striped table-hover align-middle">
                    <thead class="table-light">
                        <tr>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($articles as $article)
                            <tr>
                                <td>{{ $article->title }}</td>
                                <td>
                                    <p>{{ Str::limit(strip_tags($article->content), 100, '...') }}</p>
                                    <a href="{{ route('article.show', $article->id) }}" class="text-primary">Read More</a>
                                </td>
                                <td>
                                    <img src="{{ asset('storage/' . $article->image) }}" width="50" class="img-thumbnail">
                                </td>
                                <td>
                                    <span class="badge {{ $article->status ? 'bg-success' : 'bg-warning' }}">
                                        {{ $article->status ? 'Active' : 'Non-Active' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('article.edit', $article->id) }}" class="btn btn-warning btn-sm">
                                        <i class="bi bi-pencil-square"></i> Edit
                                    </a>
                                    <form action="{{ route('article.destroy', $article->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                        @csrf @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">
                                            <i class="bi bi-trash"></i> Delete
                                        </button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
@endsection