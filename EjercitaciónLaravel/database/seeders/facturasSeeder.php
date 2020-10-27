<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class facturasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('facturas')->insert(
            [
                "fecha" => "20/10/2020",
                "cantItems" => 2,
                "total" => 400,
            ]
            );
        DB::table('facturas')->insert(
            [
                "fecha" => "22/09/2020",
                "cantItems" => 3,
                "total" => 200,
            ]
            );
        DB::table('facturas')->insert(
            [
                "fecha" => "19/08/2020",
                "cantItems" => 1,
                "total" => 100,
            ]
            );
        DB::table('facturas')->insert(
            [
                "fecha" => "19/08/2020",
                "cantItems" => 7,
                "total" => 1200,
            ]
            );
    }
}
