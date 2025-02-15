
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kitchen</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Signika+Negative:wght@300..700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
  <body>
    <main>
       <div class="container">
            <div class="row gy-6">
                <!--/ Data Tables -->
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex align-items-center justify-content-between">
                            <h5 class="card-title m-0 me-2">Detail Article</h5>
                            <a href="{{route('landing')}}" class="btn btn-sm btn-primary">Back</a>
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
       </div>
    </main>
    <footer>

    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>