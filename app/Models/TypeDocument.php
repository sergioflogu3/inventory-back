<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TypeDocument extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'public.type_documents';
    protected $fillable = [
        'name',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function persons(): HasMany {
        return $this->hasMany(Person::class, 'id_type_document');
    }
}
