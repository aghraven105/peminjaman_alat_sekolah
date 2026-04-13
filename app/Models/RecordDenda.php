<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class RecordDenda extends Model
{
    protected $fillable = ['peminjaman_id', 'tipe_denda', 'jumlah_denda', 'alasan', 'tanggal_bayar'];

    public function peminjamanAlat()
    {
        return $this->belongsTo(PeminjamanAlat::class, 'peminjaman_id');
    }
}