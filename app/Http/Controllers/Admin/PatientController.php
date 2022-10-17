<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Patient;

class PatientController extends Controller
{
    public function add()
    {
        return view('admin.patient.create');
    }
    
    public function create(Request $request)
    {
        $this->validate($request, Patient::$rules);
        
        $patient = new Patient;
        $form = $request->all();
        
        unset($form['_token']);
        
        $patient->fill($form)->save();

        return redirect('admin/patient/create');
    }
    
    public function edit()
    {
        return view('admin.patient.edit');
    }
    
    public function update()
    {
        return redirect('admin/patient/edit');
    }
}
