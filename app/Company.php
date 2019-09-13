<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded = [];

    public function manager()
    {
        return $this->hasMany(Manager::class);
    }
    public function employee()
    {
        return $this->hasMany(Employee::class);
    }
}
