<?php

namespace App\Http\Controllers;

use App\Form;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FormController extends Controller
{
    public function index()
    {
        $forms = Form::paginate(5);
        return view('form.index', ['forms' => $forms]);
    }

    public function indexPost(Request $request)
    {
        $forms = DB::table('forms')
            ->where('title', 'like', '%'.$request->title.'%')
            ->where('body', 'like', '%'.$request->body.'%')
            ->paginate(5);

        return view('form.index', ['forms' => $forms]);
    }

    public function create()
    {
        return view('form.create');
    }

    public function createPost(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $task = new Form;
        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();

        return redirect('/form');
    }

    public function update($id)
    {
        $form = Form::findOrFail($id);
        return view('form.update', ['form' => $form]);
    }

    public function updatePost($id, Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required',
        ]);

        $task = Form::findOrFail($id);
        $task->title = $request->title;
        $task->body = $request->body;
        $task->save();

        return redirect('/form');
    }

    public function delete($id)
    {
        Form::findOrFail($id)->delete();
        return redirect('/form');
    }
}