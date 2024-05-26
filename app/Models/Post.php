<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends  \TCG\Voyager\Models\Post
{
    use HasFactory;
    protected $guarded = [];

    protected $casts = [
        'publish_date' => 'datetime',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
    function scopeFilter($query, array $filter)
    {
        $query->when($filter['category'] ?? false, function ($query, $category) {
            $query->whereHas('category', function ($query) use ($category) {
                $query->where('categories.slug', $category);
            });
        })->when($filter['search'] ?? false, function ($query, $search) {
            $query->where(function($q) use($search){
                $q->where('title', 'LIKE', '%' . $search . '%')
                    ->orWhere('body', 'LIKE', '%' . $search . '%');
            });
        });
    }

}
