<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['empName','empPass','empPhone','empEmail','role'];
    protected $table = "employee";
}
