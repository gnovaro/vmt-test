<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskController extends MainController
{
    public function index()
    {
        $task = new Task;
        $data['tasks'] = $task->getAll();
        return view('task.index',$data);
    }
}
