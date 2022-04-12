<?php

namespace Devhereco\Visitor\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Visitor extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip_address',
        'user_agent',
        'browser',
        'browser_version',
        'platform',
        'platform_version',
        'device',
        'location',
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($query) {
            $query->user_id = Auth::user()->id ?? null;
        });

        static::updating(function ($query) {
            $query->user_id = Auth::user()->id ?? null;
        });
    }
}
