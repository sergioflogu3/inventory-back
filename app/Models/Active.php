<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class Active extends Model
{
    use HasFactory, SoftDeletes;
    protected $table = 'public.actives';
    protected $fillable = [
        'id_property',
      'id_project',
      'number_series',
      'date_acquisition',
      'literal_code',
      'number_code',
      'detail',
      'amount',
      'location',
      'buy_value',
      'observation',
      'user_register',
      'number_ip',
      'created_at',
      'updated_at',
    ];

    public function project(): BelongsTo {
        return $this->belongsTo(Project::class, 'id_project');
    }
    public function assignments(): HasMany {
        return $this->hasMany(Assignment::class, 'id_active');
    }
    public function property(): BelongsTo {
        return $this->belongsTo(Property::class, 'id_property');
    }
}
