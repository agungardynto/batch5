<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Bagian extends Model
{
    use SoftDeletes;
    protected $guarded = [];

    public function karyawan() {
        return $this->hasMany(Karyawan::class, 'bagian', 'id');
    }
}
