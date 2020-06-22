<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $guarded = [];

    public function bagian_u() {
        return $this->belongsTo(Bagian::class, 'bagian', 'id');
    }

    public function telepon() {
        return $this->hasOne(Telepon::class, 'karyawan_id', 'id');
    }

    public function hobi() {
        return $this->belongsToMany(Hobi::class, 'hobi_karyawan', 'karyawan_id', 'hobi_id')->withTimestamps();
    }
}
