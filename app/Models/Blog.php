<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $guarded = ['id'];
    protected $with = ['user'];

    const RULES = [
        'title' => ['required', 'string', 'max:255'],
        'description' => ['required', 'string'],
        'status' => ['required', 'string', 'in:news,information'],
        'user_id' => ['required', 'integer', 'exists:users,id'],
        'image_url' => ['required', 'image'],
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
