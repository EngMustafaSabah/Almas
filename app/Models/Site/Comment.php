<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};

class Comment extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'created_by', 'type', 'rating',
        'review_text', 'review_date', 'status', 'parent_id',
    ];

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function children()
    {
        return $this->hasMany(Comment::class, 'parent_id');
    }

    // public function products()
    // {
    //     return $this->morphedByMany(Product::class, 'commentables');
    // }

    public function posts()
    {
        return $this->morphedByMany(Blog::class, 'commentables');
    }
}
