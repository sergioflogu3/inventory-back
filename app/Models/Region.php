<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Region extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.regions';
    protected $fillable = [
        'name',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function properties(): HasMany {
        return $this->hasMany(Property::class, 'id_region');
    }
}
