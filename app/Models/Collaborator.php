<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Collaborator extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'nombre',
        'apellido_paterno',
        'apellido_materno',
        'email',
        'location_id',
        'rol_id',
        'equipment_id',
        'enterprise_id',
    ];

<<<<<<< HEAD

    //Llaves foraneas

    public function location()
    {
        return $this->belongsTo(Location::class, 'location_id');
    }

    public function rol()
    {
        return $this->belongsTo(Rol::class,'rol_id');
    }

    public function enterprise()
    {
        return $this->belongsTo(Enterprise::class,'enterprise_id');
    }

    public function equipment()
    {
        return $this->belongsTo(Equipment::class,'equipment_id');
    }
=======
    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function rols()
    {
        return $this->belongsToMany(Rol::class);
    }

>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440

}
