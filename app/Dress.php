<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

/**
 * 
 */
class Dress extends Model
{
	public $table = 'dress';

	protected $fillable = [
		'nama_barang' , 'jenis_produk' , 'color' , 'ukuran_produk' , 'stock'
	];
	
	}