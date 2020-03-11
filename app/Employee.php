<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['empID', 'empName','empPass','empPhone','empEmail','role'];
    protected $table = 'employee';

    protected $hidden = ['empPass', 'remember_token'];

    public function getAuthPassword(){
        return $this->empPass;
    }
}
