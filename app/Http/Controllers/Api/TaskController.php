<?php

namespace App\Http\Controllers\Api;

use App\Models\Task;
use Illuminate\Http\Request;

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

    public function getRunning()
    {
        $task = new Task;
        return response()->json(
            [
                'tasks' => $task->getRunning()
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



    public function save(Request $request)
    {
        $task = new Task;
        $status = $task->store($request->post());
        return response()->json(
            [
                'message' => ($status) ? 'Task saved success: '.$task->id : 'Error saving task'
            ],($status) ? 200 : 500
        );
    }

    public function run(Request $request,int $id)
    {
        $status = false;
        $task = Task::find($id);
        if($task)
        {
            $status = $task->run();
        }
        return $status;
    }
}
