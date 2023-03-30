<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Defect extends Model
{
    use HasFactory;
    protected $table = 'defects';
    // Primary Key
    public $primarykey = 'id';
    // Timestamps
    public $timestamps = true;

    protected $fillable = [
        'accomodation',
        'hall_location',
        'floor',
        'cluster',
        'room',
        'fault',
        'description',
        'remarks',
        'name',
        'email',
        'phone',
    ];
    protected $attributes = [
        'status' => 'Pending',
    ];

    
}
