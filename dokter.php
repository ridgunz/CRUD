<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class dokter extends Model
{
	protected $primaryKey="id_dokter";
    protected $table='dokter';
    protected $fillable=['nama_dokter','alamat'];
}
