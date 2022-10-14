<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function __invoke(Request $request)
    {
        $carousels = [
            [
            "url" => "https://source.unsplash.com/user/bykrystal/900x300",
            "width" => "1080",
            "height" => "400"
            ],
            [
            "url" => "images/roda.jpeg/900x300",
            "width" => "1080",
            "height" => "400"
            ],
            // [
            // "url" => "https://source.unsplash.com/user/danielkorpai/900x300",
            // "width" => "1080",
            // "height" => "400"
            // ]
            ];
            return view('product', compact('carousels'));
    }
}
