<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;
use Illuminate\Support\Facades\DB;

class AnggotaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('anggota')->truncate();
        $members = factory(App\Models\Member::class, 20)->create();
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

        /*
        $faker = Faker::create('id_ID');

    	for($i = 1; $i <= 50; $i++){

    	      // insert data ke table pegawai menggunakan Faker
    		DB::table('anggota')->insert([
    			'nik' => $faker->nik,
    			'nama' => $faker->name,
    			'email' => $faker->email,
    			'no_hp' => $faker->tollFreeNumber,
                'jenkel' => $faker->address,
                'agama' => $faker->address,
                'pekerjaan' => $faker->jobTitle,
                'alamat' => $faker->address,
                'tempat_lahir' => $faker->city,
                'tanggal_lahir' => $faker->address,
    		]);

    	}
        */
    }
}
