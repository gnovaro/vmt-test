<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;
use GuzzleHttp\Psr7;
use GuzzleHttp\Client;

class TaskController extends MainController
{
    public function index()
    {
        //@todo replace with api call
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
        //@todo replace with api call
        $task = Task::find($id);
        $data['task'] = $task;
        return view('task.task',$data);
    }

    /**
     * Save method
     * @param Request $request
     */
    public function save(Request $request)
    {
        $status = false;
        $message = '';
        $api_url  = url(env('API_URL').'/task/save');

        $client = new Client(['timeout'  => 3.0]);

        //call to the api
        try {
            $respose = $client->request('POST', $api_url , [
                'form_params' => [
                    'id' => (!empty($request->id)) ? $request->id : null,
                    'name' => $request->name,
                    'due_date' => $request->due_date,
                    'description' => $request->description,
                ]
            ]);

            if($response->getStatusCode())
            {
                $status = ($response->getStatusCode() == 200) ? true : false;
                $message = $respose->message;
            }
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }

        //@todo check status heare
        return redirect('/task')->with(['status' => $status, 'message' => $message]);
    }
}
