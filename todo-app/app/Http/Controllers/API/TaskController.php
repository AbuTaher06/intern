<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Todo;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    // Fetch all tasks
    public function index()
    {
        return Todo::all();
    }

    // Store a new task
    public function store(Request $request)
    {
        $task = Todo::create([
            'name' => $request->name,
        ]);

        return response()->json($task, 201);
    }

    // Delete a task
    public function destroy($id)
    {
        $task = Todo::find($id);

        if ($task) {
            $task->delete();
            return response()->json(null, 204);
        }

        return response()->json(['message' => 'Todo not found'], 404);
    }
}
