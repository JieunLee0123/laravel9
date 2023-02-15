<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Blade;

class Products extends Controller
{
    function productList() {
        $total = 20;
        return Blade::render('<h1>product list ( {{ $total }} )</h1>', ['total'=>$total]);
    }

    function addProduct() {
        $newProduct = 'rose';
        return Blade::render('<h1>product {{ $newProduct }} is added</h1>', ['newProduct'=>$newProduct]);
    }

    function updateProduct() {
        $newProduct = 'rose';
        return Blade::render('<h1>product {{ $newProduct }} is updated</h1>', ['newProduct'=>$newProduct]);
    }

    function deleteProduct() {
        $product = 'rose';
        return Blade::render('<h1>product {{ $product }} is deleted</h1>', ['product'=>$product]);
    }
}
