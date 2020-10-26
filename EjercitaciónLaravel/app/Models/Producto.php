<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Factura;

class Producto extends Model
{
    use HasFactory;
    public $table = "Productos";
    public $guarded = [];

    public function facturas(){
        return $this->belongsTo(Factura::class, 'factura_id');
    }
}
