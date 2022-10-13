<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PatientController extends Controller
{
    public function add()
    {
        return view('admin.patient.create');
    }
    
    public function create()
    {
        return redirect('admin/patient');
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
