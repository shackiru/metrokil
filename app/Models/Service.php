<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded = ['id'];

    const RULES = [
        'name' => ['required', 'string', 'max:255'],
        'price' => ['required', 'integer'],
        'benefits' => ['required', 'array'],
        'description' => ['required', 'string'],
    ];
}
