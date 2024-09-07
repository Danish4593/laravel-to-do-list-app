<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $tasks = new Task;
        if (!$request->filter) {
            $tasks = $tasks->where('is_completed', 0);
        }
        $tasks = $tasks->get();
        
        return response()->json(['tasks' => $tasks, 'message' => 'Task created successfully!']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'task' => 'required|string|unique:tasks,name',
        ]);
        $task = Task::create([
            'name' => $request['task']
        ]);
        return response()->json(['message' => 'Task created successfully!']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function show(Task $task)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $task = Task::find($id);

        if ($task) {
            $task->update(['is_completed' => $request->completed]);
            return response()->json(['message' => 'Task updated successfully!']);
        }

        return response()->json(['message' => 'Task not found.'], 404);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Task  $task
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::find($id);
        if ($task) {
            $task->delete();
            return response()->json(['success' => true, 'message' => 'Task deleted successfully']);
        }
    
        return response()->json(['success' => false, 'message' => 'Task not found'], 404);
    }
}
