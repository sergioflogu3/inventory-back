<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\SoftDeletes;

class Assignment extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'public.assignments';
    protected $fillable = [
        'id_project',
        'id_personal',
        'id_active',
        'name_city',
        'date',
        'state',
        'observation',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function project(): BelongsTo {
        return $this->belongsTo(Assignment::class, 'id_project');
    }
    public function active(): BelongsTo {
        return $this->belongsTo(Active::class, 'id_active');
    }
    public function personal(): BelongsTo {
        return $this->belongsTo(Personal::class, 'id_personal');
    }
    public function repayments(): HasOne {
        return $this->hasOne(Repayment::class, 'id_assignment');
    }
    public function labels(): HasMany {
        return $this->hasMany(Label::class, 'id_assignment');
    }
}
