<?php

namespace Database\Seeders;
use DB;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $rols = ['administrador', 'editor', 'supervisor'];
        foreach ($rols as $rol) {
            DB::table('roles')->insert([
                'name' => $rol,
                'created_at'=>now(),
                'updated_at'=>Carbon::now()->format('Y-m-d H:i:s'),
            ]);
        }

    }
}
