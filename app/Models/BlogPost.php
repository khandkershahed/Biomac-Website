<?php

namespace App\Models;

use App\Traits\HasSlug;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class BlogPost extends Model
{
    use HasFactory, HasSlug;

    protected $slugSourceColumn = 'title';

    /**
     * The attributes that aren't mass assignable.
     *
     * @var array
     */
    protected $guarded = [];

    public function getBlogCategoriesAttribute()
    {
        $categoryIds = json_decode($this->category_id, true) ?: [];
        return BlogCategory::whereIn('id', $categoryIds)->get();
    }
    public function blogCategory()
    {
        return $this->belongsTo(BlogCategory::class, 'category_id');
    }
    // public function blogTag()
    // {
    //     return $this->belongsTo(BlogTag::class);
    // }
    public function blogTags()
    {
        return $this->belongsToMany(BlogTag::class, 'tag_id', 'id');
    }
    public function scopeActive($query)
    {
        return $query->where('status', 'publish');
    }
}
