<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use App\User;


class AdminFactory extends Factory
{
    protected $model = User::class;
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
    return [
        'nom' => 'admin',
        'prenom' => 'admin',
        'telephone' => '0606060060',
        'adress' => 'oujda',
        'email' => 'admin@gmail.com',
        'email_verified_at' => now(),
        'password' => Hash::make('admin'), // password
        'remember_token' => Str::random(10),
        'is_admin'=>1,
        
    ];
}
}
