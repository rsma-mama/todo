<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use 
class CategoryController extends Controller
{
    public function index()
    $categories = Category::all();
    return view('category', compact('categories'));

}
