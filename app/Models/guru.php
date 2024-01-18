<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class guru extends Model
{
    use HasFactory;
    protected $table = 'guru';
    protected $primaryKey = 'nip_guru';
    protected $guarded = ['nip_guru', 'id_sekolah'];
    public $timestamps = false;
}
