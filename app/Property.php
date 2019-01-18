<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Property extends Model
{
    protected $fillable = [
        
        'job_number', 'job_name', 'address', 'address2'
    ];
}
