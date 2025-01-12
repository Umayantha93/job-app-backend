<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    protected $fillable = ['type'];

    public function vacancies()
    {
        return $this->hasMany(Vacancy::class, 'type', 'type');
    }
}
