<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function 
    $categories = Category::all();
    return view('index', compact('categories'));

}
