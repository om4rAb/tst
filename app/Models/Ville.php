<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ville extends Model
{
    protected $table="villes";
    protected $primaryKey="IdVille";
    protected $fillable=['NameVille'];
}