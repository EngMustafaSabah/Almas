<?php

namespace App\Models\Site;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Site\Page;

class Section extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name', 'title', 'second_title',
        'section_content', 'page_id', 'section_order', 'parent_id', 'status', 'url'
    ];

    // Define the relationship between Section and Page models
    public function page()
    {
        return $this->belongsTo(Page::class, 'page_id', 'id');
    }

    // Define the relationship between Section and its child sections
    public function childSections()
    {
        return $this->hasMany(Section::class, 'parent_id');
    }

    // Define the relationship between Section and its parent section
    public function parentSection()
    {
        return $this->belongsTo(Section::class, 'parent_id');
    }
}
