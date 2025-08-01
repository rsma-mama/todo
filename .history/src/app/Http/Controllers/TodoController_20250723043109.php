<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Conta;

class TodoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function store(Request $request)
    {
       $contact=$request->only([content]);
       Contact::create($contact);
    }
}
