<?php 

namespace App\Requests;

use CodeIgniter\Validation\Validation;

class CreateTaskRequest
{
    // protected $validation;

    // public function __construct(Validation $validation)
    // {
    //     $this->validation = $validation;
    // }

    public function rules(): array
    {
        return [
            'title' => 'required',
            'description' => 'required',
        ];
    }

    public function store(array $data)
    {
        $validation = \Config\Services::validation();
        $validation->setRules($this->rules());
        if ($validation->run($data)) {
            $data['status'] = 'incomplete';
            return $data;
        } else {
            // Validation failed, redirect back with errors
            return $validation->getErrors();
        }
    }
}
