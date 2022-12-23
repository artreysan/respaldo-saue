<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipment extends Model
{
    use HasFactory;

    public $timestamps = false;
<<<<<<< HEAD

    protected $fillable = [
        'name',
        'description',
        'equipment_id',
    ];

    public function collaborator()
    {
        return $this->belongsTo(Collaborator::class,  'collaborator_id');
    }

    public function petition()
    {
        return $this->belongsTo(Petition::class,  'petition_id');
    }


=======
>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440
}
