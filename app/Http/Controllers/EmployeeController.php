<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Employee;

class EmployeeController extends Controller
{
    public function register()
    {
        return view('employee.registration');
    }
    public function postRegistration(Request $request)
    {
        request()->validate([
            'empName' => 'required',
            'empPass' => 'required',
            'empPhone' => 'required',
            'empEmail' => 'required',
            'role' => 'required',
            ]);
            $data = $request->all();
          

            Employee::create([
            'empName' => $data['empName'],
            'empPass' => Hash::make($data['empPass']),
            'empPhone' => $data['empPhone'],
            'empEmail' => $data['empEmail'],
            'role' => $data['role'],
            ]);

            

    
    }
}
