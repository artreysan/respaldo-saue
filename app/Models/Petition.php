<?php

namespace App\Models;

use App\Models\Collaborator;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;



class Petition extends Model
{
    use HasFactory;

    protected $fillable = [
        'authorizer_id',
        'collaborator_id',
        'fileID',
        'user_id',
        'equipment_id',
        'enterprise_id',
        'internet',
        'ip_fija',
        'vpn',
        'cuenta_gitlab',
        'cuenta_jira',
        'cuenta_glpi',
        'cuenta_da',
        'tipo',
        'marca',
        'modelo',
        'serie',
        'mac_ethernet',
        'mac_wifi',
        'propietario',
    ];

    public function authorizers()
    {
        return $this->belongsToMany(Authorizer::class);
    }

<<<<<<< HEAD
    public function equipment()
    {
        return $this->belongsTo(Equipment::class,  'equipment_id');
    }

    public function user()
=======
    public function collaborators()
>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440
    {
        return $this->belongsToMany(Collaborator::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

<<<<<<< HEAD
=======
    public function enterprises()
    {
        return $this->belongsToMany(Enterprise::class);
    }

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class);
    }

>>>>>>> bd033d6b52d21121fd3154a15f1700a377c83440
}
