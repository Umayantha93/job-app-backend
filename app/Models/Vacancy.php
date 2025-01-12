<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vacancy extends Model
{
    protected $fillable = ['title', 'description', 'location', 'salary', 'type'];

    public function JobTypes()
    {
        return $this->belongsTo(JobType::class, 'type', 'type');
    }
}
