<?php

namespace App\Repositories;

use App\Models\TaskModel;


class TaskRepository
{
    private $taskModel;
    public function __construct()
    {
        $this->taskModel = new TaskModel();
    }
    public function getTasks()
    {
        return $this->taskModel->findAll();
    }

    public function store(array $data)
    {
       $this->taskModel->insert($data);
    }

    public function find(int $id)
    {
       return $this->taskModel->find($id);
    }

    public function update(int $id, array $data)
    {
        $this->taskModel->update($id, $data);
    }

    public function delete($id = null)
    {
        $this->taskModel->delete($id);
    }
}
