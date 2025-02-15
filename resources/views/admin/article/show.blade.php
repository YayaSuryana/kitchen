@extends('layouts.apps')
@section('content')
<div class="row gy-6">
    <!--/ Data Tables -->
    <div class="card">
        <div class="card-header">
            <div class="d-flex align-items-center justify-content-between">
                <h5 class="card-title m-0 me-2">Detail Article</h5>
                <a href="{{route('article.index')}}" class="btn btn-sm btn-primary">Back</a>
            </div>
        </div>

        <div class="card-body">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="card-title m-0 me-2 text-center">{{$article->title}}</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center"> 
                    <img src="{{ asset('storage/'.$article->image) }}" 
                        alt="{{ $article->title }}" 
                        class="w-50 img-thumbnail rounded d-inline-block" 
                        style="max-height: 500px; object-fit: cover;">
                </div>
            </div>

            <div class="row">
                <p>{!! strip_tags($article->content, '<p><br><b><i><u><strong><em><ul><ol><li><h1><h2><h3><h4><h5><h6>') !!}</p>
            </div>
        </div>
    </div>
</div>
@endsection