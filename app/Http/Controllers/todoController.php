<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use App\Models\Todo;
use App\Http\Requests\postRequest;
use App\Http\Requests\updateRequest;
use Illuminate\Http\Request;

class TodoController extends BaseController 
{
    public function __construct(Todo $model)
    {
        $this->model = $model;
    }

    public function index() {
        return Todo::get();
    }

    public function show(Todo $todo)  {
       return $todo;
    }

    public function store(postRequest $request) {
        return Todo::create($request->validated());
        // return Todo::create([
        //     'titulo' => $request->input('titulo'),
        //     'description' => $request->input('description'),
        //     'createdAt' => date('d/m/Y H:m:i')
        // ]);
    }

    public function update(updateRequest $request, Todo $todo) {
        return $todo->update($request->validated());
        // return $todo->update([
        //     'titulo' => $request->input('titulo'),
        // ]);
    }

    public function destroy(Todo $todo) {
        return $todo->delete();
    }
}