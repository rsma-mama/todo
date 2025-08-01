<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public 
    $categories = Category::all();
    return view('index', compact('categories'));

}
