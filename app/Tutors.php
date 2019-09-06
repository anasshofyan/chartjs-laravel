<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tutors extends Model
{
    protected $table = 'tutor';
    protected $primaryKey = 'kode_id';
    protected $fillable = ['nama_tutor', 'tanggal_masuk', 'tanggal_lahir', 'area', 'asal_institusi', 'alamat_domisili', 'bidang', 'no_telepon', 'email'];
    protected $timestamp = ['create_at', 'update_at'];
}
