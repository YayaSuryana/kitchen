<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnsplashController extends Controller
{
    public function randomImage()
    {
        $accessKey = config('services.unsplash.access_key');
        $response = Http::get("https://api.unsplash.com/photos/random", [
            'client_id' => $accessKey,
            'query' => 'food','fruits','restorant' // Sesuaikan kategori gambar
        ]);

        if ($response->successful()) {
            $image = $response->json();
            return view('unsplash', ['image' => $image]);
        }

        return abort(500, 'Gagal mengambil gambar dari Unsplash');
    }
}
