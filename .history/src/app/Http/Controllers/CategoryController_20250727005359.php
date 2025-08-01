<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models≠
class CategoryController extends Controller
{
    public function index()
    $categories = Category::all();
    return view('category', compact('categories'));

}
