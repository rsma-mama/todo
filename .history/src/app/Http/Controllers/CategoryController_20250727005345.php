<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\
class CategoryController extends Controller
{
    public function index()
    $categories = Category::all();
    return view('category', compact('categories'));

}
