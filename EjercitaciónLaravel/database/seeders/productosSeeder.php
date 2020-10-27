<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class productosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(
            [
                "descripcion" => "palas",
                "cantidad" => 2,
                "precioUnitario" => 100,
                "subtotal" => 200,
                "factura_id" => 1,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "leche",
                "cantidad" => 4,
                "precioUnitario" => 50,
                "subtotal" => 200,
                "factura_id" => 1,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "yogurt",
                "cantidad" => 1,
                "precioUnitario" => 50,
                "subtotal" => 50,
                "factura_id" => 2,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "jugo",
                "cantidad" => 1,
                "precioUnitario" => 100,
                "subtotal" => 100,
                "factura_id" => 2,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "leche light",
                "cantidad" => 1,
                "precioUnitario" => 50,
                "subtotal" => 50,
                "factura_id" => 2,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "papas fritas",
                "cantidad" => 1,
                "precioUnitario" => 100,
                "subtotal" => 100,
                "factura_id" => 3,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "pizzas",
                "cantidad" => 2,
                "precioUnitario" => 50,
                "subtotal" => 100,
                "factura_id" => 4,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "zapallos",
                "cantidad" => 4,
                "precioUnitario" => 25,
                "subtotal" => 100,
                "factura_id" => 4,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "pan",
                "cantidad" => 3,
                "precioUnitario" => 50,
                "subtotal" => 150,
                "factura_id" => 4,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "quesos",
                "cantidad" => 2,
                "precioUnitario" => 75,
                "subtotal" => 150,
                "factura_id" => 4,
            ]
            );
         DB::table('productos')->insert(
            [
                "descripcion" => "jugos",
                "cantidad" => 15,
                "precioUnitario" => 10,
                "subtotal" => 150,
                "factura_id" => 4,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "dulce de leche",
                "cantidad" => 4,
                "precioUnitario" => 75,
                "subtotal" => 300,
                "factura_id" => 4,
            ]
            );
        DB::table('productos')->insert(
            [
                "descripcion" => "leche",
                "cantidad" => 5,
                "precioUnitario" => 50,
                "subtotal" => 250,
                "factura_id" => 4,
            ]
            );

            
    }
}
