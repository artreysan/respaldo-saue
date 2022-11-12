<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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

    public function collaborators()
    {
        return $this->belongsToMany(Collaborator::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    public function enterprises()
    {
        return $this->belongsToMany(Enterprise::class);
    }

    public function equipment()
    {
        return $this->belongsToMany(Equipment::class);
    }

}
