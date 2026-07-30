<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class RegRegencies extends Model
{
    public $timestamps = true;

    protected $fillable = ['province_id', 'name'];

    public function cleanLocationName($name) {
        // Hilangkan Kab. Kota.  Sebagai testing, saya coba tambahkan dengan Kec. dan Kel. Meski tidak relate dengan Model ini.
        $name = preg_replace('/^(kab\.|kota|kec\.|kel\.)\s*/i', '', $name);

        // Ubah huruf kecil semua:
        $name = strtolower($name);

        return $name;
    }

    public function province(): BelongsTo {
        return $this->belongsTo(RegProvince::class, 'province_id');
    }

    public function districts(): HasMany {
        return $this->hasMany(RegDistricts::class, 'district_id');
    }
}
