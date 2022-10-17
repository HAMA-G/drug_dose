<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
            'name' => 'required',
            'sex' => 'required',
            'disease' => 'required',
            'age' => 'required',
            'height' => 'required',
            'weight' => 'required',
            'wbc' => 'required',
            'hb' => 'required',
            'plt' => 'required',
            'ast' => 'required',
            'alt' => 'required',
            'tbil' => 'required',
            'dbil' => 'required',
            'gtp' => 'required',
            'scr' => 'required',
            'egfr' => 'required',
            'crp' => 'required',
    );
}
