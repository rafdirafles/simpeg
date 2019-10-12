<?php

use Illuminate\Database\Seeder;

class Divisi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('divisis')->insert([
            'id_unit_kerja'=>1,
            'nama_devisi'=>'siak',
        ]);
    }
}
