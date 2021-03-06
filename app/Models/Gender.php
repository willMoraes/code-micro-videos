<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Gender extends Model
{
    use SoftDeletes, Traits\Uuid;

    protected $fillable = ['name', 'description', 'is_active'];
    protected $dates = ['deleted_at'];
    protected $casts = [
        'id' => 'string'
    ];

    public $incrementing = false;
    protected $keyType = 'string';
}
