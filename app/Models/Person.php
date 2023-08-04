<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Person extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.people';
    protected $fillable = [
        'id_type_document',
        'gender',
        'number_document',
        'complement',
        'names',
        'last_name',
        'second_name',
        'birth_date',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function personals(): HasOne {
        return $this->hasOne(Personal::class, 'id_person');
    }
    public function user(): HasOne {
        return $this->hasOne(User::class, 'id_user');
    }
    public function typeDocument(): BelongsTo {
        return $this->belongsTo(TypeDocument::class, 'id_person');
    }
}
