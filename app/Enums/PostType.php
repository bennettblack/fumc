<?php

namespace App\Enums;

enum PostType: string
{
    case Happenings = 'happenings';
    case UntimelyRamblings = 'untimely_ramblings';

    public function label(): string
    {
        return match ($this) {
            self::Happenings => 'The Happenings',
            self::UntimelyRamblings => 'Untimely Ramblings',
        };
    }
}
