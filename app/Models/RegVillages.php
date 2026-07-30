<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class RegVillages extends Model
{
    public $timestamps = true;

    protected $fillable = ['district_id', 'name'];

    public function district(): belongsTo {
        return $this->belongsTo(RegDistricts::class, 'district_id');
    }
}
