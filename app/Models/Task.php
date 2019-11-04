<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    const PENDING = 0;
    const RUNING = 1;
    const COMPLETED = 2;

    public function getAll()
    {
        return Task::all();
    }

    /**
     * @param int $status
     * @return Task List
     */
    public function getByCompleted(int $status)
    {
        return Task::where('completed',$status)->orderBy('due_date')->find();
    }

    public function getPending()
    {
        return $this->getByCompleted(self::PENDING);
    }

    public function getRuning()
    {
        return $this->getByCompleted(self::RUNGING);
    }


    public function getCompleted()
    {
        return $this->getByCompleted(self::COMPLETED);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function storage(array $options)
    {
        $status = false;
        if(isset($data['id']))
        {
            $task = Task::find($data['id']);
        } else {
            $task = new Task;
        }

        $task->name = $data['name'];
        $task->due_date = $data['due_date'];
        $task->description = (isset($data['description'])) ? $data['description'] : $task->description;
        $task->completed = $data['completed'];

        $status = $task->save();
        return $status;
    }

}
