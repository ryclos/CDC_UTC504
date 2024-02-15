<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UsersStatuts extends Model
{
    protected $fillable = ['libelle'];

    public function users()
    {
        return $this->hasMany(User::class, 'statut', 'id_user_statuts');
    }
}
