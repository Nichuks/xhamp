<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        //Laravel question how to get all resource data from model in index controller 
        //method so that i can display it index view
        $comments = Comment::all();

        //dd($comments); //var_dump + die = dd

        return view('comments.index', ['comments' => $comments]);
    }

    public function create() {
        return view('comments.create');
    }
    public function store(Request $request) {
        // dd($request);
        Comment::create([
            'content' => $request["content"]
        ]);
        // return "store method called";

        return redirect('/comments');
    }
}
