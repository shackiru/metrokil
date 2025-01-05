<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = ['id'];

    const RULES = [
        'name' => ['required', 'string', 'max:255'],
        'job' => ['required', 'string', 'max:255'],
        'content' => ['required', 'string'],
    ];
}
