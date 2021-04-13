<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;

class CommentsController extends Controller
{
    //
    public function index() {
        $comments = Comment::all();
        return view('comments.index', ['comments' => $comments,]);
    }

    public function store() {

    }

    public function edit() {

    }

    public function delete(){

    }
}
