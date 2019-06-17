<?php

namespace App\Http\Controllers;

use App\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return response()->json($tasks);
    }

    public function store(Request $request)
    {
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required'
        ]);

        $task = Task::create($request->all());

        return response()->json([
            'message' => 'Great success! New employee created',
            'task' => $task
        ]);
    }

    public function show(Task $task)
    {
        return $task;
    }

    public function update(Request $request, Task $task)
    {
        $request->validate([
           'firstname'=> 'nullable',
           'lastname' => 'nullable'
        ]);

        $task->update($request->all());

        return response()->json([
            'message' => 'Great success! Employee updated',
            'task' => $task
        ]);
    }

    public function destroy(Task $task)
    {
        $task->delete();

        return response()->json([
            'message' => 'Successfully deleted employee!'
        ]);
    }
}
