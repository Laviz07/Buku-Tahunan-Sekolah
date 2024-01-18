<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class kepsek extends Model
{
    use HasFactory;
    protected $table = 'kepala_sekolah';
    protected $primaryKey = 'id_kepsek';
    protected $guarded = ['id_kepsek', 'id_sekolah'];
    public $timestamps = false;
}
