<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{
    protected $fillable = ['date_seance', 'lieu', 'horaire', 'max_users'];

    public function participants()
    {
        return $this->hasMany(Participant::class, 'id_seance', 'id_seance');
    }
}
