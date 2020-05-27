<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function show() {
        return view('results', ['user' => User::findOrFail($id)]);
    }
}
