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

    public function add()
    {
        $task = new Task;
        $data['task'] = $task;
        return view('task.task',$data);
    }

    public function edit(Request $request, int $id)
    {
        $task = Task::find($id);
        $data['task'] = $task;
        return view('task.task',$data);
    }

    public function save(Request $request)
    {
        //call to the api
        $client = new Client();
        $res = $client->request('POST', '/api/task', [
            'form_params' => [
                'name' => $request->name,
                'due_date' => $request->due_date,
                'description' => $request->description,
            ]
        ]);
        //@todo check status heare
        return redirect('/task');
    }
}
