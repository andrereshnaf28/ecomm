<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Pembeli extends Model
{
	public $table = 'pembeli';

	protected $fillable = [
		'nama_pelanggan' , 'alamat_lengkap' , 'no_telp' , 'kode_pos_pelanggan'
	];
	
	}