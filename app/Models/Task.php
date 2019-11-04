<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';

    const PENDING = 0;
    const RUNNING = 1;
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

    public function getRunning()
    {
        return $this->getByCompleted(self::RUNNING);
    }


    public function getCompleted()
    {
        return $this->getByCompleted(self::COMPLETED);
    }

    /**
     * @param array $data
     * @return bool
     */
    public function store(array $data)
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
        $task->completed = (isset($data['completed'])) ? $data['completed'] : self::PENDING;

        $status = $task->save();
        return $status;
    }

    /**
     * @return bool
     */
    public function run()
    {
        $this->completed = self::RUNNING;
        return $this->save();
    }

    public function complete()
    {
        $this->completed = self::COMPLETED;
        return $this->save();
    }

}
