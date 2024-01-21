<?php

namespace App\Controllers;

use App\Repositories\TaskRepository;
use App\Requests\CreateTaskRequest;
use App\Requests\UpdateTaskRequest;

class Tasks extends BaseController
{

    protected $formHelper;
    protected $taskRepository;

    protected $validation;

    public function __construct()
    {
        helper(['form']);
        $taskRepository = new TaskRepository();
        $this->taskRepository = $taskRepository;
    }

    public function index()
    {
        $data['tasks'] = $this->taskRepository->getTasks();
        return view('tasks/index', $data);
    }

    public function create()
    {
        return view('tasks/create');
    }

    public function store()
    {
        $request = new CreateTaskRequest();
        $requestData = $this->request->getPost();
        $result = $request->store($requestData);

        if (is_array($result)) {
            $data['validation'] = $result;
            return view('tasks/create', $data);
        }
        $this->taskRepository->store($result);
        return redirect()->to('/tasks');
    }

    public function edit($id = null)
    {
        $data['task'] = $this->taskRepository->find($id);
        return view('tasks/edit', $data);
    }

    public function update($id = null)
    {
        $request = new UpdateTaskRequest();
        $requestData = $this->request->getPost();
        $result = $request->update($requestData);

        if (is_array($result)) {
            $data['validation'] = $result;
            return view('tasks/create', $data);
        }
        $this->taskRepository->update($id, $result);
        return redirect()->to('/tasks');
    }

    public function delete($id = null)
    {
        $this->taskRepository->delete($id);
        return redirect()->to('/tasks');
    }
}
