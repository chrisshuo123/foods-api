<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RegDistricts extends Model
{
    public $timestamps = true;

    protected $fillable = ['regency_id', 'name'];

    public function regency(): BelongsTo {
        return $this->belongsTo(RegRegency::class, 'regency_id');
    }

    public function villages(): HasMany {
        return $this->hasMany(RegVillages::class, 'village_id');
    }
}
