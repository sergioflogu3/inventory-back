<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Property extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.properties';
    protected $fillable = [
        'id',
        'id_region',
        'name',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];
    public function region(): BelongsTo {
        return $this->belongsTo(Region::class, 'id_region');
    }
    public function actives(): HasMany {
        return $this->hasMany(Active::class, 'id_property');
    }
}
