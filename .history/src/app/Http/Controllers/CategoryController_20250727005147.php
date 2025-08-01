<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    pu
    $categories = Category::all();
    return view('index', compact('categories'));

}
