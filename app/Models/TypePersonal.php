<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypePersonal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.type_personals';
    protected $fillable = [
        'name',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function personals(): HasMany {
        return $this->hasMany(Personal::class, 'id_type_personal');
    }
}
