<?php

namespace App\Http\Controllers;

use App\Keyword;
use Illuminate\Http\Request;

class ResultsController extends Controller
{
    public function show() {
        return view('results', ['user' => User::findOrFail($id)]);
    }

    public function getKeywords(Request $request) {

        $keywords = Keyword::query()
            ->select(['id', 'keyword'])
            ->where('keyword', 'like', $request->input('keyword') . '%')
            ->get();

//        return $user->toArray();

        return response()->json([
            'keywords' => $keywords,
        ]);
    }
}
