<?php

namespace  App\Models;
use App\Models\BaseModel;

class Todo extends BaseModel  {
    
    protected $fillable = [
        'titulo',
        'isdone',
        'description',
        'createdAt'
    ];

    protected $table = 'todos';

    protected $casts = [
        'created_at' => 'date:d/m/Y',
        'updated_at' => 'date:d/m/Y',
        'isdone' => 'boolean',
    ];

    public $timestamps = true;

    public $rules = [
        'titulo' => 'required',
        'description' => 'nullable',
        'isdone' => ' nullable'
    ];

    public $rulesUpdate = [
        'titulo' => 'nullable|max:20',
        'description' => 'nullable|max:60',
        'isdone' => ' nullable|boolean'
    ];

    public $messages = [
        'titulo.required' => 'Titulo é obrigatório'
    ];


    
}