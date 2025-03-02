<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;
use App\Models\Article;
use App\Models\About;
use App\Models\Product;
use App\Models\Testimoni;
class LandingController extends Controller
{
    // public function index(){
    //     $accessKey = config('services.unsplash.access_key');

    //     $response = Http::get("https://api.unsplash.com/photos/random", [
    //         'client_id' => $accessKey,
    //         'query' => 'food,fruits,restaurant', // Perbaikan format query
    //         'count' => 5, // Ambil 5 gambar
    //         'w' => 800, // Lebar gambar 800px
    //         'h' => 600  // Tinggi gambar 600px
    //     ]);

    //     if ($response->successful()) {
    //         $images = $response->json();
    //         return view('welcome', ['images' => $images]);
    //     }

    //     return abort(500, 'Gagal mengambil gambar dari Unsplash');
    // }
    public function index()
    {
        // $accessKey = config('services.unsplash.access_key');

        // try {
        //     // Ambil 5 gambar buah & sayuran
        //     $response = Http::get("https://api.unsplash.com/photos/random?client_id={$accessKey}&count=5&query=fruits,vegetables&orientation=portrait");

        //     // Ambil 1 gambar tentang supplier
        //     $response2 = Http::get("https://api.unsplash.com/photos/random?client_id={$accessKey}&count=1&query=supplier&orientation=portrait");

        //     $response3 = Http::get("https://api.unsplash.com/photos/random?client_id={$accessKey}&count=1&query=meat&orientation=portrait");
        //     $response4 = Http::get("https://api.unsplash.com/photos/random?client_id={$accessKey}&count=1&query=vegetables&orientation=portrait");
        //     $response5 = Http::get("https://api.unsplash.com/photos/random?client_id={$accessKey}&count=1&query=herbs&orientation=portrait");
        //     $response6 = Http::get("https://api.unsplash.com/photos/random?client_id={$accessKey}&count=1&query=healthyfood&orientation=portrait");

        //     // Cek apakah permintaan berhasil, jika gagal kembalikan array kosong
        //     $images = $response->successful() ? $response->json() : [];
        //     $images_about = $response2->successful() ? $response2->json() : [];
        //     $meat = $response3->successful() ? $response3->json() : [];
        //     $vegetable = $response4->successful() ? $response4->json() : [];
        //     $herb = $response5->successful() ? $response5->json() : [];
        //     $healty = $response6->successful() ? $response6->json() : [];

        //     return view('welcome', [
        //         'images' => $images, 
        //         'about' => $images_about[0] ?? null, // Pastikan jika kosong tidak error
        //         'meat' => $meat[0] ?? null,
        //         'herb' => $herb[0] ?? null,
        //         'vegetable' => $vegetable[0] ?? null,
        //         'healty' => $healty[0] ?? null
        //     ]);

        // } catch (\Exception $e) {
        //     // Jika terjadi error, tampilkan halaman dengan data kosong
        //     return view('welcome', [
        //         'images' => [],
        //         'about' => null,
        //         'meat' => null,
        //         'herb' => null,
        //         'vegetable' => null,
        //         'healty' => null
        //     ]);
        // }


        $carousels = About::where('status', 1)->latest()->get();
        $articles = Article::where('status', 1)->latest()->get();
        $article_paginate = Article::where('status', 1)->latest()->paginate(8); // ✅ tetap tanpa get()
        $products = Product::where('status', 1)->get();
        $testimonies = Testimoni::where('status', 1)->latest()->get();

        return view('welcome', compact(
            'carousels', 'articles', 'article_paginate', 'products', 'testimonies'
        ));

    }

    public function show($id)
    {
        $article = Article::findOrFail($id); // Pastikan artikel ditemukan

        return view('article', compact('article'));
    }

    public function show_articles(){
        $article = Article::latest()->get();
        return view('all_article', compact('article'));
    }
}
