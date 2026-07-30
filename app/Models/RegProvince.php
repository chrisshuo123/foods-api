<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


class RegProvince extends Model
{
    public $timestamps = true;

    protected $fillable = ['name'];

    public function regencies(): HasMany {
        return $this->hasMany(RegRegencies::class, 'regency_id');
    }
}
