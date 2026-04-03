<?php

namespace App\Models;

use Database\Factories\ClarkWeekdayRegistrationFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ClarkWeekdayRegistration extends Model
{
    /** @use HasFactory<ClarkWeekdayRegistrationFactory> */
    use HasFactory;

    protected $fillable = [
        'child_name',
        'child_dob',
        'child_siblings',
        'parent_names',
        'address_1',
        'address_2',
        'city',
        'state',
        'zip',
        'email',
        'phone',
        'work_phone',
        'schedule',
        'extended_care',
        'multiple_children',
        'other_children',
        'church_member',
    ];

    protected function casts(): array
    {
        return [
            'child_dob' => 'date',
            'extended_care' => 'boolean',
            'multiple_children' => 'boolean',
            'church_member' => 'boolean',
        ];
    }
}
