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
                <h5 class="card-title m-0 me-2">Data About</h5>
                <a href="{{route('about.create')}}" class="btn btn-sm btn-primary">
                    <i class="ri-add-line"></i> Add
                </a>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="table display table-sm">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($abouts as $about)
                        <tr>
                            <td>{{ $about->name }}</td>
                            <td>
                                @if($about->image)
                                    <img src="{{ asset('storage/' . $about->image) }}" width="50">
                                @else
                                    No Image
                                @endif
                            </td>
                            <td>{{ $about->status ? 'Active' : 'Inactive' }}</td>
                            <td>
                                <a href="{{ route('about.edit', $about->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('about.destroy', $about->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@extends('layouts.apps')