<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Product;
use App\Models\Article;
use App\Models\Testimoni;

class DashboardController extends Controller
{
    public function index(){
        return view('dashboard', [
            'about' => About::count(),
            'about_aktif' => About::where('status', 1)->count(),
            'about_non_aktif' => About::where('status', 0)->count(),

            'product' => Product::count(),
            'product_aktif' => Product::where('status', 1)->count(),
            'product_non_aktif' => Product::where('status', 0)->count(),

            'article' => Article::count(),
            'article_published' => Article::where('status', 1)->count(),
            'article_draft' => Article::where('status', 0)->count(),

            'testimoni' => Testimoni::count(),
            'testimoni_approved' => Testimoni::where('status', 1)->count(),
            'testimoni_pending' => Testimoni::where('status', 0)->count(),
        ]);
    }
}
