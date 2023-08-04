<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Personal extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.personals';
    protected $fillable = [
        'id_person',
        'id_type_personal',
        'id_charge',
        'active',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function person(): BelongsTo {
        return $this->belongsTo(Person::class, 'id_person');
    }
    public function charge(): BelongsTo {
        return $this->belongsTo(Charge::class, 'id_charge');
    }
    public function typePersonal(): BelongsTo {
        return $this->belongsTo(TypePersonal::class, 'id_type_personal');
    }
    public function assignments(): HasMany {
        return $this->hasMany(Assignment::class, 'id_personal');
    }
}
