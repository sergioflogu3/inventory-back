<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Agency extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'public.agencies';
    protected $fillable = [
        'name',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];
    public function projects(): HasMany {
        return $this->hasMany(Project::class, 'id_agency');
    }
}
