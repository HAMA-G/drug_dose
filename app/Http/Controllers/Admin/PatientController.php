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
    
    public function index(Request $request)
    {
        $cond_name = $request->cond_name;
        if ($cond_name != "") {
            $posts = Patient::where('name', $cond_name)->get();
        } else {
            $posts = Patient::all();
        }
        return view('admin.patient.index', ['posts' => $posts, 'cond_name' => $cond_name]);
    }
    
    public function edit(Request $request)
    {
        $patient = Patient::find($request->id);
        if(empty($patient)) {
            abort(404);
        }
        return view('admin.patient.edit', ['patient_form' => $patient]);
    }
    
    public function update(Request $request)
    {
        $this->validate($request, Patient::$rules);
        $patient = Patient::find($request->id);
        $patient_form = $request->all();
        
        unset($patient_form['_token']);
        
        $patient->fill($patient_form)->save();
        
        return redirect('admin/patient/');
    }
    
    public function delete(Request $request)
    {
        $patient = Patient::find($request->id);
        $patient->delete();
        
        return redirect('admin/patient/');
    }
}
