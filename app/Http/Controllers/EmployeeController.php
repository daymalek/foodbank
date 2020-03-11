<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Redirect;
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

    public function login()
    {
        return view('employee.login');
    }

    public function postLogin(Request $request)
    {
        request()->validate([
           'empID' => 'required',
           'empPass' => 'required', 
        ]);

        $credentials = $request->only('empID', 'empPass');
        if(Auth::attempt($credentials)) {
                //Authentication passed...
                return redirect()->route('employees.register');
        }
        return Redirect::route("employees.login")->withSuccess('Opps! You have entered incalid credentials');
    }

}
