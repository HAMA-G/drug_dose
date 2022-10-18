<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drug extends Model
{
    protected $guarded = array('id');
    
    public static $rules = array(
        'drug_name' => 'required',
        'brand_name' => 'required',
        'ccr60more' => 'required',
        'ccr50to60' => 'required',
        'ccr40to50' => 'required',
        'ccr30to40' => 'required',
        'ccr20to30' => 'required',
        'ccr10to20' => 'required',
        'ccr10less' => 'required',
        );
}
