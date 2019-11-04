<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;

class TaskController extends MainController
{

    public function getAll()
    {
        $task = new Task;
        return response()->json(
            [
                'tasks' => $task->getAll()                
            ]
        );
    }

    public function getCompleted()
    {
        $task = new Task;
        return response()->json(
            [
                'tasks' => $task->getCompleted()
            ]
        );
    }
}
