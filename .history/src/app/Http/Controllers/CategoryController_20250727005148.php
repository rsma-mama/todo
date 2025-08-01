<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    pub
    $categories = Category::all();
    return view('index', compact('categories'));

}
