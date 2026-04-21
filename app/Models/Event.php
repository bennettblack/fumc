<?php

namespace App\Models;

use Database\Factories\EventFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    /** @use HasFactory<EventFactory> */
    use HasFactory;

    protected $fillable = [
        'title',
        'starts_at',
    ];

    protected function casts(): array
    {
        return [
            'starts_at' => 'date',
        ];
    }
}
