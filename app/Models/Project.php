<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Project extends Model
{
    use HasFactory;

    
    protected $fillable = ['title', 'content', 'cover_image', 'slug', 'type_id'];

    public static function generateSlug($title)
    {
        return Str::slug($title, '-');
    }


    public function type(): BelongsTo
    {
        return $this->belongsTo(Type::class);
    }
}