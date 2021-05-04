<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\UserSearch\UserSearch;

class SearchController extends Controller
{
    public function filter(Request $request)
    {
        // dd(1);
        $results = \App\Models\Post::FilterBy($request->all())->get();
        $resultTag = \App\Models\Post::with('tags')->FilterBy($request->all())->get();
        $resultTag1 = \App\Models\Post::FilterBy($request->all())->get();
        var_dump(json_decode($resultTag));
        var_dump(json_decode($resultTag1));
        // return UserSearch::apply($request);
    }
}
