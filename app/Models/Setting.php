<?php

namespace App\Models;

use Database\Factories\SettingFactory;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    /** @use HasFactory<SettingFactory> */
    use HasFactory;

    protected $fillable = [
        'key',
        'label',
        'value',
        'group',
        'is_autoload',
    ];

    protected function casts():array
    {
        return [
            'is_autoload' => 'boolean',
        ];
    }
}
