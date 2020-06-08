<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Carbon\Carbon;

class usuariosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->insert([
            [
            'Nombre' => Str::random(10),
            'Apellido' => Str::random(10),
            'Correo' => Str::random(6).'@gmail.com',
            'Contraseña' => Hash::make('password'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'Nombre' => Str::random(10),
                'Apellido' => Str::random(10),
                'Correo' => Str::random(6).'@gmail.com',
                'Contraseña' => Hash::make('password'),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}
