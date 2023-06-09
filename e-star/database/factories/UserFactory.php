<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserFactory extends Factory
{
    public function definition()
    {
        $isEmailVerified = (bool) mt_rand(0, 1);
        return [
            'email' => $this->faker->unique()->safeEmail(),
            'password' => Hash::make(Str::random(10)),
            'is_email_verified' => $isEmailVerified,
            'is_verified_student' => $isEmailVerified ? (bool) mt_rand(0, 1) : false,
            'role' => $this->faker->randomElement([User::ROLE_USER, User::ROLE_ADMIN]),
            'remember_token' => Str::random(10),
        ];
    }
}
