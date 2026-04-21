<?php

namespace App\Models;

use Database\Factories\UntimelyRamblingFactory;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UntimelyRambling extends Model
{
    /** @use HasFactory<UntimelyRamblingFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
        'published_at',
    ];

    protected function casts(): array
    {
        return [
            'published_at' => 'date',
        ];
    }

    /** @param Builder<UntimelyRambling> $query */
    public function scopePublished(Builder $query): void
    {
        $query->whereNotNull('published_at')->where('published_at', '<=', now());
    }
}
