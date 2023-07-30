<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    protected $table = 'Murid';
    protected $fillable = ['nama_murid','umur_murid','hobi_murid'];
    public $timestamps = TRUE;
    use HasFactory;
}
