<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentController extends Controller
{
    public function index()
    {
        $comments = Comment::orderBy('id', 'desc')->paginate(5);
        return view('comments.index', compact('comments'));
    }

    public function create()
    {
        return view('comments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'comment' => 'required',
        ]);

        Comment::create($request->post());

        return redirect()->route('comments.index')->with('success', 'Comment has been created successfully.');
    }

    public function show(Comment $comment)
    {
        return view('comments.show', compact('comment'));
    }

    public function edit(Comment $comment)
    {
        return view('comments.edit', compact('comment'));
    }

    public function update(Request $request, Comment $comment)
    {
        $request->validate([
            'email' => 'required',
            'name' => 'required',
            'comment' => 'required',
        ]);

        $comment->fill($request->post())->save();

        return redirect()->route('comments.index')->with('success', 'Comment Has Been updated successfully');
    }
    public function destroy(Comment $comment)
    {
        $comment->delete();
        return redirect()->route('comments.index')->with('success', 'Comment has been deleted successfully');
    }
}
