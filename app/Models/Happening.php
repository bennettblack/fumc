<?php

namespace App\Models;

use Database\Factories\HappeningFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Happening extends Model
{
    /** @use HasFactory<HappeningFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'published_at',
        'file_name',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }

    /** @param Builder<Happening> $query */
    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }
}
