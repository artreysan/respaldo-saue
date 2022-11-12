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

    public function locations()
    {
        return $this->belongsToMany(Location::class);
    }

    public function rols()
    {
        return $this->belongsToMany(Rol::class);
    }


}
