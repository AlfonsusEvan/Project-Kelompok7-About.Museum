<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;



class Contact extends Model
{
    
    use  HasFactory;
    // protected $table = 'contacts';
    protected $fillable = [
        'name',
        'email',
        'telepon',
        'pesanan',
        'umur',
        'tanggal'
    ];

}
