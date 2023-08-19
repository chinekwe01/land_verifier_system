<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registered_Land extends Model
{
    use HasFactory;
    protected $fillable = [
        'registration_number',
        'beacon',
        'survey_plan',
        'deals',
        'date_registered',
        'owner',
        'formerOwner',
    ];
}
