<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visit extends Model
{
    use HasFactory;
    protected $fillable = [
        'subject',
        'date_arrival',
        'time_arival',
        'end_time',
        'company_individual',
        'company',
        'first_name',
        'last_name',
        'email',
        'tel',
        'persons',
        'exist'
    ];
}
