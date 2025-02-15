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
                <h5 class="card-title m-0 me-2">Data Testimoni</h5>
                <a href="{{route('testimoni.create')}}" class="btn btn-sm btn-primary">
                    <i class="ri-add-line"></i> Add
                </a>
            </div>
            <div class="table-responsive">
                <table id="myTable" class="display table table-sm">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Image</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($testimonies as $testimoni)
                            <tr>
                                <td>{{ $testimoni->name }}</td>
                                <td>{{ $testimoni->description }}</td>
                                <td><img src="{{ asset('storage/' . $testimoni->image) }}" width="50"></td>
                                <td>
                                    @php
                                        $active = '<span class="badge bg-label-success rounded-pill">Active</span>';
                                        $non_active = '<span class="badge bg-label-warning rounded-pill">Non-Active</span>';
                                    @endphp

                                    {!! $testimoni->status ? $active : $non_active !!}
                                </td>
                                <td>
                                    <a href="{{ route('testimoni.edit', $testimoni->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="{{ route('testimoni.destroy', $testimoni->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
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