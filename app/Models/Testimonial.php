<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = ['id'];

    const RULES = [
        'name' => ['required', 'string', 'max:255'],
        'title' => ['required', 'string', 'max:255'],
        'review' => ['required', 'string'],
        'rate' => ['required', 'string', 'max:5'],
    ];
}
