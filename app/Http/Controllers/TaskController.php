<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        
        return view('tasks.index', compact('tasks'));
    }


    public function create()
    {
        return view('tasks.create');
    }


    public function store()
    {
        Task::create([
            'user_id' => request('user_id'),
            'property_id' => request('property_id'),
            'description' => request('description'),
            'comments' => request('comments'),
            'status' => request('status'),
            'scheduled_date' => request('scheduled_date'),
         ]);
        
        return redirect('/tasks');
    }


    public function show(Task $task)
    {
        //$property = Property::findOrFail($id);
        //return $property;
        return view('tasks.show', compact('task'));
    }


    public function edit(Task $task)
    {
        return view('tasks.edit', compact('task'));
    }


    public function update(Task $task)
    {
        
        $task->update(request([
            'user_id',
            'property_id',
            'description',
            'comments',
            'status',
            'scheduled_date'
        ]));
        
        return view('/tasks.show');
        
    }


    public function destroy(Task $task)
    {
        //
    }
}
