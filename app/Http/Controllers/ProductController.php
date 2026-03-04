<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function list()
    {
        $products = [
            ['name' => 'Laptop Dell XPS 15', 'price' => 25000000],
            ['name' => 'Chuột Logitech G102', 'price' => 450000],
            ['name' => 'Bàn phím cơ Keychron', 'price' => 1500000],
            ['name' => 'MacBook Pro M3', 'price' => 40000000],
        ];

        return view('products', compact('products'));
    }
}