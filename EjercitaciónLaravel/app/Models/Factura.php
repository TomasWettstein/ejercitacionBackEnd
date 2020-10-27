<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Producto;

class Factura extends Model
{
    use HasFactory;
    public $table = "facturas";
    public $guarded = [];
    public function productos()
    {
        return $this->hasMany(Producto::class, 'factura_id');
    }
}
