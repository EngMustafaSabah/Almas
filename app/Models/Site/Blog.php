<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\{Factories\HasFactory, Model, SoftDeletes};
use Spatie\Translatable\HasTranslations;
use Spatie\MediaLibrary\{HasMedia, InteractsWithMedia};

class Blog extends Model implements HasMedia
{
    use HasFactory, SoftDeletes, HasTranslations, InteractsWithMedia;

    public $translatable = ['title', 'short_content', 'content'];

    protected $fillable = [
        'slug', 'title', 'short_content', 'content',
        'created_by', 'is_active', 'status', 'is_approved',
        'approved_by'
    ];

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main_post_img_attache')
            ->singleFile()
            ->withResponsiveImages();
    }

    public function addImage($imageFile)
    {
        $this->addMedia($imageFile)->toMediaCollection('main_post_img_attache');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function createdBy()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }

    public function categories()
    {
        return $this->morphToMany(Category::class, 'categoryable');
    }

    public function tags()
    {
        return $this->morphToMany(Tag::class, 'taggables');
    }
}
