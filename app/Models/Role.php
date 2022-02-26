<?php

namespace App\Models;

use App\Models\User;
use Backpack\CRUD\app\Models\Traits\CrudTrait;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Role extends Model
{
    use HasFactory;
    use CrudTrait;

    protected $fillable = [
        'name',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }

    // Récupère le nombre de users qui ont un role, sert pour backPack
    public function getUsersCount()
    { 
        return $this->users()->count();
    }
}
