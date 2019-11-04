<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    const VERSION = '1.0.0';

    public function index(Request $request)
    {
        $response = array();
        $response['methods'] = [
            '/version' => 'Get version',
            '/task' => 'Get all task list',
            '/task/pending' => 'Get all pending task list',
            '/task/inprogress' => 'Get all in progress task list',
            '/task/completed' => 'Get all completed task list',
            '/task/save' => 'Save post task'
        ];

        return response()->json($response);
    }

    public function version(Request $request)
    {
        return response()->json(
        [
            'version' => self::VERSION
        ]
        );
    }
}
