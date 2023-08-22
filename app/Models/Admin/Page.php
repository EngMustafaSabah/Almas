<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Page extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = ['name', 'slug', 'status'];

    // Define the relationship between Page and Section models
    public function sections()
    {
        return $this->hasMany(Section::class);
    }
}
