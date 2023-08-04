<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class Repayment extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'public.repayments';
    protected $fillable = [
        'id_assignment',
        'date',
        'state',
        'observation',
        'user_register',
        'number_ip',
        'created_at',
        'updated_at',
    ];

    public function assignment(): BelongsTo {
        return $this->belongsTo(Assignment::class, 'id_assignment');
    }
}
