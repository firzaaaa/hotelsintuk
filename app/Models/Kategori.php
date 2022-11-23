<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;

    protected $table= 'kategori';

    protected $fillable= [
        'name'
    ];

    public function buku(){
        return $this->hasMany('app\Models\Buku');
    }
}
