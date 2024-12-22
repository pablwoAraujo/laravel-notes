<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['id', 'username', 'password'];

    public function notes(){
        return $this->hasMany(Note::class);
    }
}
