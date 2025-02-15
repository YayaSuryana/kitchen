@extends('layouts.apps')

@section('content')
<div class="container">
    <h2 class="mb-4">Dashboard</h2>
    
    <div class="row g-4">
        <!-- About Section -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-info-circle fa-3x text-primary mb-3"></i>
                    <h5 class="card-title">About</h5>
                    <p class="card-text">Total: <strong>{{$about}}</strong></p>
                    <span class="badge bg-success">Active: {{$about_aktif}}</span>
                    <span class="badge bg-danger">Inactive: {{$about_non_aktif}}</span>
                </div>
                <div class="card-footer bg-light text-center">
                    <a href="{{ route('about.index') }}" class="btn btn-sm btn-primary mt-3">Manage</a>
                </div>
            </div>
        </div>

        <!-- Product Section -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-box-open fa-3x text-success mb-3"></i>
                    <h5 class="card-title">Products</h5>
                    <p class="card-text">Total: <strong>{{$product}}</strong></p>
                    <span class="badge bg-success">Active: {{$product_aktif}}</span>
                    <span class="badge bg-danger">Inactive: {{$product_non_aktif}}</span>
                </div>
                <div class="card-footer bg-light text-center">
                    <a href="{{ route('product.index') }}" class="btn btn-sm btn-primary mt-3">Manage</a>
                </div>
            </div>
        </div>

        <!-- Article Section -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-newspaper fa-3x text-warning mb-3"></i>
                    <h5 class="card-title">Articles</h5>
                    <p class="card-text">Total: <strong>{{$article}}</strong></p>
                    <span class="badge bg-success">Published: {{$article_published}}</span>
                    <span class="badge bg-danger">Drafts: {{$article_draft}}</span>
                </div>
                <div class="card-footer bg-light text-center">
                    <a href="{{ route('article.index') }}" class="btn btn-sm btn-primary mt-3">Manage</a>
                </div>
            </div>
        </div>

        <!-- Testimoni Section -->
        <div class="col-md-3">
            <div class="card shadow-sm border-0">
                <div class="card-body text-center">
                    <i class="fas fa-comments fa-3x text-info mb-3"></i>
                    <h5 class="card-title">Testimoni</h5>
                    <p class="card-text">Total: <strong>{{$testimoni}}</strong></p>
                    <span class="badge bg-success">Approved: {{$testimoni_approved}}</span>
                    <span class="badge bg-danger">Pending: {{$testimoni_pending}}</span>
                </div>
                <div class="card-footer bg-light text-center">
                    <a href="{{ route('testimoni.index') }}" class="btn btn-sm btn-primary mt-3">Manage</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
