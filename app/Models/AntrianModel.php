<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AntrianModel extends Model
{
    use HasFactory;
    protected $table = 'table_pengunjung';
    protected $fillable = ['antrian', 'status', 'jenis_antrian'];
}
