<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'foods';
    public $timestamps = true;
    
    protected $fillable = ['name', 'image', 'other_location', 'slug', 'body'];

    public function cleanLocationName($name) {
        // Hilangkan Kab. Kota
        $name = preg_replace('/^(kab\.|kota)\s*/i', '', $name);
        // Ubah huruf kecil semua
        $name = strtolower($name);
        return ucwords($name); // ucwords method untuk memberi initial caps pada tiap kata.
    }

    public function province() {
        return $this->belongsTo(RegProvince::class, 'province_id');
    }
    public function regency() {
        return $this->belongsTo(RegRegencies::class, 'regency_id');
    }
    public function district() {
        return $this->belongsTo(RegDistricts::class, 'district_id');
    }
    public function village() {
        return $this->belongTo(RegVillages::class, 'village_id');
    }
}
