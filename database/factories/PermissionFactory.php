<?php

namespace Database\Factories;
use App\Models\Permission;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

class PermissionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'=>'Crear usuario',
            'slug'=>'users.create',
        ];
    }
}


