<?php

namespace App\Http\Controllers;

use App\Todo;
use function GuzzleHttp\Promise\all;
use function Symfony\Component\String\s;

class TodosController extends Controller
{
    public function index()
    {
        return view('todos.index')->with('todos',Todo::all());
    }

    public function show(todo $todo)
    {
        return view('todos.show')->with('todo',$todo);
    }

    public function create()
    {
        return view('todos.create');
    }

    public function store()
    {

        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo = new Todo();

        $todo->name = $data['name'];
        $todo->description = $data['description'];
        $todo->completed = false;

        $todo->save();

        session()->flash('success','The data has been saved');

        return redirect('/todos');
    }

    public function edit(todo $todo)
    {
        return view('todos.edit')->with('todo',$todo);
    }

    public function update(todo $todo)
    {
        $this->validate(request(), [
            'name' => 'required|min:6|max:12',
            'description' => 'required'
        ]);

        $data = request()->all();

        $todo->name = $data['name'];

        $todo->description = $data['description'];

        $todo->save();

        return redirect('/todos');

    }

    public function delete(todo $todo)
    {
        $todo->delete();

        return redirect('/todos');
    }

    public function complete(todo $todo)
    {
        $todo->completed = true;

        $todo->save();

        session()->flash('success','Todo has been completed');

        return redirect('/todos');
    }
}
