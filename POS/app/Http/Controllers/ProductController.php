<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Menampilkan kategori Food & Beverage
    public function foodBeverage()
    {
        return view('products.food_beverage');
    }

    // Menampilkan kategori Beauty & Health
    public function beautyHealth()
    {
        return view('products.beauty_health');
    }

    // Menampilkan kategori Home Care
    public function homeCare()
    {
        return view('products.home_care');
    }

    // Menampilkan kategori Baby & Kid
    public function babyKid()
    {
        return view('products.baby_kid');
    }
}
?>