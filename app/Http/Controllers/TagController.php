<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Tag;

class TagController extends Controller
{
    public function create() {
        return view('tag.create');
    }
    public function store(Request $request) {
        $request->validate(['name' => 'required']);
        $tag = Tag::create(['name' => $request->name]);
        return redirect()->back()->with('message', 'categoria inserita con successo');
    }
}
