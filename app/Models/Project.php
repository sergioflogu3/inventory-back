<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.projects';
    protected $fillable = [
        'id_agency',
        'name',
        'star_date',
        'star_end',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];
    public function agency(): BelongsTo {
        return $this->belongsTo(Agency::class, 'id_agency');
    }
    public function actives(): HasMany {
        return $this->hasMany(Active::class, 'id_project');
    }
    public function assignments(): HasMany {
        return $this->hasMany(Assignment::class, 'id_project');
    }
}
