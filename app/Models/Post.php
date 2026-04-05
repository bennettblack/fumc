<?php

namespace App\Models;

use App\Enums\PostType;
use Database\Factories\PostFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /** @use HasFactory<PostFactory> */
    use HasFactory;

    protected $fillable = [
        'type',
        'title',
        'description',
        'image',
        'body',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'type' => PostType::class,
            'published_at' => 'date',
        ];
    }

    /** @param Builder<Post> $query */
    public function scopeOfType(Builder $query, PostType $type): void
    {
        $query->where('type', $type);
    }

    /** @param Builder<Post> $query */
    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }
}
